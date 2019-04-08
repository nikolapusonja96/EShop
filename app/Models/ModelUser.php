<?php
/**
 * Created by PhpStorm.
 * User: PCWIN7
 * Date: 08-Mar-19
 * Time: 04:35 AM
 */

namespace App\Models;
use Illuminate\Support\Facades\DB;

class ModelUser
{
    public function insertUser($fname, $lname, $mail, $password, $address, $city, $gender, $role)
    {
         DB::table('users')
            ->insert([
                'id_user' => null,
                'first_name' => $fname,
                'last_name' => $lname,
                'mail' => $mail,
                'password' => md5($password),
                'address' => $address,
                'city' => $city,
                'gender' => $gender,
                'role_id' => $role,
            ]);
    }
    public function getUser($mail, $password)
    {
       $result = DB::table('users')
            ->join('roles','users.role_id','=','roles.id_role')
            ->where([
                'mail' => $mail,
                'password' => md5($password),
                'id_role' => 2
            ])
            ->first();
       return $result;
    }

    public function getUserProfile($id)
    {
        $result = DB::table('users')
            ->join('roles','users.role_id','=','roles.id_role')

            ->where('id_user', '=', $id)
            ->get();
        return $result;
    }
}