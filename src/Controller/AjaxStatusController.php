<?php

namespace Drupal\ajax_status\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for Ajax status routes.
 */
class AjaxStatusController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function build() {

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('It works!'),
    ];

    return $build;
  }

}
