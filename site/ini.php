<?php
session_start();
include 'config.php';
include 'multilangue.php';
include 'fonction.php';

// Fonction metier
include 'metier/fonction/FonctionProduit.php';

initLangue();
$conn= connecterDatabase();
connecterDatabaseBdd($conn);
?>