<?php 
	if (isset($_SESSION['categories'])){
		$listeCaterogiesParent = unserialize($_SESSION['categories']);
		constructionSideBar($listeCaterogiesParent);
	}
?>