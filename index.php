<?php
// echo 'hello';
echo '<br>';

require_once 'User.php';
require_once 'UserAdvanced.php';
require_once 'PostTrait.php';

// utente "base"
echo "<strong>Utente 'base'</strong> ";
echo '<br>';

try {
    $userBaseOne = new User ('Mario', 'Rossi');
    echo 'Nome : ' . $userBaseOne->getName();
    echo '<br>';
    echo 'Cognome : ' . $userBaseOne->getLastname();
    echo '<br>';

    // stampo messaggio di errore se l'età non è corretta con try e chatch
    try {
        $userBaseOne->setAge(50);
        echo 'Anni : ' . $userBaseOne->getAge();
    } catch (Exception $e) {
        echo 'ERRORE : ' . $e->getMessage();
    }

    echo '<br>';
    $userBaseOne->setPoint(10);
    echo 'Punti per blog : ' . $userBaseOne->getPoint();
    echo '<br>';
    $userBaseOne->setWeeklyPosts(1);
    echo 'Blog settimanali : ' . $userBaseOne->getWeeklyPosts();
    echo '<br>';
    $userBaseOne->setViews(50);
    echo 'Visualizzazioni per blog : ' . $userBaseOne->getViews();
    echo '<br>';

} catch (Exception $e) {
    echo 'ERRORE : ' . $e->getMessage();
}

echo '<br>';
echo '<br>';

// utente "advanced"
echo "<strong> Utente 'advanced' </strong>";
echo '<br>';
try {
    $userAdvOne = new UserAdvanced ('Pippo', 'Bianchi');
    echo 'Nome : ' . $userAdvOne->getName();
    echo '<br>';
    echo 'Cognome : ' . $userAdvOne->getLastname();
    echo '<br>';

    // stampo messaggio di errore se l'età non è corretta con try e chatch
    try {
        $userAdvOne->setAge(35);
        echo 'Anni : ' . $userAdvOne->getAge();
    } catch (Exception $e) {
        echo 'ERRORE : ' . $e->getMessage();
    }

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
    $userAdvOne->setWeeklyPosts(2);
    echo 'Blog settimanali : ' . $userAdvOne->getWeeklyPosts();
    echo '<br>';
    $userAdvOne->setViews(100);
    echo 'Visualizzazioni per blog : ' . $userAdvOne->getViews();
    echo '<br>';

} catch (Exception $e) {
    echo 'ERRORE : ' . $e->getMessage();
}


?>
