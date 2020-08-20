<?php
namespace App\Database\Migrations;

use Illuminate\Database\Capsule\Manager as Capsule;

class UsersMigration
{
    public static function up()
    {
        if(!Capsule::schema()->hasTable('users'))
        {
            Capsule::schema()->create('users', function ($table){
                $table->bigIncrements('id');
                $table->string('name', 120)->unique();
                $table->string('email', 200)->unique();
                $table->text('password');
            });
        }
    }

    public static function change()
    {

    }

    public static function down()
    {
        if(Capsule::schema()->hasTable('users'))
            Capsule::schema()->drop('users');
    }
}