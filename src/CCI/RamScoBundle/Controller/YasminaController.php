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
use CCI\RamScoBundle\Form\RoleType;
use Symfony\Component\HttpFoundation\Request;


class YasminaController extends Controller

{
	 public function viewAction($id)
  {
    return new Response("Affichage de l'annonce d'id : ".$id);
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

public function addroleAction(Request $request)
	{

$role = new Role();
$form = $this->get('form.factory')->create(new RoleType,$role);
	
if ($form->handleRequest($request)->isValid()) {
  $em = $this->getDoctrine()->getManager();
  $em->persist($role);
  $em->flush();

  $request->getSession()->getFlashBag()->add('notice', 'Rôle bien enregistré.');
  return $this->redirect($this->generateUrl('role_view', array('id' => $role->getId())));
}
	
return $this->render('CCIRamScoBundle:Yasmina:addrole.html.twig', 
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

//Zone administrateur
public function adminAction()
{
$repAc = $this->getDoctrine()->getManager()->getRepository('CCIRamScoBundle:Activite');
$listActivite = $repAc->myfindAll();
$repAd = $this->getDoctrine()->getManager()->getRepository('CCIRamScoBundle:Personne');
$listAdherent = $repAd->findAll();
$repP = $this->getDoctrine()->getManager()->getRepository('CCIRamScoBundle:Participant');
$listParticipant = $repP->findAll();
$repR = $this->getDoctrine()->getManager()->getRepository('CCIRamScoBundle:Role');
$listRole = $repR->findAll();

		
$content = $this->get('templating')->render('CCIRamScoBundle:Yasmina:admin.html.twig', 
array('listActivite' => $listActivite, 'listAdherent' => $listAdherent, 
'listParticipant' => $listParticipant, 'listRole' => $listRole));
return new Response($content);
	//return $this->render('CCIRamScoBundle:Yasmina:admin.html.twig');
    }
}
	
	


