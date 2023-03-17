<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contact = new Contact();
        $contact->name = 'Test User';
        $contact->email = 'test@test.com';
        $contact->phone = '1234567890';
        $contact->description = 'This is a test contact.';
        $contact->save();
        $contact2 = new Contact();
        $contact2->name = 'Test User';
        $contact2->email = 'test@test2.com';
        $contact2->phone = '1234567890';
        $contact2->description = 'This is a test contact.';
        $contact2->save();
        $contact3 = new Contact();
        $contact3->name = 'Test User';
        $contact3->email = 'test@test3.com';
        $contact3->phone = '1234567890';
        $contact3->description = 'This is a test contact.';
        $contact3->save();
    }
}
