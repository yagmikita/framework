<?php

require_once(realpath(__DIR__.'/../AutoloaderPSR0.php'));

spl_autoload_register('AutoloaderPSR0::autoload');