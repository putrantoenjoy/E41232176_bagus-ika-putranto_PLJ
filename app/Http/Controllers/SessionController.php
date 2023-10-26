<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    //
    public function create(Request $request){
        $request->session()->put("nama", "politeknik negeri jember");
        echo "Data telah ditambahkan ke session";
    }
    public function show(Request $request){
        if($request->session()->has("nama")){
            echo $request->session()->get("nama");
        } else {
            echo"Tidak ada data dalam session";
        }
    }
    
}
