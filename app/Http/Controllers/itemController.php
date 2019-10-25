<?php

namespace App\Http\Controllers;
use App\item;
use Illuminate\Http\Request;

class itemController extends Controller
{
    public function index()
    {
        $items = item::all();
        return view('index', compact('items'));
    }

   
    public function create()
    {
        $item = new item();
        return view('create', compact('item'));
    }

    public function store(Request $request)
    {
        item::create($request->all());
        return redirect('/item');
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
