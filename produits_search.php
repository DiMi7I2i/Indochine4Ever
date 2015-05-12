<?php

include 'ini.php';
// Inclusion du header
include 'header.php';
echo '<div class=span9>';
echo '<ul class=thumbnails>';
rechercheProduit($_POST['produitname'],$conn);
echo '</ul>';
echo '</div>';

// Inclusion du header
include 'footer.php';

?>