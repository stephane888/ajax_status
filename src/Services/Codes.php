<?php
namespace Drupal\ajax_status\Services;

class Codes {

  private $code = 200;

  function setCode($value = 200)
  {
    $this->code = $value;
  }

  function getCode()
  {
    return $this->code;
  }
}