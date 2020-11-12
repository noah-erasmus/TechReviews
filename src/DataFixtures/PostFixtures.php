<?php

namespace App\DataFixtures;

use App\Entity\Post;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class PostFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        $post = new Post();
        $post->setTitle('Apple MacBook Air');
        $post->setContent('If you’re looking for an Apple laptop, this is the one to buy unless you need a beast such as the 16in MacBook Pro. Just spend the extra £100 and buy the MacBook Air with the Intel Core i5 processor, rather than the Core i3, at £1,099.');
        $user->setImage('uploads/profileImages/macbook.jpg');
        $user->setRating(4);
        $manager->persist($post);

        $post = new Post();
        $post->setTitle('OnePlus 8T');
        $post->setContent("In and of itself, the OnePlus 8T is an excellent device and it'll surely satisfy anyone looking for a high-powered, reliable Android. The brilliant display is my favorite thing about the phone, but there's a more enticing and cheaper competitor available from OnePlus itself -- the OnePlus 8. ");
        $user->setImage('uploads/profileImages/oneplus8t.jpg');
        $user->setRating(5);
        $manager->persist($post);

        $post = new Post();
        $post->setTitle('Apple Watch Series 6');
        $post->setContent("The Apple Watch Series 6 feels like it has perfected many of the features I liked about its predecessor. It has a brighter always-on display, a more powerful processor, faster charging and two new colorful options to choose from. But the feature I was most excited to try out was its new sensor that measures oxygen saturation in the blood (aka SpO2) with the tap of a screen. As someone who panic-bought a pulse oximeter at the start of the coronavirus pandemic and still checks her levels at the first sign of a cough, the thought of having one strapped to my wrist at all times was enough to pique my interest.");
        $user->setImage('uploads/profileImages/applewatch6.jpg');
        $user->setRating(3);
        $manager->persist($post);

        $post = new Post();
        $post->setTitle('Apple Watch Series 6');
        $post->setContent("The Apple Watch Series 6 feels like it has perfected many of the features I liked about its predecessor. It has a brighter always-on display, a more powerful processor, faster charging and two new colorful options to choose from. But the feature I was most excited to try out was its new sensor that measures oxygen saturation in the blood (aka SpO2) with the tap of a screen. As someone who panic-bought a pulse oximeter at the start of the coronavirus pandemic and still checks her levels at the first sign of a cough, the thought of having one strapped to my wrist at all times was enough to pique my interest.");
        $user->setImage('uploads/profileImages/applewatch6.jpg');
        $user->setRating(3);
        $manager->persist($post);


        $manager->flush();
    }
}