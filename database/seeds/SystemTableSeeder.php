<?php

use Illuminate\Database\Seeder;
use App\Image;
use App\Product;

class SystemTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $this->products();
        $this->images();
    }

    public function products() {
        Product::create([
            'name' => 'Baby Ear Muffs',
            'price' => 18.99,
            'summary' => 'Unisex Hearing Protection Noise Cancelling Headphones',
            'amazon' => 'https://www.amazon.com/dp/B075WXC2JR',
            'description' => json_encode([
                [
                    'title' => 'THE PERFECT WAY TO KEEP YOUR LITTLE ONE’S HEARING SAFE',
                    'content' => 'Are you worried about loud noises upsetting your little one, causing them discomfort, or even damaging their over-sensitive little ears? Well, you don’t have to be. These wonderful baby hearing protection ear muffs allow you to create a healthy, safe, and comfortable environment free of any loud noises for your child, virtually anywhere, any time!'
                ], [
                    'title' => 'Α MUST HAVE & FOR EVERY BABY BOY & GIRL',
                    'content' => 'ExceedBuy baby ear muffs are made to be not only safe, but also fun and comfortable for all toddlers from 3 to 24 months. Their lightweight and ergonomic construction ensures they do not cause your baby any kind of discomfort, and their cute, unisex design is perfect for little boys and girls alike!',
                ], [
                    'title' => 'PERFECT FOR CROWDED PLACES & LOUD NOISE ENVIRONMENTS',
                    'content' => 'Whether you’re looking for a way to protect your baby’s hearing from noises like loud music and the sound your vacuum cleaner makes, or a way to safely take them with you in loud noise environments, these ear muffs are your best choice. Crowded places, festivals, concerts, loud family gatherings - your little one will stay safe and comfortable anywhere!',
                ], [
                    'title' => 'PREMIUM QUALITY, TESTED FOR SAFETY',
                    'content' => 'When it comes to your baby’s ear muffs and hearing protection, we make a point of using nothing but the absolutely safest materials, and we’ve got the lab tests to prove that! The earmuffs are made with high quality BPA-free plastic, and they feature comfortable soft-padded headband and interiors',
                ], [
                    'title' => '100% SATISFACTION, OR YOUR MONEY BACK!',
                    'content' => 'At ExceedBuy, we’re actually very proud of our baby ear muffs, and would recommend them to every toddler parent. After all, they’re what we’ve used for our babies’ hearing protection ourselves! If, however, they turn out to be not what you were looking for, just contact us and we’ll issue you a full refund!',
                ],
            ]),
        ]);
    }

    public function images() {
        Image::create(['path' => 'img/products/ear_muffs/Session-041.jpg', 'isDisplayed' => true, 'product' => 1]);
        Image::create(['path' => 'img/products/ear_muffs/Session-046.jpg', 'isDisplayed' => false, 'product' => 1]);
        Image::create(['path' => 'img/products/ear_muffs/Session-049.jpg', 'isDisplayed' => false, 'product' => 1]);
        Image::create(['path' => 'img/products/ear_muffs/Session-053.jpg', 'isDisplayed' => false, 'product' => 1]);
        Image::create(['path' => 'img/products/ear_muffs/IMG_0922.jpg', 'isDisplayed' => false, 'product' => 1]);
        Image::create(['path' => 'img/products/ear_muffs/IMG_0930.jpg', 'isDisplayed' => false, 'product' => 1]);
        Image::create(['path' => 'img/products/ear_muffs/IMG_0934.jpg', 'isDisplayed' => false, 'product' => 1]);
    }

}
