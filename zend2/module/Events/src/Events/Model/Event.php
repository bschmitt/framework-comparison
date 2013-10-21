<?php

namespace Events\Model;

// Add these import statements
use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;

/**
 * @author    Björn Schmitt <bjoern.schmitt@native-instruments.de>
 * @copyright Native Instruments GmbH
 *            Date: 18.10.13 17:30
 */
class Event implements InputFilterAwareInterface
{

	public $id;

	public $title;

	public $description;

	public $date;

	public $time;

	public $location;

	protected $inputFilter;

	public function exchangeArray($data)
	{

		$this->id          = (!empty($data['id'])) ? $data['id'] : NULL;
		$this->title       = (!empty($data['title'])) ? $data['title'] : NULL;
		$this->description = (!empty($data['description'])) ? $data['description'] : NULL;
		$this->date        = (!empty($data['date'])) ? $data['date'] : NULL;
		$this->time        = (!empty($data['time'])) ? $data['id'] : NULL;
		$this->location    = (!empty($data['time'])) ? $data['location'] : NULL;

	}

	// Add content to these methods:
	public function setInputFilter(InputFilterInterface $inputFilter)
	{
		throw new \Exception("Not used");
	}

	public function getInputFilter()
	{
		if (!$this->inputFilter) {
			$inputFilter = new InputFilter();

			$inputFilter->add(
				array(
					 'name'     => 'id',
					 'required' => true,
					 'filters'  => array(
						 array('name' => 'Int'),
					 ),
				)
			);

			$inputFilter->add(
				array(
					 'name'       => 'location',
					 'required'   => true,
					 'filters'    => array(
						 array('name' => 'StripTags'),
						 array('name' => 'StringTrim'),
					 ),
					 'validators' => array(
						 array(
							 'name'    => 'StringLength',
							 'options' => array(
								 'encoding' => 'UTF-8',
								 'min'      => 1,
								 'max'      => 100,
							 ),
						 ),
					 ),
				)
			);

			$inputFilter->add(
				array(
					 'name'       => 'title',
					 'required'   => true,
					 'filters'    => array(
						 array('name' => 'StripTags'),
						 array('name' => 'StringTrim'),
					 ),
					 'validators' => array(
						 array(
							 'name'    => 'StringLength',
							 'options' => array(
								 'encoding' => 'UTF-8',
								 'min'      => 1,
								 'max'      => 100,
							 ),
						 ),
					 ),
				)
			);

			$inputFilter->add(
				array(
					 'name'    => 'description',
					 'filters' => array(
						 array('name' => 'StripTags'),
						 array('name' => 'StringTrim'),
					 ),
				)
			);

			$inputFilter->add(
				array(
					 'name'    => 'date',
					 'filters' => array(
						 array('name' => 'StripTags'),
						 array('name' => 'StringTrim'),
					 ),
				)
			);

			$inputFilter->add(
				array(
					 'name'    => 'time',
					 'filters' => array(
						 array('name' => 'StripTags'),
						 array('name' => 'StringTrim'),
					 ),
				)
			);

			$this->inputFilter = $inputFilter;
		}

		return $this->inputFilter;
	}

}
