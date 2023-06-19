<?php 


require "../models/data.php";


function loadPc($data){

    $filterBy = 'Xbox'; // or Finance etc.

     $data = array_values(array_filter($data, function ($var) use ($filterBy) {
        return (str_contains($var["platform"],$filterBy) );
    }));


    
for ($i=0; $i < count($data); $i++) { 
    include "../views/components/card.php";
}
}


include "../views/xbox-product.php";




?>