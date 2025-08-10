<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    public function run()
    {
        Contact::create([
            'name' => 'Chairman Example',
            'company' => 'Your Company',
            'designation' => 'Chairman',
            'email' => 'chairman@example.com',
            'phone' => '+92-300-0000000',
            'website' => 'https://yourcompany.example',
        ]);

        Contact::create([
            'name' => 'Director Marketing',
            'company' => 'Your Company',
            'designation' => 'Director Marketing',
            'email' => 'director@example.com',
            'phone' => '+92-300-1111111',
        ]);
    }
}