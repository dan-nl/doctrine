<?php namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity @ORM\Table(name="products")
 **/
class Product
{
  /**
   * @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue
   * @var int
   */
  private $id;

  /**
   * @ORM\Column(type="string")
   * @var string
   */
  private $name;

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
   * @return Product
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
