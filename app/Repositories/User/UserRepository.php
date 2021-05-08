<?php

namespace App\Repositories\User;

use App\Models\User;

interface UserRepository
{
    /**
     * Get user by email
     *
     * @param   string  $email
     * @return User|null
     */
    public function getByEmail(string $email): User;


    /**
     * Create or update User
     *
     * @param int $id
     * @param array $value
     *
     * @return User
     */
    public function createOrUpdate(?int $id, array $value): User;


    /**
     * @param  \Laravel\Socialite\Two\User  $data
     * @param  string  $provider
     *
     * @return User
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function findOrCreateProvider(\Laravel\Socialite\Two\User $data, string $provider): User;
}
