<?php namespace Testing;

class TestCase extends BaseTestCase
{
  /**
   * visit a url
   *
   * @param $path
   * @return $this
   */
  public function visit($path)
  {
    $this->url($path);

    return $this;
  }

  /**
   * @param $text
   * @param string $tag
   */
  public function see($text, $tag = 'body')
  {
    $this->assertContains($text, $this->byTag($tag)->text());
  }

  /**
   * @param $class
   * @param $element
   */
  public function hasClass($class, $element)
  {
    $this->assertContains($class, $element->attribute('class'));
  }

  /**
   * @param $class
   * @param $element
   */
  public function doesNotHasClass($class, $element)
  {
    $this->assertNotContains($class, $element->attribute('class'));
  }


}
