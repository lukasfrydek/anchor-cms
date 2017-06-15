<?php

/*
               /   \
              |  o  |
               \   /
        ________) (________
       |                   |
       '------.     .------'
               |   |
               |   |
               |   |
               |   |
    /\         |   |         /\
   /_ \        /   \        / _\
     \ '.    .'     '.    .' /
      \  '--'         '--'  /
       '.                 .'
         '._           _.'
            `'-.   .-'`
                \ /
*/
// Environment
define('DS', DIRECTORY_SEPARATOR);
define('ENV', getenv('APP_ENV'));
define('VERSION', '0.12.1');
define('MIGRATION_NUMBER', 220);

// Paths
define('PATH', __DIR__ . DS);
define('APP', PATH . 'anchor' . DS);
define('SYS', PATH . 'system' . DS);
define('EXT', '.php');

// Urls
define('BASE_URL', dirname($_SERVER['SCRIPT_NAME']));

require APP . 'composer_check' . EXT;
require SYS . 'start' . EXT;
