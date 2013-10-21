<?php

namespace Acme\DemoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EventType extends AbstractType
{

	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder->add('title', 'text');
		$builder->add('description', 'textarea');
		$builder->add('date', 'date');
		$builder->add('time', 'time');
		$builder->add('location', 'text');
	}

	public function setDefaultOptions(OptionsResolverInterface $resolver)
	{
		$resolver->setDefaults(
			array(
				 'data_class' => 'Acme\DemoBundle\Entity\Event'
			)
		);
	}

	public function getName()
	{
		return 'event';
	}
}
