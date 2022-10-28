<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PustakawanController extends Controller
{
    function index() {
        $data = [
           "name" => "Andika Fadhilah",
           "gender" => "L",
           "address" => "Jalan Pabuaran Kec.Kemang Kab.Bogor",
           "is_student" => true,
        ];
   
        return response()->json($data);
   }
}
