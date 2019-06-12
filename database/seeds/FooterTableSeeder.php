<?php

use Illuminate\Database\Seeder;

class FooterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Footer::create([
            'rights_ar' => ' جميع الحقوق محفوظة',
            'rights_en' => ' All Rights Reserved ',
            'facebook' => 'https://www.facebook.com/',
            'twitter' => 'https://www.twitter.com/',
            'google_plus' => 'https://plus.google.com',
            'instagram' => 'https://instagram.com',
            'youtube' => 'https://youtube.com',
            'pinterest' => 'https://pinterest.com',
            'google_drive' => 'https://www.google.com/drive/',
            'linkedin' => 'https://www.linkedin.com',
            'google_play' => 'https://www.linkedin.com',
            'app_store' => 'https://www.apple.com/ios/app-store/',
            'behance' => 'https://behance.net',
            'vimeo' => 'https://vimeo.com',
        ]);
    }
}
