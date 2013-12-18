<?php
/**
 * Author: Abu Ashraf Masnun
 * URL: http://masnun.me
 */

require_once 'vendor/autoload.php';

use Masnun\RandomUser;

$data = RandomUser::generate();

var_dump($data);