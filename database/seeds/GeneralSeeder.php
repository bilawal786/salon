<?php

use App\Content;
use App\GeneralSettings;
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
    }
}
