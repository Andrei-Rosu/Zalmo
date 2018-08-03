<?php

namespace App\Controller;

use App\Entity\Product;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Algolia\SearchBundle\IndexManagerInterface;

class IndexManagerController extends Controller
{
    /**
     * @Route("/index/manager", name="index_manager")
     */
    protected $indexManager;

    public function __construct(IndexManagerInterface $indexingManager)
    {
        $this->indexManager = $indexingManager;
        $em = $this->getDoctrine()->getManagerForClass(Product::class);

        $products = $this->indexManager->search('query', Product::class, $em);

        return $this->render('index_manager/index.html.twig', [
            'controller_name' => 'IndexManagerController',
        ]);
    }
}
