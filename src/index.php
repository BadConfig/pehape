<?php

/**
 * This file:
 *     Has not been tested
 *     Does not use prepared statements
 *     Is for Proof of Concept only!
 */

$host = 'db';
$user = 'root';
$pass = 'qwerty';

$conn = new mysqli($host, $user, $pass, 'database', 3306 );

$sql = 'show databases';
$results = $conn->query($sql);

?>

<h1>Hello Docker!</h1>

<ul>
    <?php while ($row = $results->fetch_assoc()) : ?>
        <li><?= $row['Database'] ?></li>
    <?php endwhile ?>
</ul>
