<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ToolPassController extends Controller
{


    public function show($service_id)
    {
        $service = Auth::user()->services->where('id', $service_id)->first();
        if (!$service) {
            return abort(404);
        }
        return view('layouts.service', compact('service'));
    }

    public function create(Request $request)
    {
        $this->validate(request(),[
            'service' => 'required'
        ]);
        $service = new Service();
        $service->user_id = Auth::id();
        $service->fill(['service'   => $request->service,
                        'login'     => $request->login,
                        'email'     => $request->email,
                        'password'  => $request->password,
                        'others'    => trim($request->others)]);
        $service->save();
        return redirect('/home');
    }

    public function update($id, Request $request)
    {
        $service = Auth::user()->services->where('id', $id)->first();
        $user = Auth::id();
        if ($service->user_id == $user) {
            $service->service   = $request->service;
            $service->login     = $request->login;
            $service->email     = $request->email;
            $service->password  = $request->password;
            $service->others    = $request->others;
            $service->save();
        }
        return back();
    }

    public function delete($id, Request $request)
    {
        Auth::user()->services->where('id', $id)->first()->delete();
        return redirect('/home');
    }
}
