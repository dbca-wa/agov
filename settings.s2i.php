<?php

// Settings for OpenShift S2I deployment
$databases['default']['default'] = array (
  'database' => $_ENV['DB_NAME'],
  'username' => $_ENV['DB_USERNAME'],
  'password' => $_ENV['DB_PASSWORD'],
  'host' => $_ENV['DB_HOST'],
  'port' => '',
  'driver' => $_ENV['DB_TYPE'],
  'prefix' => '',
);
$settings['install_profile'] = 'agov';
