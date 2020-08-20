<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'studio88@admin',
            'password' => Hash::make('password'),
            'created' => Carbon::now(),
            'updated' => Carbon::now(),
        ]);

        DB::table('options')->insert([
            'name' => 'index_slogan',
            'value' => 'Таны хүссэн үйлчилгээг бид чанарын өндөр түвшинд хүйцэтгэж өгнө. Бид өөрсдийн хийж буй ажлууддаа үргэлж шинийг эрэлхийлж, чанарыг дээдэлж ажилладаг',
            'created' => Carbon::now(),
            'updated' => Carbon::now(),
        ]);

        DB::table('options')->insert([
            'name' => 'index_cover',
            'value' => 'uploads/viqPmMcylShuy0ghsJNuL0uXJJVDClCxAquK5Mnx.mp4',
            'created' => Carbon::now(),
            'updated' => Carbon::now(),
        ]);
        DB::table('options')->insert([
            'name' => 'logo',
            'value' => 'uploads/XVkswMB1bhPCtsiMVymuS4mPk14Dn6KqPaMNgcwc.png',
            'created' => Carbon::now(),
            'updated' => Carbon::now(),
        ]);
        
        DB::table('options')->insert([
            'name' => 'footer',
            'value' => 'Studio88 © Copyright 2020',
            'created' => Carbon::now(),
            'updated' => Carbon::now(),
        ]);

        DB::table('options')->insert([
            'name' => 'feature1',
            'value' => 'Дахин давтагдашгүй өвөрмөц санааг бид хэрэгжүүлнэ',
            'created' => Carbon::now(),
            'updated' => Carbon::now(),
        ]);

        DB::table('options')->insert([
            'name' => 'feature1_desc',
            'value' => 'Шинэлэг санаа',
            'created' => Carbon::now(),
            'updated' => Carbon::now(),
        ]);

        DB::table('options')->insert([
            'name' => 'feature2',
            'value' => 'Салбартаа нэр хүндтэй, олон жилийн туршлагатай гишүүдээс бүрдсэн',
            'created' => Carbon::now(),
            'updated' => Carbon::now(),
        ]);

        DB::table('options')->insert([
            'name' => 'feature2_desc',
            'value' => 'Мэгэжлийн хамт олон',
            'created' => Carbon::now(),
            'updated' => Carbon::now(),
        ]);

        DB::table('options')->insert([
            'name' => 'feature3',
            'value' => 'Таны хүсэл зорилгыг бид чанарын өндөр түвшинд хийж өгнө.',
            'created' => Carbon::now(),
            'updated' => Carbon::now(),
        ]);

        DB::table('options')->insert([
            'name' => 'feature3_desc',
            'value' => 'Чанартай гүйцэтгэл',
            'created' => Carbon::now(),
            'updated' => Carbon::now(),
        ]);

        DB::table('options')->insert([
            'name' => 'about_desc',
            'value' => 'Бид анхдагч, шинийг эрэлхийлэгч хүмүүсийг тодотгон гаргаж ирэхийн тулд оршдог. Бусад хүмүүс хэвийн байхад бид үргэлж өөрчлөлтийг эрэлхийлэн бусдаас ялгарч байдаг.
            Таны зорилгыг бусдад таниулахын тулд бид бүхий л аргыг ашиглах болно .Зүгээр нэг бичлэг хийж янзлахаас илүүтэйгээр бид урагшлах урам зориг өгөхийг эрмэлздэг. Бид энд урагш тэмүүлэхэд тань туслах болно.',
            'created' => Carbon::now(),
            'updated' => Carbon::now(),
        ]);

        DB::table('options')->insert([
            'name' => 'contact_mail',
            'value' => 'mail@mail.com',
            'created' => Carbon::now(),
            'updated' => Carbon::now(),
        ]);

        DB::table('options')->insert([
            'name' => 'contact_phone',
            'value' => '+976 99114456',
            'created' => Carbon::now(),
            'updated' => Carbon::now(),
        ]);

        DB::table('options')->insert([
            'name' => 'contact_address',
            'value' => 'Студи 88 продакшн, Gutal Office 7-давхар 19-хороо, Улаанбаатар хот 11000, Монгол улс',
            'created' => Carbon::now(),
            'updated' => Carbon::now(),
        ]);

        DB::table('options')->insert([
            'name' => 'contact_map',
            'value' => '47.8974345,106.8898597',
            'created' => Carbon::now(),
            'updated' => Carbon::now(),
        ]);

        DB::table('options')->insert([
            'name' => 'contact_cover',
            'value' => 'uploads/OkePt1mczbHptNfTbiKCQf3lZ9WrDImZPhTlJxz5.png',
            'created' => Carbon::now(),
            'updated' => Carbon::now(),
        ]);

        DB::table('options')->insert([
            'name' => 'about_cover',
            'value' => 'uploads/TEz3adNGSkatSUh7YyBRSowB41FRJAutZB41lM50.png',
            'created' => Carbon::now(),
            'updated' => Carbon::now(),
        ]);

        DB::table('options')->insert([
            'name' => 'portfolio_desc',
            'value' => 'Шинэлэг бас бүтээлч контентуудыг минь харна уу',
            'created' => Carbon::now(),
            'updated' => Carbon::now(),
        ]);

        DB::table('options')->insert([
            'name' => 'portfolio_cover',
            'value' => 'uploads/7kwnQF9zQbXZrb85je4PWxUDkKgKOhf5CirNMEM5.png',
            'created' => Carbon::now(),
            'updated' => Carbon::now(),
        ]);

        DB::table('options')->insert([
            'name' => 'facebook',
            'value' => 'https://www.facebook.com/Studio88.postproduction',
            'created' => Carbon::now(),
            'updated' => Carbon::now(),
        ]);

        DB::table('options')->insert([
            'name' => 'instagram',
            'value' => '#',
            'created' => Carbon::now(),
            'updated' => Carbon::now(),
        ]);

        DB::table('options')->insert([
            'name' => 'youtube',
            'value' => '#',
            'created' => Carbon::now(),
            'updated' => Carbon::now(),
        ]);
    }
}
