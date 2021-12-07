<?php

use App\Content;
use App\GeneralSettings;
use App\SaleProduct;
use Illuminate\Database\Seeder;

class GeneralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GeneralSettings::create([
            'logo'     => 'front/img/logo.png',
            'sitename'     => 'Nail Saloon',
            'mainimage'     => 'front/img/bg_img.jpg',
            'address'     => '21 Rue Félix Gouno',
            'phone1'     => '0690914868',
            'phone2'     => '0590232962',
            'web'     => 'www.google.com',
            'email'     => 'info@email.com',
            'footer'    => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever',
            'facebook'    => 'https://facebook.com/',
            'instagram'    => 'https://www.instagram.com/',
            'twitter'    => 'https://www.twitter.com/',
        ]);
        Content::create([
            'slider1' => 'front/img/full1.jpg',
            'slider2' => 'front/img/full2.jpg',
            'slider3' => 'front/img/full3.jpg',
            'slider4' => 'front/img/full4.jpg',
            'slider5' => 'front/img/full5.jpg',

            'review1' => 'Aliquam metus ex, laoreet in nulla et, varius aliquam est. Vestibulum neque dui, auctor sit amet tincidunt ac, sodales sit amet est. Quisque gravida sit amet odio sed vulputate. Curabitur eleifend.',
            'review2' => 'Aliquam metus ex, laoreet in nulla et, varius aliquam est. Vestibulum neque dui, auctor sit amet tincidunt ac, sodales sit amet est. Quisque gravida sit amet odio sed vulputate. Curabitur eleifend.',
            'review3' => 'Aliquam metus ex, laoreet in nulla et, varius aliquam est. Vestibulum neque dui, auctor sit amet tincidunt ac, sodales sit amet est. Quisque gravida sit amet odio sed vulputate. Curabitur eleifend.',

            'rgive1' => 'Laura Brandon',
            'rgive2' => 'Britney Spears',
            'rgive3' => 'Selena Gomez',

            'o1image' => 'front/img/package11.jpg',
            'o2image' => 'front/img/package22.jpg',

            'o1title' => 'Forfait maquillage arty',
            'o2title' => 'Forfait maquillage commercial',

            'o1duration' => '2 - 3 heures',
            'o2duration' => '2 - 3 heures',

            'o1d1' => 'Conseil maquillage',
            'o1d2' => 'Coupe de cheveux & Style',
            'o1d3' => 'Maquillage Aérographe',
            'o1d4' => 'Application de faux cils',

            'o2d1' => 'Conseil maquillage',
            'o2d2' => 'Coupe de cheveux & Style',
            'o2d3' => 'Maquillage Aérographe',
            'o2d4' => 'Application de faux cils',

            'o1p1' => '19',
            'o1p2' => '25',
            'o1p3' => '31',
            'o1p4' => '24',

            'o2p1' => '19',
            'o2p2' => '25',
            'o2p3' => '31',
            'o2p4' => '24',
        ]);
        SaleProduct::create([
            'product_id' => '1',
            'date' => 'June 15, 2021 12:00:00'
        ]);
        \App\Service::create([
            'title' => 'Maquillage de mariée',
            'image' => 'front/img/services/1.jpg',
            'price' => '37.00',
            'duration' => '25 - 35 min',
            'details' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        ]);
        \App\Service::create([
            'title' => 'Maquillage de mariée',
            'image' => 'front/img/services/2.jpg',
            'price' => '38.00',
            'duration' => '25 - 35 min',
            'details' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        ]);
        \App\Service::create([
            'title' => 'Maquillage de mariée',
            'image' => 'front/img/services/3.jpg',
            'price' => '32.00',
            'duration' => '25 - 35 min',
            'details' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        ]);
        \App\Service::create([
            'title' => 'Maquillage de mariée',
            'image' => 'front/img/services/4.jpg',
            'price' => '65.00',
            'duration' => '25 - 35 min',
            'details' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        ]);
        \App\Service::create([
            'title' => 'Maquillage de mariée',
            'image' => 'front/img/services/5.jpg',
            'price' => '95.00',
            'duration' => '25 - 35 min',
            'details' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        ]);
        \App\Service::create([
            'title' => 'Maquillage de mariée',
            'image' => 'front/img/services/6.jpg',
            'price' => '45.00',
            'duration' => '25 - 35 min',
            'details' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        ]);
        \App\About::create([
            'image' => 'front/img/about/about_img.jpg',
            'description' => 'Le secret du mouvement et du volume époustouflant de ce look de cheveux longs réside uniquement dans le style. Coupé en couches douces et effilé sur les côtés, toute laction est séchée au sèche-cheveux et repassée à chaud dans les longues tresses, mèche par mèche Le secret du mouvement et du volume époustouflant de ce look de cheveux longs réside uniquement dans le style. Coupé en couches douces et effilé sur les côtés, toute laction est séchée au sèche-cheveux et repassée à chaud dans les longues tresses, mèche par mèche',
        ]);
        \App\Gallery::create([
            'image' => 'front/img/gallery/thumb1.jpg',
        ]);
        \App\Gallery::create([
            'image' => 'front/img/gallery/thumb2.jpg',
        ]);
        \App\Gallery::create([
            'image' => 'front/img/gallery/thumb3.jpg',
        ]);
        \App\Gallery::create([
            'image' => 'front/img/gallery/thumb4.jpg',
        ]);
        \App\Gallery::create([
            'image' => 'front/img/gallery/thumb5.jpg',
        ]);
        \App\Gallery::create([
            'image' => 'front/img/gallery/thumb6.jpg',
        ]);
        \App\Gallery::create([
            'image' => 'front/img/gallery/thumb7.jpg',
        ]);
        \App\Gallery::create([
            'image' => 'front/img/gallery/thumb8.jpg',
        ]);
        \App\Gallery::create([
            'image' => 'front/img/gallery/thumb9.jpg',
        ]);
        \App\Gallery::create([
            'image' => 'front/img/gallery/thumb10.jpg',
        ]);
    }
}
