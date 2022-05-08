<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Customer;


class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
       {
          // insert into customer table
          $cust = new Customer();
          $cust->email  = 'LinhAp@gmail.com';
          $cust->password = bcrypt('yen2801');
          $cust->full_name = 'LinhAp';
          $cust->username = 'LinhAP';
          $cust-> status = 1;
          $cust->save();

          $cust = new Customer();
          $cust->email  = 'ANTT@gmail.com';
          $cust->password = bcrypt('yen2801');
          $cust->full_name = 'Thinh Dinh An';
          $cust->username = 'AnTD';
          $cust-> status = 1;
          $cust->save();

          // insert customer
          $cust = new Customer();
          $cust->email  = 'YenNhi@gmail.com';
          $cust->password = bcrypt('yen2801');
          $cust->full_name = 'Nguyen Le Yen Nhi';
          $cust->username = 'NhiNLY';
          $cust-> status = 1;
          $cust->save();

       }
}
