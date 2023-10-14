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

require_once __DIR__ . '/user.php';

use \SPS\User\User as User;

abstract class Product {
  /**
   * Product name
   */
  protected string $name;

  /**
   * User who owns this product
   * @var User $owner An instance of User class representing the owner of this product.
   */
  protected User $owner;

  /**
   * Product price 
   */
  protected float $price;

  /**
   * Subscription type, either Year or Month or '' for free plan
   */
  protected string $subscriptionType;

  /**
   * Get name
   */
  public function getName(): string {
    return $this->name;
  }

  /**
   * Get price
   */
  public function getPrice(): float {
    return $this->price;
  }

  /**
   * Get subscription stype
   */
  public function getSubscriptionType(): string {
    return $this->subscriptionType;
  }
}

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

class ProPlan extends Product {
  /**
   * 
   */
  protected float $setupDiscount;
  /**
   * 
   */
  protected float $recurringDiscount;
  /**
   * 
   */
  public function __construct($subscriptionType, $setupDiscount, $recurringDiscount, $owner) {
    $this->name = 'Pro';
    $this->price = '29.99';
    $this->subscriptionType = $subscriptionType;
    $this->setupDiscount = $setupDiscount;
    $this->recurringDiscount = $recurringDiscount;
    $this->owner = $owner;
  }
}

$product1 = new FreePlan(new User('brandon@example.com', 'China'));

var_dump($product1);