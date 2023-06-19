<?php 


require "../models/data.php";


function loadPc($data){

    $filterBy = 'Switch'; // or Finance etc.

     $data = array_values(array_filter($data, function ($var) use ($filterBy) {
        return ($var['platform'] == $filterBy);
    }));


    
for ($i=0; $i < count($data); $i++) { 
    include "../views/components/card.php";
}
}


include "../views/switch-product.php";




?>