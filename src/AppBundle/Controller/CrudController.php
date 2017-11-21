<?php

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class CrudController extends Controller
{
	/**
     * @Route("/create", name="create")
     */
	    public function createAction(Request $request)
    {
    	$livre = new Livre();
    	$form = $this->createFormBuilder($livre)
    	->add('titre', TextType::class)
  		->getForm();
        // replace this example code with whatever you need
        return $this->render('AppBundle\Resources\views\CRUD\createView.html.twig', [
            'form' => $form->createView(),
        ]);
    }

		public function updateAction($id)
	{
		// $form = $this->createFormBuilder($livre)
		// ->add('titre', TextType::class)
		// ->getForm();
			// replace this example code with whatever you need
			return $this->render('AppBundle\Resources\views\CRUD\updateView.html.twig', [
					'form' => $form->updateView(),
			]);
	}
	public function deleteAction($id)
{
	// $form = $this->createFormBuilder($livre)
	// ->add('titre', TextType::class)
	// ->getForm();
		// replace this example code with whatever you need
		return $this->render('AppBundle\Resources\views\CRUD\deleteView.html.twig', [
				'form' => $form->deleteView(),
		]);
}
public function readAction($id)
{
// $form = $this->createFormBuilder($livre)
// ->add('titre', TextType::class)
// ->getForm();
	// replace this example code with whatever you need
	return $this->render('AppBundle\Resources\views\CRUD\readView.html.twig', [
			'form' => $form->readView(),
	]);
}
}
