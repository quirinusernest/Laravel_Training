<?php

namespace Database\Seeders;

use App\Models\CmsUsers;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class NewCmsUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CmsUsers::insert([
            'name' => 'Quirinus Ernest',
            'email' => 'ernest@unika.ac.id',
            'password' => Hash::make('123456'),
            'foto' => 'https://randomuser.me/api/portraits/men/52.jpg'
        ]);
    }
}
