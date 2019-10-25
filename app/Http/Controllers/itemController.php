<?php

namespace App\Http\Controllers;
use App\item;
use Illuminate\Http\Request;

class itemController extends Controller
{
    public function index()
    {
        $items = item::all();
        return view('item.index', compact('items'));
    }

   
    public function create()
    {
        $item = new item();
        return view('item.create', compact('item'));
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
        
        $item = item::find($id);
        return view('item.create',compact('item'));
    }

   
    public function update(Request $request, $id)
    {
        item::find($id)->update($request->all());
        return redirect('/item');
    }

   
    public function destroy($id)
    {
        item::find($id)->delete();
        return redirect('/item');
    }
}
