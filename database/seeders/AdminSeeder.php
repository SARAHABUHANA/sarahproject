<?php


namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Admin::create([
            'name' => 'sarhAbuhana',
          
            'password' => Hash::make('0951450089'),
        ]);
    }
}
