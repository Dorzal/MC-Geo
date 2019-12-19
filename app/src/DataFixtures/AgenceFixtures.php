<?php


namespace App\DataFixtures;


use App\Entity\Agence;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AgenceFixtures extends Fixture
{

    /**
     * Load data fixtures with the passed EntityManager
     */
    public function load(ObjectManager $manager)
    {
        $agence = new Agence();
        $agence->setAdresse("38 avenue de l'europe");
        $agence->setNom("maison");
        $agence->setCp("54520");
        $agence->setVille("Laxou");
        $agence->setLatitude(48.6802);
        $agence->setLongitude(6.15305);

        $manager->persist($agence);
        $manager->flush();
    }
}