<?php 


require "../models/data.php";


function loadAll($data){

for ($i=0; $i < count($data); $i++) { 
    include "../views/components/card.php";
}
}


include "../views/product-list.php";




?>