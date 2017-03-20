<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        // on liste tous les produits
        $products = $em->getRepository('AppBundle:Product')->findAll();
        // on envoie  à la template listing
        return $this->render('product/listing.html.twig', array(
            'products' => $products,
            'form' => false
        ));
    }
    /**
     *  @Route("/search", name="search_product")
     */
    public function searchAction(Request $request){
          // création formulaire :
        $form = $this->createFormBuilder( )
        ->add('word', TextType::class, array(
            'label' => 'Ma recherche',
            'required' => true
        ))
        ->add('submit', SubmitType::class)
            ->getForm()
        ;
        $form->handleRequest($request);
        $products = array();
        if($form->isSubmitted() && $form->isValid()){
            // si le formulaire a été envoyé
            $data = $form->getData();

            $repository = $this->getDoctrine()
                ->getRepository('AppBundle:Product')
            ;

            $word = $data['word']; // == $_POST['word']
            $products = $repository->search($word);
        }

         return $this->render('product/listing.html.twig', array(
            'form' => $form->createView(),
            'products' => $products,
        ));
    }
}
