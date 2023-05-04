<?php

session_start();
$movies[] = $avatar = new Movie('Avatar', ['adventure ', 'azion'], 2009);
$movies[] = $superMario = new Movie('Super Mario', ['adventure ', 'azion'], 2023);

if (!isset($_SESSION['movies'])) {
    $_SESSION['movies'] = $movies;
}
