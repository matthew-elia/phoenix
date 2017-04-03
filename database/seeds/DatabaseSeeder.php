<?php

use Illuminate\Database\Seeder;

use App\Customer;
use App\Email;
use App\Phone;
use App\Address;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CustomerTableSeeder::class);
    }
}

class CustomerTableSeeder extends Seeder {

    public function run()
    {
        DB::table('customers')->delete();
        DB::table('customer_emails')->delete();
        DB::table('customer_phones')->delete();
        DB::table('customer_addresses')->delete();

        $customer = Customer::create(['first_name' => 'Jonathon', 'last_name' => 'Doe']);

        Email::create([ 'customer_id' => $customer->id, 'type' => 'work', 'email_address' => 'jdoe@somewhere.org', 'default' => true]);
        Email::create([ 'customer_id' => $customer->id, 'type' => 'personal', 'email_address' => 'jdoe@gmail.com']);
        
        Phone::create([ 'customer_id' => $customer->id, 'type' => 'work', 'number' => '2124583322', 'extension' => '223', 'default' => true]);
        Phone::create([ 'customer_id' => $customer->id, 'type' => 'cell', 'number' => '9173348484' ]);
        
        Address::create(['customer_id' => $customer->id, 'label' => 'Home', 'type' => 'shipping', 'street_address_primary' => '4854 Embassy Drive', 'street_address_secondary' => 'Building 8', 'city' => 'Arlington', 'state'=>'VA', 'zip'=>'20184']);
        Address::create(['customer_id' => $customer->id, 'label' => 'Work', 'type' => 'shipping', 'street_address_primary' => '4854 South 4th Street', 'street_address_secondary' => 'Suite 705', 'city' => 'Newark', 'state'=>'NJ', 'zip'=>'10475-4392', 'default'=>true]);
        Address::create(['customer_id' => $customer->id, 'label' => 'Parents', 'type' => 'billing', 'street_address_primary' => '4854 South 4th street', 'street_address_secondary' => 'Suite 705', 'city' => 'Newark', 'state'=>'NJ', 'zip'=>'10475-4392']);

    }

}