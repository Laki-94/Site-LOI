<?php

namespace App\Controller;

use DateTime;
use Stripe\Stripe;
use App\Entity\Facture;
use App\Entity\Commandes;
use Stripe\PaymentIntent;
use Stripe\Checkout\Session;
use App\Service\CartService;
use App\Repository\FactureRepository;
use App\Repository\CommandesRepository;
use App\Repository\ProduitsRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/profile')]
class CommandesController extends AbstractController
{
    #[Route('/commande', name: 'app_commande')]
    public function index(RequestStack $session, ProduitsRepository $roduitnRepository, CartService $cart,
        FactureRepository $factureRepository,CommandesRepository $commandesRepository): Response
    {
        // stocké le user
        // this->getUser()
        // stocké la produit
        // via le param converter
        // et la quantité via la session
 
         // stocké le user
        // this->getUser()

        // recuperation du panier
        //  $panier=$session->getSession()->get("panier");
        // // boucler sur chaque ligne du panier
        // foreach ($panier as $key => $value  ){ 
            
        //     $commande = new Commandes();
        //     $commande->getProduit($this->getUser());
        //     $commande->setproduit($produitRepository->find($key));
        //     $commande->setQuantite($value);
        //     $commandesRepository->save($commande, true);
        // }


        //1. Payer sur STRIPE
        // communiquer avec stripe

        // on a le montant du panier
        $montant=$cart->getTotalAll()*100;


        

        // clé secrete pour que stripe me reconnaisse
        $stripeSecretKey="sk_test_51MrHFVArHNGyKcwpU0jRHxQaQ91J8O4FVyAP87E3da96GYYIgsFWHANAMWtTMpVGhwlmb4cAZHdTl0Dyw0mfJfom00kWlFD4hi";
        Stripe::setApiKey($stripeSecretKey);
  
        // on définit le protocol de connexion http ou https
        // avec les variable global PHP de sorte de pouvoir gérer
        // tout les environnements possible

        if (isset($_SERVER['HTTPS'])){
            $protocol="https://";
        } 
        $protocol="http://";
        // on définit le nom du serveur de connexion 
        // avec les variable global PHP de sorte de pouvoir gérer
        // tout les environnements possible
        $serveur=$_SERVER['SERVER_NAME'];
        $YOUR_DOMAIN=$protocol.$serveur;

        // on lance la communication avec stripe



        $checkout_session = \Stripe\Checkout\Session::create([
            'line_items' => [[
              # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
              'price_data' => [
                'currency' => 'eur',
                'unit_amount' => $montant,
                'product_data' => [
                  'name' => 'Paiement de votre panier'
                ],
              ],
              'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => $YOUR_DOMAIN . '/profile/commande/success',
            'cancel_url' => $YOUR_DOMAIN . '/profile/commande/cancel',

        ]);
 
          
        //2. Savegarde en B.D.

        //3. Supprimer la session
  
        
        return $this->render('commandes/index.html.twig', [ 
            'id_session'=>$checkout_session->id,
        ]);
    }

    #[Route('/commande/success', name: 'app_commandes_succes')]
    public function sucess(
        FactureRepository $factureRepository,
        RequestStack $session,
        ProduitsRepository $produitsRepository,
        CommandesRepository $commandesRepository,
        CartService $cartService
    ): Response {



        // 1. On va stocké une ligne dans la table facture
        // on créé un objet facture issue de l'entité facture
        $facture = new Facture();
        // on va lui affecté un user en lui mettant l'user en cours
        $facture->setUsers($this->getUser());
        // on va lui affecté la propriété correspondant à la date en cours
        // avec un datatime
        $facture->setDatecrea(new DateTime());



        // on utilise le repo de la facture pour enregistrer
        // les repository des entity de servent qu'a lire (méthode find)
        // il y a une personnalisation du repo qui appelle l'entity manager
        // c'est la classe d'écriture de symfony
        $factureRepository->save($facture, true);




        // 2. on va stocké le panier dans la table commande
        /*    $panier=$session->getSession()->get("panier");
        // boucler sur chaque ligne du panier
        foreach ($panier as $key => $value  ){ 
            
            $commande = new Commande();
            $commande->setUsers($this->getUser());
            $commande->setproduits($produitRepository->find($key));
            $commande->setQuantite($value);
            $commandeRepository->save($commande, true);
        }*/
        $panier = $session->getSession()->get("panier");

        foreach ($panier as $key => $value) {

            // création d'un objet commande
            $commandes = new Commandes();
            // affectation de la propriété quantité issue du tableau panier
            $commandes->setQuantite($value);
            // affectation de la propriété produit
            // grace au repo du produit
            $commandes->setProduit($produitsRepository->find($key));
            // affectation de la propriété facture issue du 
            // de la facture créé au dessus
            $commandes->setFactures($facture);
            $commandesRepository->save($commandes, true);
        }



        // on vide le panier
        $cartService->clear();

        return $this->render(
            "commandes/success.html.twig"
        );
    }

    #[Route('/commande/cancel', name: 'app_commande_cancel')]
    public function cancel(){
        dd('le paiement est KO ! ');
    }    
}