<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Hash;
use App\Models\Role;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $role_admin = Role::where('name', 'admin')->first();
        $role_user = Role::where('name', 'user')->first();

        $admin = new User();
        $admin->name = 'Conor Murphy';
        $admin->email = 'admin@conorbookstore.ie';
        $admin->password = Hash::make('secret');
        $admin->save();
        $admin->roles()->attach($role_admin);

        $user = new User();
        $user->name = 'Jim James';
        $user->email = 'user@conorbookstore.ie';
        $user->password = Hash::make('secret');
        $user->save();
        $user->roles()->attach($role_user);

        // $customer = new Customer();
        // $customer->address = '123 Fake Street';
        // $customer->phone = '025984554';
        // $customer->user_id = $user->id;
        // $customer->save();

        //admins
        for($i = 1; $i <= 2; $i++){
          $user = User::factory()->create();
          $user->roles()->attach($role_admin);
        }

        //users
        for($i = 1; $i <= 20; $i++){
          $user = User::factory()->create();
          $user->roles()->attach($role_user);
        }

        //customers
        // for($i = 1; $i <= 20; $i++){
        //   $user = User::factory()->create();
        //   $user->roles()->attach($role_user);
        //   $customer = Customer::factory()->create([
        //     'user_ud' => $user,
        //   ]);
        // }

        // $user = new User();
        // $user->name = 'Beth Kelly';
        // $user->email = 'beth@conorbookstore.ie';
        // $user->password = Hash::make('secret');
        // $user->save();
        // $user->roles()->attach($role_user);
        //
        // $user = new User();
        // $user->name = 'Luke Bob';
        // $user->email = 'luke@conorbookstore.ie';
        // $user->password = Hash::make('secret');
        // $user->save();
        // $user->roles()->attach($role_user);
        //
        // $user = new User();
        // $user->name = 'Ruth West';
        // $user->email = 'ruth@conorbookstore.ie';
        // $user->password = Hash::make('secret');
        // $user->save();
        // $user->roles()->attach($role_user);
        //
        // $user = new User();
        // $user->name = 'Nick East';
        // $user->email = 'nick@conorbookstore.ie';
        // $user->password = Hash::make('secret');
        // $user->save();
        // $user->roles()->attach($role_user);
        //
        // $user = new User();
        // $user->name = 'Rebbeca North';
        // $user->email = 'rebecca@conorbookstore.ie';
        // $user->password = Hash::make('secret');
        // $user->save();
        // $user->roles()->attach($role_user);
    }
}
