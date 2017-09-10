<?php

namespace Drupal\test_module\Controller;

use Drupal\Core\Controller\ControllerBase;

class test_moduleController extends ControllerBase {
    
    public function content() {
        return array(
            '#type' => 'markup',
            '#markup' => $this->t('hello world'),
        );
    }
    
}