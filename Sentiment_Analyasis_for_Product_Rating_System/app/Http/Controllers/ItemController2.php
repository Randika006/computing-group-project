<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Items2;


class ItemController2 extends Controller
{
    public function index()
    {
        $items2 = Items2::all();
        return view('items2', compact('items2'));
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
        $items2 = Items2::findOrFail($id);
          
        $cart1 = session()->get('cart', []);
  
        if(isset($cart1[$id])) {
            $cart1[$id]['quantity']++;
        } else {
            $cart1[$id] = [
                "name" => $items2->name,
                "quantity" => 1,
                "price" => $items2->price,
                "image" => $items2->image
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
