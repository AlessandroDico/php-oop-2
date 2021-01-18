<?php
echo 'hello';
echo '<br>';

require 'User.php';

$userOne = new User ('Mario', 'Rossi');
$userOne->setAge(50);
echo $userOne->getAge();

?>
