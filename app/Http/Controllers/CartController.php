<?php
/**
 * Created by PhpStorm.
 * User: PCWIN7
 * Date: 11-Mar-19
 * Time: 04:07 AM
 */

namespace App\Http\Controllers;
use App\Models\ModelCart;
use App\Models\ModelOrders;
use App\Models\ModelProducts;
use Illuminate\Http\Request;
class CartController extends FrontEndController
{

    public function getAddToCart(Request $request, $id){

        $p = new ModelProducts();
        $p = $p->getCartSingleProduct($id);

        $oldCart = session()->has('cart') ? session()->get('cart') : null;
        $cart = new ModelCart($oldCart);
        $cart->add($p, $p->id_product);

        $request->session()->put('cart', $cart);
        return redirect()->back()->with('message', 'Product has been added to cart successfully!');
    }

    public function getCart()
    {
        if(!session()->has('cart'))
        {
            return view('pages.user.cart', $this->data);
        }

        $oldCart = session()->get('cart');
        $cart = new ModelCart($oldCart);

        return view('pages.user.cart', $this->data,[
            'products' => $cart->items,
            'totalPrice' => $cart->totalPrice
        ]);
    }
    public function getReduceByOne(Request $request, $id)
    {
        $oldCart = session()->has('cart') ? session()->get('cart') : null;
        $cart = new ModelCart($oldCart);
        $cart->reduceByOne($id);

        if(count($cart->items)>0) {
            $request->session()->put('cart', $cart);
        }else{
            session()->forget('cart');
        }
        return redirect()->back()->with('message', 'You removed One successfully!');
    }
    public function getRemoveAll(Request $request, $id)
    {
        $oldCart = session()->has('cart') ? session()->get('cart') : null;
        $cart = new ModelCart($oldCart);
        $cart->removeAll($id);
        if(count($cart->items)>0) {
            $request->session()->put('cart', $cart);
        }else{
            session()->forget('cart');
        }
        return redirect()->back()->with('message', 'You removed it  successfully!');
    }
    public function getCheckout()
    {
        if(!session()->has('cart'))
        {
            return view('pages.user.index', $this->data);
        }

        $oldCart = session()->get('cart');
        $cart = new ModelCart($oldCart);
        $total = $cart->totalPrice;
        return view('pages.user.checkout', $this->data, [
            'total' => $total
        ]);

    }
    public function placeOrder(Request $request)
    {
        if(!session()->has('cart'))
        {
            return view('pages.user.cart', $this->data);
        }

        $oldCart = session()->get('cart');
        $cart = new ModelCart($oldCart);


        $order = new ModelOrders();

       $p = $order->cart = serialize($cart);
        $firstName = $request->input('first-name');
        $lastName = $request->input('last-name');
        $address = $request->input('address');
        $city = $request->input('city');
        $country = $request->input('country');
        $zip = $request->input('zip-code');
        $tel = $request->input('tel');
        $userId = $request->session()->get('user')->id_user;


        $order->insertOrder($firstName, $lastName, $address, $city, $country, $zip, $tel, $userId, $p);
        session()->forget('cart');
        return redirect('/user-orders/'.session()->get('user')->id_user)->with('message', 'Your Order has been placed successfully!');

    }
}