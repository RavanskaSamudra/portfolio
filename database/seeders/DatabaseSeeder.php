<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // =========================
        // USER (ADMIN)
        // =========================
        User::factory()->create([
            'name' => 'Antonius Samudra',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
        ]);

        // =========================
        // PROFILE
        // =========================
        DB::table('profiles')->insert([
            'name' => 'Antonius Samudra',
            'title' => 'Fullstack Web Developer',
            'about' => 'Saya adalah web developer yang fokus di Laravel, CodeIgniter, dan C# WinForms.',
            'photo' => 'profile.jpg',
            'cv' => 'cv.pdf',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // =========================
        // SKILLS
        // =========================
        DB::table('skills')->insert([
            [
                'name' => 'Laravel',
                'icon' => 'fab fa-laravel',
                'level' => 90,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'CodeIgniter',
                'icon' => 'fas fa-fire',
                'level' => 80,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'C# WinForms',
                'icon' => 'fas fa-desktop',
                'level' => 75,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // =========================
        // PROJECTS
        // =========================
        DB::table('projects')->insert([
            [
                'title' => 'Employee Management System',
                'slug' => Str::slug('Employee Management System'),
                'description' => 'Aplikasi desktop C# untuk manajemen karyawan.',
                'image' => 'ems.png',
                'link' => 'https://github.com/username/ems',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Microsign Dashboard',
                'slug' => Str::slug('Microsign Dashboard'),
                'description' => 'Dashboard monitoring microsign berbasis Laravel.',
                'image' => 'microsign.png',
                'link' => 'https://github.com/username/microsign',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // =========================
        // EXPERIENCES
        // =========================
        DB::table('experiences')->insert([
            [
                'company' => 'PT Contoh Teknologi',
                'position' => 'Web Developer Intern',
                'start_year' => '2023',
                'end_year' => '2024',
                'description' => 'Membuat sistem internal menggunakan Laravel.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // =========================
        // EDUCATIONS
        // =========================
        DB::table('educations')->insert([
            [
                'school' => 'SMK Contoh',
                'major' => 'Rekayasa Perangkat Lunak',
                'start_year' => '2021',
                'end_year' => '2024',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // =========================
        // CONTACTS
        // =========================
        DB::table('contacts')->insert([
            [
                'name' => 'Budi',
                'email' => 'budi@example.com',
                'message' => 'Halo, saya tertarik dengan portfolio kamu.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Siti',
                'email' => 'siti@example.com',
                'message' => 'Bisa kerja sama untuk project?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
