<?php
// Initialisation de la session
session_start();

// Configuration
include 'config.php';
include 'multilangue.php';
include 'fonction.php';
// Entités
include 'metier/User.php';
include 'metier/Produit.php';
include 'metier/LigneCaddie.php';
include 'metier/Caddie.php';
// Fonctions metiers
include 'metier/fonction/FonctionCaddie.php';
include 'metier/fonction/FonctionProduit.php';
include 'metier/fonction/FonctionUser.php';
include 'metier/converteur/ProduitConverteur.php';
include 'metier/converteur/UserConverteur.php';

// Initialisation
initLangue();
initCaddie();
$conn= connecterDatabase();
connecterDatabaseBdd($conn);
?>
