<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->down();
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('type',10)->default('U');
            $table->rememberToken();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
        $this->initData();          
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }

    private function initData()
    {
        if (Schema::hasTable('users'))
        {
            //  cuando ya este creada la tabla
            //  agregamos un usuario por defecto
            DB::table('users')->insert(
                array(
                    'name'      => 'Administrador',
                    'email'     => 'admin@admin.com',
                    'password'  => Hash::make('admin'),
                    'type'      => 'A'
                )
            );
        }
    }
    
}
