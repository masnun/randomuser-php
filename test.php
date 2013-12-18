<?php
/**
 * Author: Abu Ashraf Masnun
 * URL: http://masnun.me
 */

require_once 'vendor/autoload.php';

use Masnun\RandomUser;

$data = RandomUser::generate();
$name = $data[0]->user->name;

echo "{$name->title} {$name->first} {$name->last}" . PHP_EOL;
