<?php
namespace Drupal\ajax_status\Services;

class Status implements InterfaceStatus {

  /**
   * Cest un object, utiliser les methodes pour faire la MAJ
   *
   * @var Object
   */
  public $Codes;

  /**
   * Cest un object, utiliser les methodes pour faire la MAJ
   *
   * @var Object
   */
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
