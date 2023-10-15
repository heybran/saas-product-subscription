<?php 
/**
 * An Abstract Class is basically a blueprint that should only ever be extended 
 * by child classes and not used directly. 
 * By extending the blueprint, the developer can ensure that the basic functionality 
 * is present in the child class in order for it to be functional.
 * 
 * Abstract Classes can not be directly instantiated as they rely on child classes 
 * to fully implement the functionality. By using an Abstract Class, 
 * a developer can ensure that any child classes that inherit from the Abstract Class 
 * will follow the same design.
 */

declare(strict_types = 1);

namespace SPS;

require __DIR__. '/vendor/autoload.php';

use \SPS\Product;

class FreePlan extends Product {
  /**
   * @param User $owner The owner of the product
   */
  public function __construct(User $owner) {
    $this->name = 'Free';
    $this->price = 0.00;
    $this->owner = $owner;
    $this->subscriptionType = '';
  }
}