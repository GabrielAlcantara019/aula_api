<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
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
    
    public function store(Request $request)
    {
        $marca = Marca::create($request->all());
        dd($marca);
        return 'chegamos ate aqui(store)';
    }

   
    public function show(Marca $marca)
    {
        //
    }

    public function update(Request $request, Marca $marca)
    {
        //
    }

    
    public function destroy(Marca $marca)
    {
        //
    }
}
