<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Service::create([
            'title_ar' => 'التصوير الإعلاني',
            'description_ar' => 'تصوير الإعلانات التجارية وإبراز المُنتج ومميزاته.
وينقسم التصوير الإعلاني الى ثلاثة أنواع:                     
                        التصوير الإعلاني بخلفية بيضاء والتركيز فيها على المنتج فقط بدون أي عناصر إضافية جمالية. ويستخدم هذا النوع غالباً في متاجر التسويق الالكترونية.
                        التصوير الإعلاني بخلفية جمالية يظهر فيها المنتج وبعض العناصر معه المكونة أو المكملة للمنتج، مثل تصوير القهوة ووضع بجانبه السكر والملعقة وهكذا. ويستخدم هذا النوع للحملات الإعلانية الكبيرة.
                        التصوير الإعلاني للمنتج بشكله الطبيعي دون تدخل المصور في التزيين الا في حال تطلب الامر.',

            'title_en' => 'Advertising Photography',
            'description_en' => 'Photography commercial advertisements and highlighting the product and its features.
                    Advertising photography is divided into three types:
                     Advertising photography with white background and focus on the product only without any additional aesthetic elements. This type is often used in electronic marketing stores.
                     Advertising photography with an aesthetic background showing the product and some components with it component or complementary to the product, such as coffee and put beside him sugar and spoon and so on. This type is used for large ad campaigns.
                     Advertising photography of the product in its natural form without the intervention of the photographer in the decoration only if required.',

        ]);
    }
}
