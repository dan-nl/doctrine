<?php namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="BugRepository")
 * @ORM\Table(name="bugs")
 */
class Bug
{
  /**
   * @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue
   * @var int
   */
  protected $id;

  /**
   * @ORM\Column(type="string")
   * @var string
   */
  protected $description;

  /**
   * @ORM\Column(type="datetime")
   * @var \DateTime
   */
  protected $created;

  /**
   * @ORM\Column(type="string")
   * @var string
   */
  protected $status;

  /**
   * Get id
   *
   * @return integer
   */
  public function getId()
  {
    return $this->id;
  }

  /**
   * Set description
   *
   * @param string $description
   *
   * @return Bug
   */
  public function setDescription( $description )
  {
    $this->description = $description;

    return $this;
  }

  /**
   * Get description
   *
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }

  /**
   * Set created
   *
   * @param \DateTime $created
   *
   * @return Bug
   */
  public function setCreated( $created )
  {
    $this->created = $created;

    return $this;
  }

  /**
   * Get created
   *
   * @return \DateTime
   */
  public function getCreated()
  {
    return $this->created;
  }

  /**
   * Set status
   *
   * @param string $status
   *
   * @return Bug
   */
  public function setStatus( $status )
  {
    $this->status = $status;

    return $this;
  }

  /**
   * Get status
   *
   * @return string
   */
  public function getStatus()
  {
    return $this->status;
  }
}
