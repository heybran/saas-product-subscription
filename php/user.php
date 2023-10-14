<?php 
/**
 * User that will be purchasing product.
 */

declare(strict_types = 1);

namespace SPS\User;

class User {
  /**
   * 
   */
  private string $email;
  /**
   * 
   */
  private string $country;

  public function __construct(string $email, string $country) {
    $this->email = $email;
    $this->country = $country;
  }
}
?>