<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\CustomerType;
use App\Form\UserType;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class CustomerController extends Controller
{
    /**
     * @Route("/customer", name="customer")
     */
    public function registerCustomer(Request $request, ObjectManager $manager,  UserPasswordEncoderInterface $encoder,  User $user = null)
    {
        if($user === null){
            $user = new User();
        }
        $formUser = $this->createForm(CustomerType::class, $user)
            ->add('Submit', SubmitType::class);



        $formUser->handleRequest($request);// declenche la gestion de formulaire
        if($formUser->isSubmitted() && $formUser->isValid()){
            //enregistrement de notre utilisateur
            $user->setRegisterDate(new  \DateTime('now'));
            $user->setRoles('ROLE_CUSTOMER');
            $user->setPassword($encoder->encodePassword($user,$user->getPassword()));
            $manager->persist($user);
            $manager->flush();
            return $this->redirectToRoute('home');


        }
        return $this->render('customer/customer_new.html.twig',['form'=>$formUser->createView()]);
    }
}
