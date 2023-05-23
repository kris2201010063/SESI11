<?php
    $dta [0] ["NAMA"] = "Kristiantari";
    $dta [0] ["TGL_LAHIR"] = "2004-01-24";
    $dta [0] ["JKEL"] = "P";
    $dta [0] ["ALAMAT"] = "CELUK,SUKAWATI,GIANYAR";
    $dta [0] ["JURUSAN"] = "TI-KAB";
    
    $dta [1] ["NAMA"] = "Bagussss";
    $dta [1] ["TGL_LAHIR"] = "2004-03-01";
    $dta [1] ["JKEL"] = "L";
    $dta [1] ["ALAMAT"] = "Jalan Nangka Utara,gatsu";
    $dta [1] ["JURUSAN"] = "TI";
    
    $dta [2] ["NAMA"] = "Mulia Dharma";
    $dta [2] ["TGL_LAHIR"] = "1996-02-02";
    $dta [2] ["JKEL"] = "L";
    $dta [2] ["ALAMAT"] = "Bungbungan,Klungkung";
    $dta [2] ["JURUSAN"] = "Hukum";

    header("Content-type: application/json; charset=utf-8");
      echo  json_encode ($dta);