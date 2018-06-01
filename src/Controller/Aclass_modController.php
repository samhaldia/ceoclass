<?php

namespace Drupal\aclass_mod\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Provides route responses for the Example module.
 */
class Aclass_modController extends ControllerBase {

  /**
   * Returns a simple page.
   *
   * @return array
   *   A simple renderable array.
   */
  public function thankYou() {
    return new JsonResponse (array('status' => 1,'message' => 'OK!'));
}

}