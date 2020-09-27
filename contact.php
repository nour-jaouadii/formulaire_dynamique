<?php 
$title = 'Nous Contacter';
$nav = 'contact';
require_once 'config.php';
require_once 'functionConfig.php' ;
date_default_timezone_set('Europe/Paris');
// Récupérer l'heure d'aujourd'hui $heure
 $heure = (int)  ($_GET['heure'] ?? ( date('G') ) );
    
//recupérer les créneaux d'aujourd'hui $creneaux

$jour =  (int) (($_GET['jour'])  ?? (date('N')-1) )  ;
$creneauxAuj =  CRENEAUX[$jour];
// dump($heure);
// dump($creneaux);
// dump(date('e'));
// exit();
// récuperer l'etat d'ouverture du magasin
$ouvert = in_creneaux( $heure, $creneauxAuj);

$color  = $ouvert ? 'green' : 'red'; 

require 'header.php' ; 
?>
<div class="row">
    <div class="col-md-8">
        <h2> Nous contacter </h2>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi unde voluptatem cum possimus magnam, aliquid soluta nisi similique provident sequi veritatis, laudantium officia accusamus fugit eos inventore voluptatibus natus quo.
        </p>
       <h3>selectionner le jour que vs convient</h3>
        <form action="" method="get">
            <select name='jour' id="">
              <?php foreach(JOURS as $k => $jour) : ?>
                <option  value="<?= $k ?>" <?php    ?> > <?= $jour  ?></option>
              <?php endforeach ?>
            </select>

            <h3>selectionner l'heure que vs convient</h3>
            <input type="number" name="heure" value="<?php if(isset($_GET['heure'])) { echo $_GET['heure'] ; } ?>" >
        
            <button type="submit">Valider le choix </button>

        </form>
       
       

        
       
    </div>
    <div class="col-md-4">
        <?= date('N')  ?>
        <h2>Horaire d'overture</h2> 
           <?php if($ouvert) : ?>
              <div class="alert alert-success">
                le magasin est ouvert a l'heure actuel <?= $heure; ?>
              </div>
            <?php else :?>
              <div class="alert alert-danger">
              le magasin est fermé a l'heure actuel <?= $heure; ?>
              </div>
            <?php endif ?>
        
    
    
        <ul>
            <?php foreach(JOURS as $k => $jour) : ?>
               <li  <?php if($k+1 === (int) date('N') ) :  ?> style ="color:<?= $color ?>" <?php endif ?> >
                   <?= $jour .' - ' . creneaux_html(CRENEAUX[$k]); ?> </li>
            <?php endforeach ?>
        </ul>
    </div>
    
</div>


<?php require 'footer.php' ; ?>
 