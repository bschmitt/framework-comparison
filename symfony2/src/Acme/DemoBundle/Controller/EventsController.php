<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Acme\DemoBundle\Form\EventType;

// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class EventsController extends Controller
{

	/**
	 * @Route("/", name="_demo")
	 * @Template()
	 */
	public function indexAction()
	{
		$repository = $this->getDoctrine()
		    ->getRepository('AcmeDemoBundle:Event');
		$events = $repository->findAll();
		return array('events' => $events);
	}

	/**
	 * @Route("/hello/{name}", name="_demo_hello")
	 * @Template()
	 */
	public function helloAction($name)
	{
		return array('name' => $name);
	}

	/**
	 * @Route("/add", name="_events_add")
	 * @Template()
	 */
	public function addAction()
	{
		$form    = $this->get('form.factory')->create(new EventType());
		$em      = $this->getDoctrine()->getManager();
		$request = $this->get('request');
		if ($request->isMethod('POST')) {
			$form->submit($request);
			if ($form->isValid()) {
				$event = $form->getData();
				$em->persist($event);
				$em->flush();
				$this->get('session')->getFlashBag()->set('notice', 'Saved!');
				return new RedirectResponse($this->generateUrl('_events'));
			}
		}
		return array('form' => $form->createView());
	}
}
