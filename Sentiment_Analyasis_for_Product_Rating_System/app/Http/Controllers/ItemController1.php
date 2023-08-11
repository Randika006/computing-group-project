<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Items1;


class ItemController1 extends Controller
{
     public function index()
    {
        $items1 = Items1::all();
        return view('items1', compact('items1'));
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function cart()
    {
        return view('cart');
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function addToCart($id)
    {
        $items1 = Items1::findOrFail($id);
          
        $cart1 = session()->get('cart', []);
  
        if(isset($cart1[$id])) {
            $cart1[$id]['quantity']++;
        } else {
            $cart1[$id] = [
                "name" => $items1->name,
                "quantity" => 1,
                "price" => $items1->price,
                "image" => $items1->image
            ];
        }
          
        session()->put('cart', $cart1);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart1 = session()->get('cart');
            $cart1[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart1);
            session()->flash('success', 'Cart updated successfully');
        }
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function remove(Request $request)
    {
        if($request->id) {
            $cart1 = session()->get('cart');
            if(isset($cart1[$request->id])) {
                unset($cart1[$request->id]);
                session()->put('cart', $cart1);
            }
            session()->flash('success', 'Product removed successfully');
        }
   }
}
