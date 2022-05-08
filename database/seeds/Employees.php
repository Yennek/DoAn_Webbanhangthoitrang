<?php

use Illuminate\Database\Seeder;
use App\Models\Employee;

class Employees extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $emp = new Employee();
        $emp->mail_address = "yen2801@gmail.com";
        $emp->password = bcrypt('yen2801');
        $emp->name = "Bui Thi Yen";
        $emp->role = 1;
        $emp->status = 1;
        $emp->save();

        $emp = new Employee();
        $emp->mail_address = "yen.1412@gmail.com";
        $emp->password = bcrypt('yen2801');
        $emp->name = "buifens";
        $emp->role = 1;
        $emp->status = 1;
        $emp->save();

        $emp = new Employee();
        $emp->mail_address = "loveconan@gmail.com";
        $emp->password = bcrypt('yen2801');
        $emp->name = "Ran Mori";
        $emp->role = 1;
        $emp->status = 1;
        $emp->save();
    }
}
