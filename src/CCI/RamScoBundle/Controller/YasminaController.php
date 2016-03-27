<?php

namespace CCI\RamScoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use CCI\RamScoBundle\Entity\Personne;
use CCI\RamScoBundle\Entity\Participant;
use CCI\RamScoBundle\Entity\Role;
use CCI\RamScoBundle\Entity\Activite;
use CCI\RamScoBundle\Form\ActiviteType;
use CCI\RamScoBundle\Form\ParticipantType;
use Symfony\Component\HttpFoundation\Request;


class YasminaController extends Controller

{
	 public function viewAction($id)
  {
    // $id vaut 5 si l'on a appelé l'URL /platform/advert/5

    // Ici, on récupèrera depuis la base de données
    // l'annonce correspondant à l'id $id.
    // Puis on passera l'annonce à la vue pour
    // qu'elle puisse l'afficher

    return new Response("Affichage de l'annonce d'id : ".$id);
  }

    /*public function indexAction()

    {

        // On veut avoir l'URL de l'annonce d'id 5.

        $url = $this->get('router')->generate(

            'personne_view', // 1er argument : le nom de la route

            array('id' => 5), true    // 2e argument : les valeurs des paramètres

        );

        // $url vaut « /platform/advert/5 »


        return new Response("L'URL de l'annonce d'id 5 est : ".$url);

    }*/
    
    public function indexAction()

    {
$content = $this->get('templating')
->render('CCIRamScoBundle:Yasmina:index.html.twig', 
array('Nom' => 'Chatratfouine', 'Prenom' => 'Yasmina', 'Adresse' => 'Farfaraway', 'id' => '12'));
return new Response($content);

    }
    
    public function indexPersoAction()

    {
$repository = $this->getDoctrine()->getManager()->getRepository('CCIRamScoBundle:Activite');
$listActivite = $repository->myfindAll();

foreach ($listActivite as $activite) {$activite->getContenu();}
		
$content = $this->get('templating')
->render('CCIRamScoBundle:Yasmina:indexPerso.html.twig', 
array('listActivite' => $listActivite));
return new Response($content);

    }
    
    
    
    public function listeparticipantAction()

    {
$repository = $this->getDoctrine()->getManager()->getRepository('CCIRamScoBundle:Participant');
$listParticipant = $repository->findAll();
//utiliser un QueryBuilder pour trier par date !

foreach ($listParticipant as $participant) {$participant->getId();}
		
$content = $this->get('templating')
->render('CCIRamScoBundle:Yasmina:listeparticipant.html.twig', 
array('listParticipant' => $listParticipant));
return new Response($content);

    }
    
    public function listeadherentAction()

    {
$repository = $this->getDoctrine()->getManager()->getRepository('CCIRamScoBundle:Personne');
$listAdherent = $repository->findAll();
//utiliser un QueryBuilder pour trier par date !

foreach ($listAdherent as $personne) {$personne->getId();}
		
$content = $this->get('templating')
->render('CCIRamScoBundle:Yasmina:listeadherent.html.twig', 
array('listAdherent' => $listAdherent));
return new Response($content);

    }
    

    public function findumondeAction()

    {
$content = $this->get('templating')
->render('CCIRamScoBundle:Yasmina:findumonde.html.twig', 
array('nom' => 'Yasmina'));
return new Response($content);

    }
    
    
    public function addAction(Request $request)
    
    {
//Création de l'entité
$personne = new Personne();
$personne->setNom('Makise');
$personne->setPrenom('Kurisu');
$personne->setAdresse('El Psy Kongroo');
	
//Récupération de l'entity manager (em)
$em = $this->getDoctrine()->getManager();
//Persistance de l'entité
$em->persist($personne);
//Nettoyage de tout ce qui a été persisté avant
$em->flush();
	
//Revoir ce que ça fait... :/
if ($request->isMethod('POST')) {

$request->getSession()->getFlashBag()
      ->add('notice', 'Personne bien enregistrée.');
return $this->redirect($this
	->generateUrl('personne_view', 
	array('id' => $personne->getId())));
	
	}

return $this->render('CCIRamScoBundle:Yasmina:add.html.twig', 
array('personne' => $personne));
}

	//Page ajout d'un Participant
	public function addparticipantAction(Request $request)
	
	{

/*
$repP = $this->getDoctrine()->getManager()->getRepository('CCIRamScoBundle:Personne');
$personne = $repP->findOneby(array('nom' => 'yasmina'));
$participant->setPersonne($personne);
 
$repR = $this->getDoctrine()->getManager()->getRepository('CCIRamScoBundle:Role');
$role = $repR->findOneby(array('typeRole' => 'chauffeur'));
$participant->setRole($role);

$repA = $this->getDoctrine()->getManager()->getRepository('CCIRamScoBundle:Activite');
$activite = $repA->findOneby(array('titreActivite' => 'Equitation'));
$participant->setActivite($activite);

$em = $this->getDoctrine()->getManager();
$em->persist($participant);
$em->flush();*/

$participant = new Participant();
$form = $this->get('form.factory')->create(new ParticipantType,$participant);

if ($form->handleRequest($request)->isValid()) {
  $em = $this->getDoctrine()->getManager();
  $em->persist($participant);
  $em->flush();

  $request->getSession()->getFlashBag()->add('notice', 'Participant bien enregistré.');
  return $this->redirect($this->generateUrl('participant_view', array('id' => $participant->getId())));
}

return $this->render('CCIRamScoBundle:Yasmina:addparticipant.html.twig', 
array('form' => $form->createView(),));
}

	public function addactiviteAction(Request $request)
	{

$activite = new Activite();
$form = $this->get('form.factory')->create(new ActiviteType,$activite);
	
if ($form->handleRequest($request)->isValid()) {
  $em = $this->getDoctrine()->getManager();
  $em->persist($activite);
  $em->flush();

  $request->getSession()->getFlashBag()->add('notice', 'Activite bien enregistrée.');
  return $this->redirect($this->generateUrl('activite_view', array('id' => $activite->getId())));
}
	
return $this->render('CCIRamScoBundle:Yasmina:addactivite.html.twig', 
array('form' => $form->createView(),));
}





//Page adherent avec formulaire pas reliée à la BDD
public function adherentAction()
{
	return $this->render('CCIRamScoBundle:Yasmina:adherent.html.twig');
}


//Page ramassage
public function ramassageAction()
{
	return $this->render('CCIRamScoBundle:Yasmina:ramassage.html.twig');
}

//Page contact
public function contactAction()
{
	return $this->render('CCIRamScoBundle:Yasmina:contact.html.twig');
}

//Page FARYM
public function farymAction()
{
	return $this->render('CCIRamScoBundle:Yasmina:farym.html.twig');
    }
}
	
	


