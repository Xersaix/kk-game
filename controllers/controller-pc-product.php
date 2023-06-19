<?php 


require "../models/data.php";



function isEqual($a,$b)
{
    if($a == $b)
    {
        return true;
    }
    else{
        return false;
    }
}

function loadPc($data){

    $filterBy = 'Steam'; // or Finance etc.
    $filterBy2 = 'EA App';
     $data = array_values(array_filter($data, function ($var) use ($filterBy,$filterBy2) {
        return (str_contains($var["platform"],$filterBy) || str_contains($var["platform"],$filterBy2));
    }));




for ($i=0; $i < count($data); $i++) { 
    include "../views/components/card.php";
}
}


include "../views/pc-product.php";




?>