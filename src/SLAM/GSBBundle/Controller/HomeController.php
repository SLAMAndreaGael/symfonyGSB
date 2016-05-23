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
        $session->set('libelleRole',$visiteur['libelleRole']);
        return $this->render('SLAMGSBBundle::accueil.html.twig');
     }
   }

   public function deconnexionAction() 
   {
     $session = $this->get('request')->getSession();
     $session->clear();
     return $this->render('SLAMGSBBundle:Home:connexion.html.twig');
   }

   public function vehiculeutiliséAction()
   {
    $session = $this->get('request')->getSession();
    $request = $this->get('request');
    $idVisiteur = $session->get('id');
    $libelleRole = $session->get('libelleRole'); 
    $pdo = PdoGsb::getPdoGsb();
    if( ($libelleRole) == "DAF" )
    {
      $lesVehicules = $pdo->getVehicules();
      $lesId = $pdo->getIdVisiteurs();
    return $this->render('SLAMGSBBundle:Home:vehiculeDAF.html.twig', array('lesvehicules'=>$lesVehicules, 'lesId'=>$lesId ));
    }else{
      if( ($libelleRole) == "Admin" )
      {
       $lesVehicules = $pdo->getVehicules();
       return $this->render('SLAMGSBBundle:Home:vehiculeAdmin.html.twig', array('lesvehicules'=>$lesVehicules));
      }else{
      $lesVehicules = $pdo->getVehiculesUtil($idVisiteur);
      return $this->render('SLAMGSBBundle:Home:vehiculeUtil.html.twig', array('lesvehicules'=>$lesVehicules));
        }
    }
   }

   public function affectervéhiculeAction()
   { 
    $session = $this->get('request')->getSession();
    $request = $this->get('request');
    $libelleRole = $session->get('libelleRole');
    $pdo = PdoGsb::getPdoGsb();
    if(($libelleRole) != "Admin")
    {
      return $this->render('SLAMGSBBundle:Home:affecter.html.twig', array('message'=>"Vous n'avez pas accès à cette section."));
    }else{
      $lesId = $pdo->getIdVisiteurs();
      $lesImmat = $pdo->getImmat();
      return $this->render('SLAMGSBBundle:Home:affecter.html.twig', array('lesId'=>$lesId, 'lesImmat'=>$lesImmat));
   }
   }
}    
