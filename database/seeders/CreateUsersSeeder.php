<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users = [
            [
                "prefix" => "นาย",
                "fullname" => "ธนพงษ์ สุนทราวิรัตน์",
                "sex" => "male",
                "phone" => "0997711531",
                "intitute" => "มหาวิทยาลัยราชภัฏเลย",
                "address" => "47/35 บ.นาเขิน ต.กุดป่อง อ.เมือง จ.เลย 42000",
                "email" => "ioko.peezaza@gmail.com",
                "is_admin" => "1",
                "password" => bcrypt("1234")
            ]
        ];

        foreach ($users as $key => $value) {
            User::create($value);
        }
    }
}
