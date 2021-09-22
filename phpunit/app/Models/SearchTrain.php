<?php

namespace App\Models;


class SearchTrain
{
    public $fid = array("9", "15","16","18","20","5","6","30","32");

    public function searchTrain($f){
        foreach ($this->fid as $value) {
            if ($value == $f) {
                return "Train Found";
                break;
          }
    
        }
    }
}