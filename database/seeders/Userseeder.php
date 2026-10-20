<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User; // <-- Jangan lupa tambahkan baris use ini di atas

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userTeacherEmail = 'Sirwi@behh.com';
        $userStudentEmail = 'Wilson@behh.com';

        // User Teacher
        User::updateOrCreate(
            [
                'email' => $userTeacherEmail,
            ],
            [
                'name' => 'Sirwi',
                'password' => bcrypt('12345678'),
                'role' => 'teacher',
            ]
        );

        // User Student
        User::updateOrCreate(
            [
                'email' => $userStudentEmail,
            ],
            [
                'name' => 'Wilson',
                'password' => bcrypt('12345678'),
                'role' => 'student',
            ]
        );
        
    }
}