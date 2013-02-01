<?php

error_reporting(E_ALL & ~E_NOTICE);
ini_set('error_log', realpath(__DIR__ . '/error.log'));
defined('DEBUG_MODE') || define('DEBUG_MODE', false);

require_once realpath(__DIR__ . '/_autoloader.php');

try {
    $form2 = new \NG\Html\Elements\Tags\Form();
    $form2->setElements(array(
        new \NG\Html\Elements\Tags\Input(),
        new \NG\Html\Elements\Tags\Hr(),
        new \NG\Html\Elements\Tags\Input(),
        new \NG\Html\Elements\Tags\Hr(),
        new \NG\Html\Elements\Tags\Textarea(),
        new \NG\Html\Elements\Tags\Br(),
        new \NG\Html\Elements\Tags\Input(array(
            '_attributes' => array(
                'type' => 'submit'
            )
        )),
    ));
    echo $form2->render();
    /*$form = new \NG\Html\Elements\Tags\Form(array(
        '_attributes' => array(
            'name'  => 'my_test_form',
            'id'    => 'my_test_form',
            'action'=> '/test/route',
        )
    ));
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
    echo $form->render();*/
} catch (\NG\Application\Exceptions\InvalidOptionsException $e) {
    $pre    = function($color = 'red') {
        return "<p style='color:{$color};'>";
    };
    $post   = "</p>";
    echo $pre() . "Error " . $e->getCode() . ": " . $e->getMessage() . $post;
    echo $pre('black') . "File  " . $e->getFile() . $post;
    echo $pre('grey') . "Line  " . $e->getLine() . $post;
    echo $pre() . nl2br($e->getTraceAsString()) . $post;
}