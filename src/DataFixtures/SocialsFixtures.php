<?php

namespace App\DataFixtures;

use App\Entity\Social;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class SocialsFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $social = new Social();
        $social
            ->setIcon('fab fa-github')
            ->setLink('https://github.com')
            ->setTitle('Github');
        $manager->persist($social);

        $social1 = new Social();
        $social1
            ->setIcon('fas fa-phone')
            ->setLink('tel:+000')
            ->setTitle('+000');
        $manager->persist($social1);

        $social2 = new Social();
        $social2
            ->setTitle('Gmail')
            ->setLink('mailto:gmail@gmail.com')
            ->setIcon('fas fa-envelope');
        $manager->persist($social2);

        $manager->flush();
    }
}
