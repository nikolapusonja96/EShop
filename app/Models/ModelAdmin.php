<?php
/**
 * Created by PhpStorm.
 * User: PCWIN7
 * Date: 12-Mar-19
 * Time: 06:13 AM
 */

namespace App\Models;
use Illuminate\Support\Facades\DB;

class ModelAdmin
{
    public function getAdmin($mail, $pass)
    {
        $result = DB::table('users')
            ->join('roles','users.id_user','=','roles.id_role')
            ->where([
                'mail' => $mail,
                'password' => md5($pass),
                'id_role' => 1
            ])
            ->first();
        return $result;
    }
    public function insert($name, $price, $path, $description, $brand, $bracelet, $braceletColor, $category)
    {
        DB::table('products')
            ->insert([
                'id_product' => null,
                'name_product' => $name,
                'price_product' => $price,
                'img_product' => $path,
                'description_img_product' => $description,
                'brand_product' => $brand,
                'bracelet' => $bracelet,
                'bracelet_color' => $braceletColor,
                'category_id' => $category


            ]);
    }

    public function insertSlider($path,$description)
    {
        DB::table('slider')
            ->insert([
                'id_slider' => null,
                'path' => $path,
                'alt' => $description,
            ]);
    }
    public function deleteSlider($id)
    {
        DB::table('slider')
            ->where('id_slider','=', $id)
            ->delete();
    }
    public function deleteProduct($id)
    {
        DB::table('products')
            ->where('id_product','=', $id)
            ->delete();
    }
    public function updateProduct($newPrice, $path, $id)
    {
        DB::table('products')
            ->where('id_product', $id)
            ->update([
                'price_product' => $newPrice,
                'img_product' => $path
            ]);
    }
}