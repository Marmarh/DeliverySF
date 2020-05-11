<?php

namespace App\DataFixtures;
use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 40; $i++) {
            $product = new Product();
            $product->setName('product '.$i);
            $product->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit '.$i);
            $product->setCode(mt_rand(10, 100));
            $product->setPricesell(mt_rand(10, 100));
            $product->setPricebuying(mt_rand(10, 100));
            $product->setQuantity(mt_rand(10, 100));

            $manager->persist($product);
        }

        $manager->flush();
    }
    
}
