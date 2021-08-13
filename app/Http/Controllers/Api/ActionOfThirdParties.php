<?php

namespace App\Http\Controllers\Api;

use App\Models\ActionOfThirdParties as ModelActionOfThirdParties;
use App\Http\Controllers\Controller;
use App\Http\Requests\ActionOfThirdParties as RequestsActionOfThirdParties;
use App\Http\Services\StoreData;
use Illuminate\Http\Request;

class ActionOfThirdParties extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestsActionOfThirdParties $request)
    {
        $table =  new ModelActionOfThirdParties();
        $insert = new storeData($request,$table);
        if($insert){
            return response()->json([
                'resp'=>true,
                'message'=>'Insertado correctamente',
                $insert
                
            ],201);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
