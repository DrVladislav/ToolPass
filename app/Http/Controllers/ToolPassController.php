<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToolPassController extends Controller
{
    public function create(Request $request)
    {
        if ($request->ajax()){
            return $request->all();
        }
        return $request->all();
    }

    //    TODO make requests
    public function update()
    {

    }

    public function delete()
    {

    }
}
