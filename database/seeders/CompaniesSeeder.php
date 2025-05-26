<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('companies')->insert([
            [
                'name' => 'Google',
                'email' => 'contact@google.com',
                'created_at' => now(),
                'updated_at' => now(),
                'website' => 'https://www.microsoft.com',
            ],
            [
                'name' => 'Microsoft',
                'email' => 'contact@microsoft.com',
                'website' => 'https://www.microsoft.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Apple',
                'email' => 'contact@apple.com',
                'created_at' => now(),
                'updated_at' => now(),
                'website' => 'https://www.apple.com',
            ],
            [
                'name' => 'Amazon',
                'email' => 'contact@amazon.com',
                'created_at' => now(),
                'updated_at' => now(),
                'website' => 'https://www.amazon.com',
            ],
        ]);

        foreach(Company::all() as $key => $company) {
            $company->users()->attach(1);
        }
    }

}
