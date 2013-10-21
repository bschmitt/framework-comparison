<?php
namespace Ni\Events\Domain\Model;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Ni.Events".             *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use Doctrine\ORM\Mapping as ORM;

/**
 * @Flow\Entity
 */
class Event
{

	/**
	 * @var string
	 * @Flow\Validate(type="NotEmpty")
	 * @Flow\Validate(type="StringLength", options={ "minimum"=5, "maximum"=100 })
	 */
	protected $title;

	/**
	 * @var string
	 */
	protected $description;

	/**
	 * @var string
	 */
	protected $date;

	/**
	 * @var string
	 */
	protected $time;

	/**
	 * @var string
	 */
	protected $location;

	/**
	 * @param string $date
	 * @return Event
	 */
	public function setDate($date)
	{
		$this->date = $date;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getDate()
	{
		return $this->date;
	}

	/**
	 * @param string $description
	 * @return Event
	 */
	public function setDescription($description)
	{
		$this->description = $description;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getDescription()
	{
		return $this->description;
	}

	/**
	 * @param string $location
	 * @return Event
	 */
	public function setLocation($location)
	{
		$this->location = $location;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getLocation()
	{
		return $this->location;
	}

	/**
	 * @param string $time
	 * @return Event
	 */
	public function setTime($time)
	{
		$this->time = $time;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getTime()
	{
		return $this->time;
	}

	/**
	 * @param string $title
	 * @return Event
	 */
	public function setTitle($title)
	{
		$this->title = $title;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getTitle()
	{
		return $this->title;
	}

}

?>