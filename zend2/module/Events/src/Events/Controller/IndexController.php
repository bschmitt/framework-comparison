<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Events\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Events\Model\Event;
use Events\Form\EventForm;

class IndexController extends AbstractActionController
{

	protected $eventTable;

	public function getEventTable()
	{
		if (!$this->eventTable) {
			$sm               = $this->getServiceLocator();
			$this->eventTable = $sm->get('Events\Model\EventTable');
		}
		return $this->eventTable;
	}

	public function indexAction()
	{
		return new ViewModel(
			array(
				 'events' => $this->getEventTable()->fetchAll(),
			)
		);
	}

	public function addAction()
	{
		$form = new EventForm();
		$form->get('submit')->setValue('Add');

		$request = $this->getRequest();
		if ($request->isPost()) {
			$event = new Event();
			$form->setInputFilter($event->getInputFilter());
			$form->setData($request->getPost());

			if ($form->isValid()) {
				$event->exchangeArray($form->getData());
				$this->getEventTable()->saveEvent($event);

				return $this->redirect()->toRoute('home');
			}
		}
		return array('form' => $form);
	}
}
