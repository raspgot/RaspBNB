<?php

namespace App\DataFixtures;

use App\Entity\Ad;
use Doctrine\Bundle\FixturesBundle\Fixture;
Use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i=1; $i<=30 ; $i+1) {
            $ad = new Ad();

            $ad ->setTitle("Titre de l'annonce $i")
                ->setSlug("titre-annonce-$i")
                ->setCoverImage("http://placeholder.it/1000x300")
                ->setIntroduction("Bonjour à tous, ceci est une intro")
                ->setContent("<p>Je suis un contenu riche !</p>")
                ->setPrice(mt_rand(40, 200))
                ->setRooms(mt_rand(1, 5));

            $manager->persist($ad);
        }

        $manager->flush();
    }
}
