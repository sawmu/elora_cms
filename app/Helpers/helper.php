<?php
  
function changeDateFormate($date,$date_format){
    return \Carbon\Carbon::createFromFormat('Y-m-d', $date)->format($date_format);    
}
   
function productImagePath($image_name)
{
    return public_path('images/products/'.$image_name);
}

function displayMyString(){  
    echo Helper::displayString('Hello');
}

function replaceWhiteSpaceWithHyphen($string){
 
        return strtolower(str_replace(" ", "-", $string));
}