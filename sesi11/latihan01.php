<?php
    $dta ["NAMA"] = "Kristiantari";
    $dta ["TGL_LAHIR"] = "2004-01-24";
    $dta ["JKEL"] = "P";
    $dta ["ALAMAT"] = "CELUK,SUKAWATI,GIANYAR";
    $dta ["JURUSAN"] = "TI-KAB";
    
    
    

    header("Content-type: application/json; charset=utf-8");
      echo  json_encode ($dta);