<?php

namespace Drupal\hello\Plugin\Block;
use Drupal\Core\Block\BlockBase;

/**
*
* @Block(
* id = "hello_block",
* admin_label = @Translation ("Hello!") 
* )
*/
class Hello extends BlockBase {
	public function build() {
	   //$build = array('#markup' => $this->t('welcome!'));
		$ma_date = format_date(time(), 'medium', '', 'Europe/Brussels');
	   //$build = array('#markup' => $this->t('welcome! il est ').$ma_date);

    $build = array(
      '#markup' => $this->t('It is %time.', array(
        '%time' => \Drupal::service('date.formatter')->format(REQUEST_TIME, 'custom', 'H:i s\s'),
      )),	
	   '#cache' => array(
	        'keys' => ['hello'],
	        'max-age' => '10',
	     ),      
     );   

	   return $build;
	}
}