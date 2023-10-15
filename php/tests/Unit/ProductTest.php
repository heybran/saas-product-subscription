<?php 

declare(strict_types=1);

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use SPS\FreePlan;
use SPS\User;

class FreeProductTest extends TestCase {
  /** @test */
  public function it_has_name_free(): void {
    $user = new User('brandon@example.com', 'china');
    $freePlan = new FreePlan($user);
    $this->assertEquals($freePlan->getName(), 'Free');
  }
}