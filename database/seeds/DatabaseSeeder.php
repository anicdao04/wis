<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(SchoolYearsTableSeeder::class);
        $this->call(CurriculumManagementTableSeeder::class);
        $this->call(SubjectManagementTableSeeder::class);
        $this->call(YearManagementTableSeeder::class);
    }
}
