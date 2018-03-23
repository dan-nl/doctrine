<?php declare( strict_types=1 );

use Entity\Product;
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
  /**
   * @var Api
   */
  private $Api;

  public function setup()
  {
    $conn = require( __DIR__ . '/../config/conn.' . $_ENV[ 'APP_ENV' ] . '.php' );
    $this->Api = new Api( $conn );
  }

  public function testProduct()
  {
    $expected = [ 'ORM', 'DBAL' ];
    $products = $this->Api->listProducts();
    $count = 0;

    /**
     * @var Product $product
     */
    foreach ( $products as $product ) {
      $this->assertEquals( $product->getName(), $expected[ $count ] );
      $count++;
    }
  }
}
