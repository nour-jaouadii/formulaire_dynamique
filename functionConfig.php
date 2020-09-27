<!--  config.php -->

<?php 

function dump($variable){
    echo '<pre>';
    var_dump($variable);
    echo  '</pre>';
}

function creneaux_html(array $creneaux){ 
  $phrases = [];
  if(empty($creneaux)){
      return 'Fermé';
  }
  foreach ($creneaux as $creneau ) {
   $phrases[] = "de <strong>$creneau[0]h </strong> à  <strong>$creneau[1] h </strong> "; 
  }// endforeach 
  return 'Ouvert  ' . implode(" et ", $phrases );
}//end function

function in_creneaux(int $heure, array $creneaux): bool{
    foreach ($creneaux as $creneau ) {
         $debut = $creneau[0];
         $fin = $creneau[1];
         if ($heure < $fin && $heure >= $debut) {

            return true;
         }
    }
    return false;

}

