<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customers =[
            ['name' => 'John Doe', 'email' => 'johndoe@example.com', 'phone' => '1234567890', 'address' => '123'],
            ['name' => 'Jane Smith', 'email' => 'janesmith@example.com', 'phone' => '0987654321', 'address' => '456'],
            ['name' => 'Alice Johnson', 'email' => 'alicejohnson@example.com', 'phone' => '9876543210', 'address' => '789']
        ];
        // Chèn dữ liệu vào bảng customers
        foreach ($customers as $customer) {
            Customer::create($customer);
        }
    }
}
