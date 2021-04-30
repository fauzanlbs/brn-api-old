<?php

namespace App\Repositories\User;

use App\Models\SocialAccount;
use App\Models\User;
use App\Repositories\User\UserRepository;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class EloquentUserRepository implements UserRepository
{

    /**
     * Get user by email
     *
     * @param string $email
     * @return User|null
     */
    public function getByEmail(string $email): User
    {
        return User::where('email', $email)->firstOrFail();
    }


    /**
     * Create or update User
     *
     * @param int $id
     * @param array $value
     *
     * @return User
     */
    public function createOrUpdate(?int $id, array $value): User
    {
        try {
            // Begin Transaction
            DB::beginTransaction();

            // find Or New user
            $row = (isset($id)) ? User::find($id) : new User;

            $row->name = $value['name'];
            $row->email = $value['email'];
            !isset($value['password']) ?: $row->password = Hash::make($value['password']);

            $row->save();

            DB::commit();
            // End Commit of Transaction

            return $row;
        } catch (\Exception $e) {
            DB::rollback();
            throw new \Exception($e);
        }
    }


    /**
     * @param  \Laravel\Socialite\Two\User  $data
     * @param  string  $provider
     *
     * @return \App\Models\Auth\User\User
     */
    public function findOrCreateProvider(\Laravel\Socialite\Two\User $data, string $provider): User
    {
        return response()->json(['oke']);
        $user = $this->getFromSocialAccount($data->id, $provider);
        if ($user) return $user;

        // User email may not provided.
        $userEmail = $data->email ?: "{$data->id}@{$provider}.com";

        $fresh = false;

        if (blank($user)) {

            $user = new User();
            $user->name = $data->getName();
            $user->email = $userEmail;
            $user->save();

            $fresh = true;
        }

        $this->provider($user, $data, $provider);

        if ($fresh) {
            event(new Registered($user->refresh()));
        }

        return $user;
    }


    /**
     * Get user from social account
     *
     * @param string $providerID
     * @param string $provider
     *
     * @return User|null
     */
    private function getFromSocialAccount(string $providerID, string $provider): ?User
    {
        return optional(
            SocialAccount::where(
                [
                    'provider' => $provider,
                    'provider_id' => $providerID,
                ]
            )->first()
        )->user;
    }


    /**
     * @param  \App\Models\Auth\User\User  $user
     * @param  \Laravel\Socialite\Two\User  $data
     * @param  string  $provider
     *
     * @return void
     */
    private function provider(User $user, \Laravel\Socialite\Two\User $data, string $provider): void
    {
        if ($user->hasProvider($provider, $data->id)) {
            // Update the users information, token and avatar can be updated.
            $user->socialAccounts()->update(
                [
                    'token' => $data->token,
                    'avatar' => $data->avatar,
                ]
            );
        } else {
            $user->socialAccounts()->save(
                new SocialAccount(
                    [
                        'provider' => $provider,
                        'provider_id' => $data->id,
                        'token' => $data->token,
                        'avatar' => $data->avatar,
                    ]
                )
            );
        }
    }
}
