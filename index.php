<?php
require_once('autoloader.php');

echo "ok";
$query = new Create();
$query->createDatabase();

$user = new Post();
$user->setTitle('Etiam posuere');
$user->setPhotos('pics02.jpg');
$user->setContent('Pellentesque viverra vulputate enim. Aliquam erat volutpat. Pellentesque tristique ante. Sed vel tellus.');
$user->save();