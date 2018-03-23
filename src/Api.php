<?php

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Setup;

class Api
{
  /**
   * @var EntityManager
   */
  private $entityManager;

  /**
   * @var EntityRepository
   */
  private $productRepository;

  /**
   * Api constructor.
   * @param array $conn
   */
  public function __construct( array $conn )
  {
    $this->setEntityManager( $conn );
    $this->productRepository = $this->entityManager->getRepository( 'Entity\Product' );
  }

  /**
   * @return array
   */
  public function listProducts()
  {
    return $this->productRepository->findAll();
  }

  private function setEntityManager( array $conn )
  {
    $isDevMode = true;

    $config = Setup::createAnnotationMetadataConfiguration(
      [ __DIR__ . "/src/Entity" ],
      $isDevMode,
      null,
      null,
      false
    );

    $this->entityManager = EntityManager::create( $conn, $config );
  }
}