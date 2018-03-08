<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Product;
use App\Entity\Formulaire;
use Symfony\Component\HttpFoundation\Session\Session;


class ProductController extends Controller
{
    /**
     * @Route("/product", name="product")
     */
    public function index()
    {
        // you can fetch the EntityManager via $this->getDoctrine()
        // or you can add an argument to your action: index(EntityManagerInterface $em)
        $em = $this->getDoctrine()->getManager();

        $product = new Product();
        $product->setName('Space Invader');
        $product->setLien('www.ghitubdespaceinvaders.com');
        $product->setDescription("l'invasion des aliens");
        $product->setPhoto("photo d'alien");

        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $em->persist($product);

        // actually executes the queries (i.e. the INSERT query)
        $em->flush();

        return new Response("C'est bien recu dans la BDD avec l'id ".$product->getId());
    }



    /**
     * @Route("/product/{id}", name="product_show")
     */
    public function showAction($id)
    {
    $product = $this->getDoctrine()
        ->getRepository(Product::class)
        ->find($id);

    if (!$product) {
        throw $this->createNotFoundException(
            'No product found for id '.$id
        );
    }

    return new Response('voila ce que tu veux: '.$product->getName());

    // or render a template
    // in the template, print things with {{ product.name }}
    // return $this->render('product/show.html.twig', ['product' => $product]);
    }

    /**
    * @Route("/product/edit/{id}")
    */
    public function updateAction($id)
    {
    $em = $this->getDoctrine()->getManager();
    $product = $em->getRepository(Product::class)->find($id);

    if (!$product) {
        throw $this->createNotFoundException(
            'No product found for id '.$id
        );
    }

    $product->setName('New name!');
    $product->setLien('New lien');
    $product->setDescription("New description");
    $product->setPhoto("New photo");
    
    $em->flush();

    return $this->redirectToRoute('product_show', [
        'id' => $product->getId()
    ]);

    }

    /**
     * @Route("/", name="home")
     */
    public function home(Session $session)
    {
      
     $state = $session->getFlashBag()->get('error');



        $session->getFlashBag()->clear();
      return $this->render('index.html.twig', [
          'state' => $state
      ]);
    }

    /**
     * @Route("/ajout", name="ajout")
     */
    public function ajout()
    {

      return $this->render('AjouterProjet.html.twig');
    }


    /**
     * @Route("/contact", name="contact")
     */
    public function contact(Request $request)
    {


    $error = [];

    $nom =  $request->request->has('nom') ?  $request->request->get('nom') : null;
    $prenom =  $request->request->has('prenom') ?  $request->request->get('prenom') : null;
    $email =  $request->request->has('email') ?  $request->request->get('email') : null;
    $text =  $request->request->has('text')  ?  $request->request->get('text') : null;

    $error['nom'] = empty($nom) ? true : false;
    $error['prenom'] =empty($prenom) ? true : false;
    $error['email'] =empty($email) ? true : false;
    $error['text'] =empty($text) ? true : false;



        if (in_array(true, $error)) {


            $session = new Session();

            $session->getFlashBag()->add('error', 'true');

            return $this->redirectToRoute('home');
        }else{

            $session = new Session();

            $session->getFlashBag()->add('error', 'false');

            $em = $this->getDoctrine()->getManager();

        
        $formulaire = new Formulaire();
        $formulaire->setNom($nom);
        $formulaire->setPrenom($prenom);
        $formulaire->setEmail($email);
        $formulaire->setText($text);

        
        $em->persist($formulaire);

        // actually executes the queries (i.e. the INSERT query)
        $em->flush();

        return $this->render('formulairevalid.html.twig');
            
    }
            
            return $this->redirectToRoute('home');

        }
    }
    

