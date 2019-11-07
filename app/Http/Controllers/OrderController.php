<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use \App\Order;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();
        return view('order.index', compact('orders'));
    }
    public function cart()
    {
        $orders = Order::all();
        return view('item.cart', compact('orders'));
    }

    public function addToCart($id)
    {
        $order = Order::find($id);
        dd($order);
 
        if(!$order) {
 
            abort(404);
 
        }
 
        $cart = session()->get('cart');
 
        
        if(!$cart) {
 
            $cart = [
                    $id => [
                        'code' =>23,
                         'quality' => $faker->word(),
                         'total' => '5000',
                        'item_id' => function() {
                            return factory('App\item')->create()->id;
                        }
                    ]
            ];
 
            session()->put('cart', $cart);
 
            return redirect()->back()->with('success', 'Order added to cart successfully!');
        }
 
        
        if(isset($cart[$id])) {
 
            $cart[$id]['total']++;
 
            session()->put('cart', $cart);
 
            return redirect()->back()->with('success', 'Order added to cart successfully!');
 
        }
 
        
        $cart[$id] = [
            'code' =>23,
            'quality' => $faker->word(),
            'total' => '5000',
           'customer_id' => function() {
               return factory('App\Customer')->create()->id;
            },
           'item_id' => function() {
               return factory('App\item')->create()->id;
           }
        ];
 
        session()->put('cart', $cart);
 
        return redirect()->back()->with('success', 'Order added to cart successfully!');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $order = new Order();
        return view('order.create',compact('order'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Order::create($request->all());
        return redirect('/order');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
