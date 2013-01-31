<?php

error_reporting(E_ALL & ~E_NOTICE);
ini_set('error_log', realpath(__DIR__ . '/error.log'));
defined('DEBUG_MODE') || define('DEBUG_MODE', false);

require_once realpath(__DIR__ . '/_autoloader.php');

try {
    $form = new \NG\Html\Elements\Tags\Form(array());
    $form->addElement(new \NG\Html\Elements\Tags\Input(array(
        '_attributes' => array(
            'type'  => 'text',
            'name'  => 'pdew3_username',
            'id'    => 'pdew3_username',
            'class' => 'ng-input'
        )
    )));
    $form->addElement(new \NG\Html\Elements\Tags\Textarea(array(
        '_attributes' => array(
            'id'    => 'pdew3_content',
            'class' => 'ng-textarea',
            'cols'  => 120,
            'rows'  => 40
        )
    )));
    echo $form->render();
} catch (\NG\Application\Exceptions\InvalidOptionsException $e) {
    echo "<p style='color:red;'>Error ".$e->getCode().": ".$e->getMessage().".</p>";
}