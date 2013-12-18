<?php
/**
 * Author: Abu Ashraf Masnun
 * URL: http://masnun.me
 */

require_once 'RandomUser.php';

$users = RandomUser::generate('male', 5);

var_dump((array)$users);