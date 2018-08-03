<?php

namespace App\Controller;

use App\Entity\Transaction;
use App\Entity\Product;
use App\Repository\TransactionRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;



class TransactionController extends Controller
{

    /**
     * @Route("/{id}/add", name="add_transaction")
     */
    public function add(Product $product, TransactionRepository $transactionRepo, ObjectManager $manager)
    {
        $transaction = new transaction();
        $transaction
            ->setPrice($product->getPrice())
            ->setDateTransaction(new \DateTime('now'))
            ->setStatus('pending')
            ->setProduct($product)
            ->setTransactioner($this->getUser());
        $manager->persist($transaction);
        $manager->flush();
        $totalPrice=0;
        $totalQuantity = 0;
        $transactionList = $transactionRepo->findAllWithQuantityByUser($this->getUser());

        foreach ($transactionList as $transaction){
            $totalQuantity += $transaction["quantity"];
            $totalPrice += $transaction[0]->getPrice() * $transaction["quantity"];
        }
        return $this->json([
            'quantity' => $totalQuantity
        ]);
    }
    /**
     * @Route("/cart", name="edit_cart")
     */
    public function index(\App\Repository\TransactionRepository $transactionRepo)

    {
        $totalPrice=0;
        $transactionList = $transactionRepo->findAllWithQuantityByUser($this->getUser());

        foreach ($transactionList as $transaction){
            $totalPrice += $transaction[0]->getPrice() * $transaction["quantity"];
        }
        return $this->render("transaction/edit.html.twig",[
            'transactions' => $transactionList,
            'totalPrice' => $totalPrice

        ]);
    }

    /**
     * @Route("/cart/detail", name="cart_detail")
     */
    public function cart(\App\Repository\TransactionRepository $transactionRepo){
        $totalQuantity = 0;
        $transactionList = $transactionRepo->findAllWithQuantityByUser($this->getUser());

        foreach ($transactionList as $transaction){
            $totalQuantity += $transaction["quantity"];
        }
        return $this->json([
            'quantity' => $totalQuantity
        ]);
    }
    /**
     * @Route("transaction/product/delete/{id}", name="delete_transaction")
     */
    public function deleteTransaction(Transaction $transaction, ObjectManager $manager )
    {
        $manager->remove($transaction);
        $manager->flush();
        return $this->redirectToRoute('edit_cart') ;
    }



}



