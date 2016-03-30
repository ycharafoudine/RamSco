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
use CCI\RamScoBundle\Form\RegistrationType;
use CCI\RamScoBundle\Form\ProfileEditType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Generator\UrlGenerator;


class YasminaController extends Controller

{
 
  public function ficheactiviteAction($id)
  {
$rep = $this->getDoctrine()->getManager()->getRepository('CCIRamScoBundle:Activite');
$activite = $rep->find($id);
$content = $this->get('templating')->render('CCIRamScoBundle:Yasmina:ficheactivite.html.twig', 
array('activite' => $activite));
return new Response($content);
  } 
  
  public function ficheadherentAction($id)
  {
$rep = $this->getDoctrine()->getManager()->getRepository('CCIRamScoBundle:Personne');
$personne = $rep->find($id);
$content = $this->get('templating')->render('CCIRamScoBundle:Yasmina:ficheadherent.html.twig', 
array('personne' => $personne));
return new Response($content);
  }
  
  public function ficheparticipantAction($id)
  {
$rep = $this->getDoctrine()->getManager()->getRepository('CCIRamScoBundle:Participant');
$participant = $rep->find($id);
$content = $this->get('templating')->render('CCIRamScoBundle:Yasmina:ficheparticipant.html.twig', 
array('participant' => $participant));
return new Response($content);
  }
  
  public function ficheroleAction($id)
  {
$rep = $this->getDoctrine()->getManager()->getRepository('CCIRamScoBundle:Role');
$role = $rep->find($id);
$content = $this->get('templating')->render('CCIRamScoBundle:Yasmina:ficherole.html.twig', 
array('role' => $role));
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
    
    public function editadherentAction(Request $request, $id=null)
	{

$message='';
$em = $this->getDoctrine()->getManager();

if (isset($id)) 
	{$personne = $em->find('CCIRamScoBundle:Personne', $id);
	if (!$personne){$message='Aucun adhérent trouvé';}}
else{$personne = new Personne();}

$form = $this->get('form.factory')->create(new ProfileEditType, $personne);
	
if ($form->handleRequest($request)->isValid()) {
  
  $em->persist($personne);
  $em->flush();
	
	if (isset($id)){$message='Adhérent modifié avec succès !';}
	else{$message='Adhérent ajouté avec succès !';}
  
  return $this->redirect($this->generateUrl('admin'));
}
	
return $this->render('CCIRamScoBundle:Yasmina:editadherent.html.twig', 
array('form' => $form->createView(),'message'=>$message));
}
   
	//Page ajout d'un Participant
	public function editparticipantAction(Request $request)
	
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

/*$participant = new Participant();
$form = $this->get('form.factory')->create(new ParticipantType,$participant);

if ($form->handleRequest($request)->isValid()) {
  $em = $this->getDoctrine()->getManager();
  $em->persist($participant);
  $em->flush();

  $request->getSession()->getFlashBag()->add('notice', 'Participant bien enregistré.');
  return $this->redirect($this->generateUrl('participant_view', array('id' => $participant->getId())));
}

return $this->render('CCIRamScoBundle:Yasmina:addparticipant.html.twig', 
array('form' => $form->createView(),));*/

$message='';
$em = $this->getDoctrine()->getManager();

if (isset($id)) 
	{$participant = $em->find('CCIRamScoBundle:Participant', $id);
	if (!$participant){$message='Aucun participant trouvé';}}
else{$participant = new Participant();}

$form = $this->get('form.factory')->create(new ParticipantType,$participant);
	
if ($form->handleRequest($request)->isValid()) {
  
  $em->persist($participant);
  $em->flush();
	
	if (isset($id)){$message='Participant modifié avec succès !';}
	else{$message='Participant ajouté avec succès !';}
  
	return $this->redirect($this->generateUrl('admin'));
}
	
return $this->render('CCIRamScoBundle:Yasmina:editparticipant.html.twig', 
array('form' => $form->createView(),'message'=>$message));


}

	public function editactiviteAction(Request $request, $id=null)
	{

$message='';
$em = $this->getDoctrine()->getManager();

if (isset($id)) 
	{$activite = $em->find('CCIRamScoBundle:Activite', $id);
	if (!$activite){$message='Aucune activité trouvée';}}
else{$activite = new Activite();}

$form = $this->get('form.factory')->create(new ActiviteType,$activite);
	
if ($form->handleRequest($request)->isValid()) {
  
  $em->persist($activite);
  $em->flush();
	
	if (isset($id)){$message='Activité modifiée avec succès !';}
	else{$message='Activité ajoutée avec succès !';}
  
 return $this->redirect($this->generateUrl('admin'));
}
	
return $this->render('CCIRamScoBundle:Yasmina:editactivite.html.twig', 
array('form' => $form->createView(),'message'=>$message));
}


	public function editroleAction(Request $request, $id=null)
	{

$message='';
$em = $this->getDoctrine()->getManager();

if (isset($id)) 
	{$role = $em->find('CCIRamScoBundle:Role', $id);
	if (!$role){$message='Aucun rôle trouvé';}}
else{$role = new Role();}

$form = $this->get('form.factory')->create(new RoleType,$role);
	
if ($form->handleRequest($request)->isValid()) {
  
  $em->persist($role);
  $em->flush();
	
	if (isset($id)){$message='Rôle modifié avec succès !';}
	else{$message='Rôle ajouté avec succès !';}
  
  return $this->redirect($this->generateUrl('admin'));
}
	
return $this->render('CCIRamScoBundle:Yasmina:editrole.html.twig', 
array('form' => $form->createView(),'message'=>$message));
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

//Page association
public function associationAction()
{
	return $this->render('CCIRamScoBundle:Yasmina:association.html.twig');
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
	
	


