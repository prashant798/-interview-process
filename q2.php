<?php  
function printRepeating( $arr, $size)  
{  
    $xor = $arr[0]; 
    $set_bit_no;
    $n = $size - 2;  
    $x = 0; $y = 0;  
    for($i = 1; $i < $size; $i++)  
    $xor ^= $arr[$i];  
    for($i = 1; $i <= $n; $i++)  
    $xor ^= $i;  
    $set_bit_no = $xor & ~($xor-1);    
    for($i = 0; $i < $size; $i++)  
    {  
    if($arr[$i] & $set_bit_no)  
    $x = $x ^ $arr[$i]; 
    else
    $y = $y ^ $arr[$i];     
    }  
    for($i = 1; $i <= $n; $i++)  
    {  
    if($i & $set_bit_no)  
    $x = $x ^ $i;  
    else
    $y = $y ^ $i; 
    }  
    echo "n The two repeating elements are "; 
    echo $y. " ".$x; 
    
   }  
  
$arr = array(4, 2, 4, 5, 2, 3, 1);  
$arr_size = count($arr);  
printRepeating($arr, $arr_size);  
 
?>