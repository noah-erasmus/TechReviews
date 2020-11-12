<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        $user = new User();
        $user->setUsername('Bob');
        $user->setEmail('bob@gmail.com');
        $user->setPassword($this->passwordEncoder->encodePassword(
            $user,
            'bob'
        ));
        $user->setAvatar('bob.jpg');
        $user->setType('viewer');
        $manager->persist($user);

        $user = new User();
        $user->setUsername('Gill');
        $user->setEmail('gill@gmail.com');
        $user->setPassword($this->passwordEncoder->encodePassword(
            $user,
            'llig'
        ));
        $user->setAvatar('gill.jpg');
        $user->setType('viewer');
        $manager->persist($user);

        $user = new User();
        $user->setUsername('Sam');
        $user->setEmail('sam@gmail.com');
        $user->setPassword($this->passwordEncoder->encodePassword(
            $user,
            'mas'
        ));
        $user->setAvatar('sam.jpg');
        $user->setType('viewer');
        $manager->persist($user);


        $manager->flush();
    }
}
