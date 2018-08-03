<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class ProductFixtures extends Fixture implements DependentFixtureInterface
{

    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 150; $i++) {
            $product = new Product();
            $product->setTitle('Produit n°' . $i);
            $product->setDescription('Description détaillée de mon produit' . $i);
            $product->setImage("uploads/500x325.png");
            $product->setPrice(rand(10,150));
            $product->setCategory('Categorie du produit' . $i);
            $product->setStock(rand(5,25));
            $product->setOwner($this->getReference('user'. rand(0,59)));
            for($j=0; $j<rand(0,4);$j++){
               $tag = $this->getReference('tag'.rand(0,39));
               $product->addTag($tag);
            }
            $manager->persist($product);


        }
        $manager->flush();
    }
    public function getDependencies(): array
    {
        return [
            UserFixtures::class,
            TagFixtures::class
        ];
    }
}
