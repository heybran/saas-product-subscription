<?php 

declare(strict_types=1);

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use SPS\User;

class UserTest extends TestCase {
  /** @test */
  public function it_has_correct_email_and_country(): void {
    $email = 'brandon@example.com';
    $country = 'china';
    $user = new User($email, $country);
    $this->assertEquals($user->getEmail(), $email);
    $this->assertEquals($user->getCountry(), $country);
  }
}