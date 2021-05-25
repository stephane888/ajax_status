<?php
namespace Drupal\ajax_status\Services;

class Status {

  public $Codes;

  public $Messages;

  function __construct(Codes $Codes, Messages $Messages)
  {
    $this->Codes = $Codes;
    $this->Messages = $Messages;
  }

  function getCode()
  {
    return $this->Codes->getCode();
  }

  function getMessage()
  {
    return $this->Messages->getMessage();
  }
}