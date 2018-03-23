<?php namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User
{
  /**
   * @ORM\Id @ORM\GeneratedValue @ORM\Column(type="integer")
   * @var int
   */
  protected $id;

  /**
   * @ORM\Column(type="string")
   * @var string
   */
  protected $name;

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
   * Set name
   *
   * @param string $name
   *
   * @return User
   */
  public function setName( $name )
  {
    $this->name = $name;

    return $this;
  }

  /**
   * Get name
   *
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
}
