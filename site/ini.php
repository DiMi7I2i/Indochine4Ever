<?php
// Initialisation de la session
session_start();

// Configuration
include 'config.php';
include 'multilangue.php';
include 'fonction.php';

// Connexion a la BDD
$conn= connecterDatabase();
connecterDatabaseBdd($conn);

// Entités
include 'metier/User.php';
include 'metier/Produit.php';
include 'metier/CategorieProduit.php';
include 'metier/LigneCaddie.php';
include 'metier/Caddie.php';
include 'metier/ProduitVignette.php';
// Fonctions metiers
include 'metier/fonction/FonctionCaddie.php';
include 'metier/fonction/FonctionProduit.php';
include 'metier/fonction/FonctionCategorieProduit.php';
include 'metier/fonction/FonctionUser.php';
// Converteur
include 'metier/converteur/ProduitConverteur.php';
include 'metier/converteur/ProduitVignetteConverter.php';
include 'metier/converteur/CategorieProduitConverteur.php';
include 'metier/converteur/UserConverteur.php';

// Initialisation
initLangue();
initDevise();
initCaddie();
initCategories();

?>
