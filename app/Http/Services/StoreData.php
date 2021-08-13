<?php 
namespace App\Http\Services;

class storeData 
{
    public function desactiveData($request,$table){
        $consult_exe = $table::create($request->all());
        return $consult_exe;
    }
} 
