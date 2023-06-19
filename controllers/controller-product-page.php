<?php 


require "../models/data.php";


function loadStreet($data){

    $filterBy = 'Street'; // or Finance etc.

     $data = array_values(array_filter($data, function ($var) use ($filterBy) {
        return (str_contains($var["title"],$filterBy) );
    }));


    
for ($i=0; $i < count($data); $i++) { 
    include "../views/components/card.php";
}
}


include "../views/product-page.php";




?>