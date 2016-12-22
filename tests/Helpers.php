<?php namespace Testing;

trait Helpers{
  /**
   * @param $needle
   * @param $haystack
   * @return bool
   */
  public function str_contains($needle, $haystack)
  {
    if (strpos($haystack, $needle) !== false) {
      return true;
    }

    return false;
  }
}
