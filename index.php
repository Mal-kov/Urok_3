<?php
    error_reporting(E_ERROR|E_WARNING|E_PARSE|E_NOTICE);
    ini_set('display_errors', 1);
    
    $min=  strtotime('1970-01-01');
    $max=  strtotime('2015-01-01');
    $a= rand($min,$max);
    $b= rand($min,$max);
    $c= rand($min,$max);
    $d= rand($min,$max);
    $e= rand($min,$max);
    $date = array ($a, $b, $c, $d, $e);
   
    print_r($date);
    echo "\n";
    echo 'data 1 - '. date ('l d.m.Y H:i:s', $a)."\n";
    echo 'data 2 - '. date ('l d.m.Y H:i:s', $b)."\n";
    echo 'data 3 - '. date ('l d.m.Y H:i:s', $c)."\n";
    echo 'data 4 - '. date ('l d.m.Y H:i:s', $d)."\n";
    echo 'data 5 - '. date ('l d.m.Y H:i:s', $e)."\n";
    
    echo "\n";
    echo min(date('d',$a),date('d',$b),date('d',$c),date('d',$d),date('d',$e)).' - minimal dey'."\n";
    echo max(date('m',$a),date('m',$b),date('m',$c),date('m',$d),date('m',$e)).' - maximal month'."\n";
    
    echo "\n";
    sort($date);
    print_r($date);
    
    echo "\n";
    $selected= array_pop($date);
    print_r('Posledniya data massiva - '.$selected);
    echo "\n";
    echo date('l d.m.Y H:i:s', $selected)."\n";
    echo "\n";
    echo date_default_timezone_get();
    echo "\n".date ('l d.m.Y H:i:s');
    date_default_timezone_set('America/New_York');
    echo "\n".date_default_timezone_get();
    echo "\n".date ('l d.m.Y H:i:s');
    


//echo "\n";
    
    //
    ////. " - Posledniya data massiva - ";
//print_r($date);
    

?>
