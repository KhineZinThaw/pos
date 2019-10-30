<?php

namespace App\Http\Controllers;
use App\item;
use DB;
use Illuminate\Http\Request;
use App\Service\UploadService;

class itemController extends Controller
{
    public function index()
    {
        $items = item::paginate(10);

        return view('item.index', compact('items'));
    }

   
    public function create()
    {
        $item = new item();
        return view('item.create', compact('item'));
    }

    public function store(Request $request)
    {
        
        # validate
        request()->validate([
            'name' => 'required|max:200',
            'price'=> 'required|integer',
            'size'=> 'required|integer',
            'description'=> 'required',
            'image'=>'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);
        


       
        UploadService::fileUpload($request->image, '/public/image');
      
        # add to database
        $item = $request->all();
        $item['image'] = $item['image']->getClientOriginalName();
        
        item::create($item);
        return redirect('/item');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {   
        

        #add to database
        $item = item::find($id);
        return view('item.create',compact('item'));
    }

   
    public function update(Request $request, $id)
    {   
         #validate
         request()->validate([
            'name'=>'required|max:200',
            'price'=>'required|integer',
            'size'=> 'required|integer',
            'description'=> 'required',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        
        UploadService::checkFileExist($request->image, item::find($id)->image,'/public/image');
      
        # add to database
        $item = $request->all();
        $item['image'] = $item['image']->getClientOriginalName();
        
        

        #add to database
        item::find($id)->update($item);
        return redirect('/item');
    }

   
    public function destroy($id)
    {
        item::find($id)->delete();
        return redirect('/item');
    }
}
