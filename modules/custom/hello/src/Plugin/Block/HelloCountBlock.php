<?php

namespace Drupal\hello\Plugin\Block;

use Drupal\Core\Access\AccessResult;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Session\AccountInterface;

/**
 * Provides a hello count block.
 *
 * @Block(
 *  id = "hello_count_block",
 *  admin_label = @Translation("Hello count")
 * )
 */
class HelloCountBlock extends BlockBase {

  /**
   * Implements Drupal\Block\BlockBase::build().
   */
  public function build() {
    $database = \Drupal::database();
    $number = $database->select('sessions', 's')
      ->countQuery()
      ->execute()
      ->fetchField();

    return array(
      '#markup'  => $this->t('Session number: %number', array('%number' => $number)),
      '#cache' => array('keys' => ['hello:sessions'], 'max-age' => '1'),
    );
  }

}
