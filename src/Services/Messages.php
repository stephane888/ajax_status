<?php
namespace Drupal\ajax_status\Services;

class Messages {

  private $message = 'Execution ok';

  function setMessage($value)
  {
    $this->message = $value;
  }

  function getMessage()
  {
    return $this->message;
  }
}