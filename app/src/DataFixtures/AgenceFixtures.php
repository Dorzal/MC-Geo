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



        $agence1 = new Agence();
        $agence1->setAdresse("25 Rue de la Cité");
        $agence1->setNom("paris sud");
        $agence1->setCp("4 ème");
        $agence1->setVille("Paris");
        $agence1->setLatitude(48.8547);
        $agence1->setLongitude(2.34781);

        $manager->persist($agence1);



        $agence2 = new Agence();
        $agence2->setAdresse("111 Rue Achille Zavatta");
        $agence2->setNom("Montpellier centre");
        $agence2->setCp("34000");
        $agence2->setVille("Montpellier");
        $agence2->setLatitude(43.58876223657463);
        $agence2->setLongitude(3.867356508789044);

        $manager->persist($agence2);


        $agence2 = new Agence();
        $agence2->setAdresse("36 Avenue Marceau");
        $agence2->setNom("Paris centre");
        $agence2->setCp("75008");
        $agence2->setVille("Paris");
        $agence2->setLatitude(48.8677231);
        $agence2->setLongitude(2.3140959);

        $manager->persist($agence2);



        $manager->flush();
    }
}