<?php
use App\Models\Category;

function dateID($date){
    if($date !== ''){
        $str = "";
        $delim_space = explode(" ",$date);
        $delim_minus = explode("-",$delim_space[0]);
        switch($delim_minus[1]){
            case '1': $bulan = "Januari"; break;
            case '2': $bulan = "Februari"; break;
            case '3': $bulan = "Maret"; break;
            case '4': $bulan = "April"; break;
            case '5': $bulan = "Mei"; break;
            case '6': $bulan = "Juni"; break;
            case '7': $bulan = "Juli"; break;
            case '8': $bulan = "Agustus"; break;
            case '9': $bulan = "September"; break;
            case '10': $bulan = "Oktober"; break;
            case '11': $bulan = "September"; break;
            case '12': $bulan = "Desember"; break;
            default: $bulan = "Januari"; break;
        }
        $str .= $delim_minus[2]." ".$bulan." ".$delim_minus[0];
        if(isset($delim_space[1])){
            $delim_double_dot = explode(":",$delim_space[1]);
            $str .= ", ".$delim_double_dot[0].".".$delim_double_dot[1];
        }
        return $str;        
    }else{
        return "";
    }
}

function all_categories(){
    $categories = Category::all();
    return $categories;
}