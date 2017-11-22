<?php

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Book;
use AppBundle\Entity\User;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class CrudController extends Controller
{
	/**
     * @Route("/create", name="create")
     */
	    public function createAction(Request $request)
    {
        dump($request);
    	$livre = new Book();
    	$form = $this->createFormBuilder($livre)
    	->add('titre', TextType::class)
    	->add('save', SubmitType::class, array('label' => 'Creer Livre'))
  		->getForm();

  		  $form->handleRequest($request);

    	if ($form->isSubmitted() && $form->isValid()) {
    	    $livre = $form->getData();
	        $em = $this->getDoctrine()->getManager();
	        $em->persist($livre);
	        $em->flush();
	        return $this->redirectToRoute('read');
    	}

        return $this->render('AppBundle:CRUD:createView.html.twig', [
            'form' => $form->createView(),
        ]);
    }

	/**
     * @Route("/update/{id}", name="update")
     */
		public function updateAction(Request $request, $id)
	{
		$em = $this->getDoctrine()->getManager();
		$livre = $em->getRepository(book::class)->find($id);
    	$form = $this->createFormBuilder($livre)
    	->add('titre', TextType::class)
    	->add('save', SubmitType::class, array('label' => 'Update le livre'))
  		->getForm();
  		$form->handleRequest($request);

    	if ($form->isSubmitted() && $form->isValid()) {
	        $livre = $form->getData();
	         $em = $this->getDoctrine()->getManager();
	         $em->persist($livre);
	         $em->flush();
	        return $this->redirectToRoute('read');
    	}
        // replace this example code with whatever you need
        return $this->render('AppBundle:CRUD:updateView.html.twig', [
            'form' => $form->createView(),
            'livre' => $livre
        ]);
	}

	/**
     * @Route("/delete/{id}", name="delete")
     */
	public function deleteAction($id)
	{
	    $em = $this->getDoctrine()->getManager();
        $livre = $em->getRepository(book::class)->find($id);
        $livre->setEtat(0);
        $em->persist($livre);
        $em->flush();
		return $this->render('AppBundle:CRUD:deleteView.html.twig', [
		    'livre' => $livre
		]);
	}

	/**
     * @Route("/read", name="read")
     */
	public function readAction()
	{
	    $em = $this->getDoctrine()->getManager();
	    $livres = $em->getRepository(Book::class)->findAll();
	return $this->render('AppBundle:CRUD:readView.html.twig', [
	    'livres' => $livres
	]);
	}

	public function getLivreById($id)
	{
		// En guise de test on passe à cette fonction l'id d'un bouquin qu'on a déjà et si la fonction renvoi rien, c'est qu'elle est bugguée
	    $em = $this->getDoctrine()->getManager();
      $livre = $em->getRepository(book::class)->find($id);
			return $livre;
	}
	public function getLivreByTitre($titre)
	{
		// En guise de test on passe à cette fonction le titre d'un bouquin qu'on a déjà et si la fonction renvoi rien, c'est qu'elle est bugguée
	    $em = $this->getDoctrine()->getManager();
      $livre = $em->getRepository(book::class)->findByTitre($titre);
			return $livre;
	}
}
