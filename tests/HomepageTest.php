<?php namespace Testing;

class HomepageTest extends TestCase
{
  use Helpers;

  /** @test */
  public function it_checks_for_text_on_dribble_homepage()
  {
    $this->visit('/');

    $this->see('What are you working on?');
  }

}
