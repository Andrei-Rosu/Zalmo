<?php

namespace App\Controller;

use App\Entity\Transaction;
use App\Entity\Product;
use App\Form\TransactionType;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/transaction")
 */
class TransactionController extends Controller
{
    /**
     * @Route("/{id}/add", name="add_transaction")
     */
    public function add(Product $product, ObjectManager $manager)
    {
        $transaction = new transaction();
        $transaction->setDateStart(new \DateTime('now'))
            ->setStatus('pending')
            ->setProduct($product)
            ->settransactioner($this->getUser());
        $manager->persist($transaction);
        $manager->flush();
        return $this->redirectToRoute('edit_transaction', ['id' => $transaction->getId()]);
    }

    /**
     * @Route("/edit/{id}", name="edit_transaction")
     */
    public function edit(transaction $transaction, Request $request, ObjectManager $manager)
    {
        $transactionForm = $this->createForm(TransactionType::class, $transaction)
            ->add('Validate', SubmitType::class);

        $transactionForm->handleRequest($request);

        if($transactionForm->isSubmitted() && $transactionForm->isValid()){
            $manager->persist($transaction);
            $manager->flush();
            return $this->redirectToRoute('home');
        }

        return $this->render('transaction/edit.html.twig',[
            'form' => $transactionForm->createView()
        ]);
    }
}
