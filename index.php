<?php
/**
 * Created by Thibaud BARDIN (Irvyne)
 * This code is under the MIT License (https://github.com/Irvyne/license/blob/master/MIT.md)
 */

require 'User.php';

$user = new User();

$article = new Article();
$article->setUser($user);
$article->getUserId();