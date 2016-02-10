<?php
require_once('autoloader.php');

$user = new Post();
$user->setTitle('Etiam posuere');
$user->setPhotos('pics02.jpg');
$user->setContent('Pellentesque viverra vulputate enim. Aliquam erat volutpat. Pellentesque tristique ante. Sed vel tellus.');
$user->save();