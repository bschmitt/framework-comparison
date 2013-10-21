<?php
namespace Events\Form;

use Zend\Form\Form;

class EventForm extends Form
{

	public function __construct($name = NULL)
	{
		// we want to ignore the name passed
		parent::__construct('event');

		$this->add(
			array(
				 'name' => 'id',
				 'type' => 'Hidden',
			)
		);
		$this->add(
			array(
				 'name'    => 'title',
				 'type'    => 'Text',
				 'options' => array(
					 'label' => 'Title',
				 ),
			)
		);
		$this->add(
			array(
				 'name'    => 'description',
				 'type'    => 'Text',
				 'options' => array(
					 'label' => 'Description',
				 ),
			)
		);
		$this->add(
			array(
				 'name'    => 'date',
				 'type'    => 'Date',
				 'options' => array(
					 'label' => 'Date',
				 ),
			)
		);

		$this->add(
			array(
				 'name'    => 'time',
				 'type'    => 'Time',
				 'options' => array(
					 'label' => 'Time',
				 ),
			)
		);
		$this->add(
			array(
				 'name'    => 'location',
				 'type'    => 'Text',
				 'options' => array(
					 'label' => 'Location',
				 ),
			)
		);
		$this->add(
			array(
				 'name'       => 'submit',
				 'type'       => 'Submit',
				 'attributes' => array(
					 'value' => 'Go',
					 'id'    => 'submitbutton',
				 ),
			)
		);
	}
}