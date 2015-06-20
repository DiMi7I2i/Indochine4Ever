<?php
session_start();
include 'config.php';
include 'multilangue.php';
include 'fonction.php';

// Fonction metier
include 'metier/fonction/FonctionProduit.php';

include 'metier/User.php';
include 'metier/Produit.php';
include 'metier/LigneCaddie.php';
include 'metier/Caddie.php';
// Fonction metier
include 'metier/fonction/FonctionProduit.php';
include 'metier/converteur/ProduitConverteur.php';
include 'metier/converteur/UserConverteur.php';
initLangue();
initCaddie();
$conn= connecterDatabase();
connecterDatabaseBdd($conn);
?>