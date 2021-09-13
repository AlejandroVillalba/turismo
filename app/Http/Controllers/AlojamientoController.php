<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlojamientoController extends Controller
{
 
    public function index()
    {
        return view('alojamiento.index');
    }

   
    public function create()
    {
        return "Create test";
    }

   
    public function store(Request $request)
    {
        //
    }

   
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
