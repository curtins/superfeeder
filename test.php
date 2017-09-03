<?php
require_once __DIR__ . '/vendor/autoload.php'; // Autoload files using Composer autoload
use MySportsFeeds\MySportsFeeds;
$data_query = new MySportsFeeds('1.0', true);
$data_query->authenticate('curtins', 'April1955#');
var_dump($data_query);
