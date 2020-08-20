<?php
namespace App\Database\Seeds;

use Illuminate\Database\Capsule\Manager as Capsule;

class UserSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     */
    public static function run()
    {
        Capsule::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => password_hash('admin', PASSWORD_BCRYPT),
        ]);
    }
}
