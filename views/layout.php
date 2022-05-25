<?php

    

    require_once'includes/head.php';
    
    require_once 'includes/header.php';

    require_once 'includes/nav.php';
?>

	<main class="container">
    
    


    <?= $this->content(); ?>  <!-- O conteudo a ser apresentado -->


	</main>





<?php
         
    require_once 'includes/footer.php';
    
?>