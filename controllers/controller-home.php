<?php 

require "../models/data.php";


function loadTendency($data){
for ($i=0; $i < 9 ; $i++) { 
   include "../views/components/card.php";
}

}

function loadBestSell($data){

    $key_values = array_column($data, 'popularity'); 
     array_multisort($key_values, SORT_DESC, $data);
    for ($i=0; $i < 6 ; $i++) { 
        include "../views/components/card.php";
    }

}

function loadComment($data)
{
    for ($i=0; $i < 3 ; $i++) { 
      include "../views/components/comment-card.php";
    }
   
}

include "../views/home.php";



?>