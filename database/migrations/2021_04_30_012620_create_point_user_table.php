<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePointUserTable extends Migration
{
    /**
     * The users table name.
     *
     * @var string
     */
    public $users_table;

    /**
     * The users table foreign key.
     *
     * @var string
     */
    public $users_foreign_key;

    /**
     * CreatePointUserTable constructor.
     *
     * @return void
     */
    public function __construct()
    {
        $model = new User();

        $this->users_table = $model->getTable();

        $this->users_foreign_key = $model->getForeignKey();
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('point_user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('point_id')->index();
            $table->unsignedBigInteger('user_id')->index();
            $table->timestamps();

            $table->foreign('point_id')->references('id')->on('points')->onDelete('cascade');
            $table->foreign($this->users_foreign_key)
                ->references('id')
                ->on($this->users_table)
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('point_user');
    }
}
