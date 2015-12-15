<?php
namespace SLAM\GSBBundle\Controller;
require_once("include/fct.inc.php");
require_once("include/class.pdogsb.inc.php");
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use PdoGsb;

class HomeController extends Controller
{
   public function indexAction()
   {
     $session = $this->get('request')->getSession();
     if (estConnecte($session)){
     return $this->render('SLAMGSBBundle::accueil.html.twig');
     }
     else{
          return $this->render('SLAMGSBBundle:Home:connexion.html.twig');
         }
   }
   
   public function validerconnexionAction()
   {
     $session = $this->get('request')->getSession();
     $request = $this->get('request');
     $login = $request->request->get('login');
     $mdp = $request->request->get('mdp');
     $pdo = PdoGsb::getPdoGsb();
     $visiteur = $pdo->getInfosVisiteur($login,$mdp);
     if(!is_array($visiteur)){
       return $this->render('SLAMGSBBundle:Home:connexion.html.twig',array(
         'message'=>'Erreur de login ou de mot de passe '));
     }
     else {
        $session->set('id',$visiteur['id']);
        $session->set('nom',$visiteur['nom']);
        $session->set('prenom',$visiteur['prenom']);
        $session->set('immat',$visiteur['immat']);
        return $this->render('SLAMGSBBundle::accueil.html.twig');
     }
   }

   public function deconnexionAction() 
   {
     $session = $this->get('request')->getSession();
     $session->clear();
     return $this->render('SLAMGSBBundle:Home:connexion.html.twig');
   }

   public function détailEquipementAction()
   {
    $session = $this->get('request')->getSession();
    $request = $this->get('request'); 
    $pdo = PdoGsb::getPdoGsb();
    $lesEquipements = $pdo-> getEquipements();
    return $this->render('SLAMGSBBundle:Home:tablette.html.twig', array('lesequipements'=>$lesEquipements));
   }
}    
