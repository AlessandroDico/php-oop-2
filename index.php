<?php
// echo 'hello';
echo '<br>';

require_once 'User.php';
require_once 'user_optional_info.php';

echo "<strong>Utente 'base'</strong> ";
echo '<br>';
$userBaseOne = new User ('Mario', 'Rossi');
echo 'Nome : ' . $userBaseOne->getName();
echo '<br>';
$userBaseOne->setAge(50);
echo 'Anni : ' . $userBaseOne->getAge();
echo '<br>';
$userBaseOne->setPoint(10);
echo 'Punti per blog : ' . $userBaseOne->getPoint();
echo '<br>';
echo '<br>';


echo "<strong> Utente 'advanced' </strong>";
echo '<br>';
$userAdvOne = new UserAdvanced ('Pippo', 'Bianchi');
echo 'Nome : ' . $userAdvOne->getName();
echo '<br>';
$userAdvOne->setAge(35);
echo 'Anni : ' . $userAdvOne->getAge();
echo '<br>';
$userAdvOne->setCity('Milano');
echo 'Città : ' . $userAdvOne->getCity();
echo '<br>';
$userAdvOne->setJob('Actor');
echo 'Lavoro : ' . $userAdvOne->getJob();
echo '<br>';
$userAdvOne->setPoint(10);
echo 'Punti per blog : ' . $userAdvOne->getPoint();
echo '<br>';


?>
