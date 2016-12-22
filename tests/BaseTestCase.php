<?php namespace Testing;

$dotenv = new \Dotenv\Dotenv(__DIR__ . '/../');
$dotenv->load();

class BaseTestCase extends \PHPUnit_Extensions_Selenium2TestCase
{
  /**
   * set ups selenium config
   */
  public function setUp()
  {
    $this->setHost(getenv('PHPUNIT_TESTSUITE_EXTENSION_SELENIUM_HOST'));
    $this->setPort((int) getenv('PHPUNIT_TESTSUITE_EXTENSION_SELENIUM_PORT'));
    $this->setBrowser(getenv('PHPUNIT_TESTSUITE_EXTENSION_SELENIUM2_BROWSER'));
    $this->setBrowserUrl(getenv('PHPUNIT_TESTSUITE_EXTENSION_SELENIUM_TESTS_URL'));

    $this->prepareSession()->currentWindow()->size(array(
        'width' => 2000,
        'height' => 768,
    ));
  }

  /**
   *
   */
  public function setUpPage()
  {

  }

  /**
   * closes window on ending tests
   *
   */
  public function tearDown() {
    $this->closeWindow();
  }

  /**
   * takes screenshots
   *
   * @param $filename
   */
  public function screenshot($filename)
  {
    $filedata = $this->currentScreenshot();

    file_put_contents(__DIR__ . '/screenshots/' . $filename, $filedata);
  }

}
