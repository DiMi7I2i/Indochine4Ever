<?php

include 'ini.php';
// Inclusion du header
include 'header.php';
echo '<div class=row>';
echo '<div class=span9>';
echo '<ul class=thumbnails>';
if (isset($_POST['produitname'])){
	rechercheProduit($_POST['produitname'],$conn);
}
echo '</ul>';
echo '</div>';
echo '</div>';

// Inclusion du header
include 'footer.php';

?>