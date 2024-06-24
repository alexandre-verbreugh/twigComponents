<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Blog;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');
        for ($i = 0; $i < 10; $i++) {
            $blog = new Blog();
            $blog->setTitle($faker->sentence());
            $blog->setContent($faker->paragraph());

            $manager->persist($blog);
            
        }
        $manager->flush();
    }
}
