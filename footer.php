<?php require_once 'functions.php' ?> 

</main><!-- /.container -->

<div class="row">
 <div class="col-md-4"></div>
 <div class="col-md-4"></div>
 <div class="col-md-4">
 <h5>Navigation</h5>
 <ul class='list-unstyled text-small' >
    
     <?php 

     //si j'utilise le fichier menu.php
       
        // $classLink ='';
        //  require 'menu.php' ;

     //si j'utilise le fichier fonction.php

   echo nav_menu() ;


      
    ?>

 </ul>
 </div>

</div>




<!-- bootsrap -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>


