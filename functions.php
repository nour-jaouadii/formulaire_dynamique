<?php 
//   function nav_item(string $lien, string $titre) :string
//    {
//      $classe = 'nav-item';
//        if($_SERVER['SCRIPT_NAME'] === $lien)   
//         {  
//           $classe =  "{$classe} active";  // string  template  au lieu de  $classe =  $classe . "active"
//          } 
//    // 1ere methode   nowdoc
  
//          //  $html =  '<li class="' . $classe .'">  
//          //             <a class="nav-link" href="' . $lien .'"> '. $titre .' </a>
//         //          </li>'  ;

//    // 2eme methode   nowdoc

//         $html= <<<NOUR
//          <li class=" $classe ">  
//            <a class="nav-link" href=" $lien ">  $titre </a>
//         </li> 
// NOUR;
//    return  $html;  
  
//     }// fin function

function nav_item(string $lien, string $titre, string $classLink ='' ) :string
{
$classe = 'nav-item';
    if($_SERVER['SCRIPT_NAME'] === $lien)   
    {  
    $classe =  "{$classe} active";  // string  template  au lieu de  $classe =  $classe . "active"
    } 
// 1ere methode   nowdoc

    //  $html =  '<li class="' . $classe .'">  
    //             <a class="nav-link" href="' . $lien .'"> '. $titre .' </a>
    //          </li>'  ;

// 2eme methode   nowdoc

    $html= <<<NOUR
    <li class=" $classe ">  
        <a class="$classLink " href=" $lien ">  $titre </a>
    </li> 
NOUR;
return  $html;  

}// fin function
      
function nav_menu(string $classLink = ''): string
 {      
 return  
     nav_item('/index.php','Accueil',$classLink )  . 
     nav_item('/contact.php','Contact',$classLink) ; 

}
  ?>


