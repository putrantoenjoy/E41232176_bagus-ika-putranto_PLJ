<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendidikan;
use Response;

class ApiPendidikanController extends Controller
{
    //
    // public function getAll()
    // {
    //     $pendidikan = Pendidikan::all();
        
    //     return response()->json($pendidikan, 201);
    // }
    // public function createPen(Request $request)
    // {
    //     Pendidikan::create($request->all());
    //     return response()->json([
    //         "message"=> "data berhasil ditambahkan",
    //     ],201);
    // }
    // public function updatePen()
    // {
    //     // Pendidikan::find($id)->create($request->all());
    //     // return response()->json($pendidikan, 201);
    // }
    // public function getPen($id)
    // {
    //     $pendidikan = Pendidikan::find($id);
    //     return response()->json($pendidikan, 201);
    // }

    public function getAll(){
        $pendidikan = Pendidikan::all();
        return Response::json($pendidikan, 200);
    }
    
    public function createPen(Request $request){
        Pendidikan::create($request->all());
        return Response::json([
            'status' => 'ok',
            'message' => 'Data has been created'
        ], 201);
    }

    public function getPen($id){
        $pendidikan = Pendidikan::find($id);
        return Response::json($pendidikan, 200);
    }

    public function updatePen($id, Request $request){

        Pendidikan::find($id)->update($request->all());
        return Response::json([
            'status' => 'ok',
            'message' => 'Data has been updated'
        ], 201);
    }

    public function deletePen($id){
        Pendidikan::destroy($id);
                return Response::json([
                    'status' => 'ok',
                    'message' => 'Data has been deleted'
                ],201);

    }
}
