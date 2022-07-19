<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'website_title' => 'WinTk71.com',
            'slide_text' => '👉 Welcome to WinTk71.com ! এখানে মিনিমাম Deposit ৩০০ টাকা, সর্বোচ্চ ২৫,০০০ টাকা এবং ১০০০ টাকা Deposit করলে ১০০০ টাকা বোনাস। মিনিমাম Withdraw ৫০০ টাকা , সর্বোচ্চ ২৫,০০০ টাকা (৫ মিনিটে পেমেন্ট) 💖 👈',
            'deposit_minimum' => '100',
            'withdrow_minimum' => '100',
        ]);
    }
}
