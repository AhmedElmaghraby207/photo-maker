<?php

use Illuminate\Database\Seeder;

class AboutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\About::create([
            'details_ar' => 'رواد في الابداع الفني الرقمي لصنع الصورة الاحترافية. نعمل في صانع الصورة بفرق متخصصة ونسخر كافة الوسائل التقنية الحديثة لتعزيز مكانة عملائنا. الإبداع مزيج بين المنطق والخيال ... هكذا نحن !',
            'details_en' => 'Pioneers in digital artistic creativity for professional image making, We work in the image maker with specialized teams and we dedicate all modern technological means to enhance the position of our customers Creativity is a combination of logic and imagination ... so we are!'
        ]);
    }
}
