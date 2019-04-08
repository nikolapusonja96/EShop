<?php
/**
 * Created by PhpStorm.
 * User: PCWIN7
 * Date: 06-Mar-19
 * Time: 04:19 AM
 */

namespace App\Http\Controllers;
use App\Models\ModelOrders;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
class UserController extends FrontEndController
{
    public function show_signup_form()
    {
        return view('pages.user.registration', $this->data);
    }

    public function signUp(\App\Http\Requests\RegisterUserRequest $request)
    {
        $fname = $request->input('fname');
        $lname = $request->input('lname');
        $mail = $request->input('email');
        $password = $request->input('password');
        $address = $request->input('address');
        $city = $request->input('city');
        $gender = $request->input('gender');
        $role = 2;

        try {
            $this->user->insertUser($fname, $lname, $mail, $password, $address, $city, $gender, $role);
            return redirect('/login')->with('success', 'You are registered now, please sign in to your account!');

        } catch (QueryException $e) {
            \Log::info("Failed registration!" . $e->getMessage());
        }
    }

    public function show_login_form()
    {
        return view('pages.user.login', $this->data);
    }

    public function ulogin(Request $req)
    {
        $mail = $req->input('login_email');
        $pass = $req->input('login_password');

            $admin1 = $this->admin->getAdmin($mail, $pass);
            session()->put('admin', $admin1);

            $user1 = $this->user->getUser($mail, $pass);
            session()->put('user', $user1);

            if(session()->get('admin')){
                return redirect('/admin');
            }elseif(session()->get('user')) {

                return redirect('/');
            }else{
                return redirect()->back()->with('message', 'Failed login');
            }

    }
    public function getUserOrders($id)
    {
        $orders1 = new ModelOrders();
        $id = session()->get('user')->id_user;
      $orders = $orders1->getUserOrder($id);

      $orders->transform(function($order){
          $order->cart = unserialize($order->cart);
          return $order;
      });

        return view('pages.user.userOrders', $this->data, ['orders'=> $orders ]);
    }
    public function getUserProfile($id)
    {
        $id = session()->get('user')->id_user;
        $this->data['user'] = $this->user->getUserProfile($id);

        return view('pages.user.user', $this->data);

    }
}