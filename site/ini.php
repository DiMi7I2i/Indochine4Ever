<?php
session_start();
include 'config.php';
include 'multilangue.php';
include 'fonction.php';
initLangue();
$conn= connecterDatabase();
connecterDatabaseBdd($conn);
?>