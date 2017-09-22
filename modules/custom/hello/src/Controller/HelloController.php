<?php

namespace Drupal\hello\Controller;

use Drupal\Core\Controller\ControllerBase;

class HelloController extends ControllerBase {

  public function content() {
    $message = $this->t('You are on the Hello page. Your name is %username!', array(
      '%username' => $this->currentUser()->getAccountName(),
    
    ));
    $build = array(
    '#markup' => $message,
     
    );

    return $build;
  }

}