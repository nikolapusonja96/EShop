<?php
/**
 * Created by PhpStorm.
 * User: PCWIN7
 * Date: 15-Mar-19
 * Time: 06:21 PM
 */

namespace App\Models;
use Illuminate\Support\Facades\DB;

class ModelOrders
{
    public function insertOrder($firstName, $lastName, $address, $city, $country, $zip, $tel, $userId, $p)
    {
        DB::table('orders')
            ->insert([
                'id_order' => null,
                'name' => $firstName,
                'lastName' => $lastName,
                'address_delivery' => $address,
                'city' => $city,
                'country' => $country,
                'zip_code' => $zip,
                'Telephone' => $tel,
                'cart' => $p,
                'user_id'=> $userId
            ]);
    }
    public function getUserOrder($id)
    {
        $result = DB::table('orders')
            ->join('users','user_id','=','id_user')
            ->where('user_id', $id)
            ->paginate(2);
        return $result;
    }
    public function getAdminUsersOrders()
    {
        $result = DB::table('orders')
            ->join('users','user_id','=','id_user')
            ->paginate(4);
        return $result;
    }
}