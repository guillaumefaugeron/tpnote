<?php

namespace App\DataFixtures;

use App\Entity\CardTemplate;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker= Factory::create();


        for ($i = 0; $i < 10; $i++){
            $card= new CardTemplate();

            $card->SetName($faker->realText($maxNbChars = 10, $indexSize = 1))
                ->setDescription($faker->realText($maxNbChars = 155, $indexSize = 2))
                ->setActive($faker->boolean(80))
                ->setPremium($faker->boolean(80))
                ->setPreview("https://source.unsplash.com/random");


            $manager->persist($card);
        }
        $manager->flush();
    }
}
