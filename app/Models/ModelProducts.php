<?php
/**
 * Created by PhpStorm.
 * User: PCWIN7
 * Date: 08-Mar-19
 * Time: 02:46 AM
 */

namespace App\Models;
use Illuminate\Support\Facades\DB;

class ModelProducts
{
    public function get_newest_Product()
    {
        $result = DB::table('products')->orderBy('date_added_at', 'desc')->limit(4)->get();
        return $result;
    }
    public function getSingleProduct($id)
    {
        $result = DB::table('products')->join('categories', 'category_id', '=', 'id_category')->where('id_product', '=', $id)->get();
        return $result;
    }
    public function getSingleUpdateProduct($id)
    {
        $result = DB::table('products')->where('id_product', '=', $id)->get();
        return $result;
    }
    public function getAllProducts()
    {
        $result = DB::table('products')
            ->paginate('6');
        return $result;
    }
    public function getAllProductsASC()
    {
        {
            $result = DB::table('products')
                ->orderBy('price_product','ASC')
                ->paginate('6');
            return $result;
        }
    }
    public function getAllProductsDESC()
    {
        {
            $result = DB::table('products')
                ->orderBy('price_product','DESC')
                ->paginate('6');
            return $result;
        }
    }
    public function getAllProductsAdmin()
    {
        $result = DB::table('products')->get();
        return $result;
    }
    public function getCartSingleProduct($id)
    {
        $result = DB::table('products')->where('id_product', '=', $id)->first();
        return $result;
    }
    public function getAllWomenWatches()
    {
        $result = DB::table('products')->join('categories', 'category_id', '=', 'id_category')->where('category_id', '=', 1)->paginate(6);
        return $result;
    }
    public function getAllWomenWatchesASC()
    {
        {
            $result = DB::table('products')
                ->where('category_id','=',1)
                ->orderBy('price_product','ASC')
                ->paginate('6');
            return $result;
        }
    }
    public function getAllWomenWatchesDESC()
    {
        $result = DB::table('products')
            ->where('category_id','=',1)
            ->orderBy('price_product','DESC')
            ->paginate('6');
        return $result;
    }
    public function getAllDanielWellington()
    {
        $result = DB::table('products')->join('categories', 'category_id', '=', 'id_category')->where(['category_id' => 1, 'brand_product' => 'daniel wellington'])->paginate(6);
        return $result;
    }
    public function getAllDanielWellingtonASC()
    {
        $result = DB::table('products')
            ->where([
                'category_id' => 1,
                'brand_product' => 'daniel wellington'
            ])
            ->orderBy('price_product','ASC')
            ->paginate('6');
        return $result;
    }
    public function getAllDanielWellingtonDESC()
    {
        $result = DB::table('products')
            ->where([
                'category_id' => 1,
                'brand_product' => 'daniel wellington'
            ])
            ->orderBy('price_product','DESC')
            ->paginate('6');
        return $result;
    }
    public function getDanielWellingtonSteel()
    {
        $result = DB::table('products')
            ->join('categories', 'category_id', '=', 'id_category')
            ->where([
                'category_id' => 1,
                'brand_product' => 'daniel wellington',
                'bracelet' => 'steel'
            ])
            ->paginate(6);
        return $result;
    }
    public function getDanielWellingtonLeather()
    {
        $result = DB::table('products')
            ->join('categories', 'category_id', '=', 'id_category')
            ->where([
                'category_id' => 1,
                'brand_product' => 'daniel wellington',
                'bracelet' => 'leather'])
            ->paginate(6);
        return $result;
    }
    public function getAllWomenRolex()
    {
        $result = DB::table('products')->join('categories', 'category_id', '=', 'id_category')->where(['category_id' => 1, 'brand_product' => 'rolex'])->paginate(6);
        return $result;
    }
    public function getOmega()
    {
        $result = DB::table('products')
            ->where('brand_product', '=', 'omega')
            ->paginate(5);
        return $result;
    }
    public function getRolex()
    {
        $result = DB::table('products')
            ->where('brand_product', '=', 'rolex')
            ->paginate(5);
        return $result;
    }
    public function getAllWomenRolexASC()
    {
        $result = DB::table('products')
            ->where([
                'category_id' => 1,
                'brand_product' => 'rolex',
            ])
            ->orderBy('price_product','ASC')
            ->paginate('6');
        return $result;
    }
    public function getAllWomenRolexDESC()
    {
        $result = DB::table('products')
            ->where([
                'category_id' => 1,
                'brand_product' => 'rolex'
            ])
            ->orderBy('price_product','DESC')
            ->paginate('6');
        return $result;
    }
    public function getWomenRolexSteel()
    {
        $result = DB::table('products')->join('categories', 'category_id', '=', 'id_category')->where(['category_id' => 1, 'brand_product' => 'rolex', 'bracelet' => 'steel'])->paginate(6);
        return $result;
    }
    public function getAllWomenOmega()
    {
        $result = DB::table('products')->join('categories', 'category_id', '=', 'id_category')->where(['category_id' => 1, 'brand_product' => 'omega'])->paginate(6);
        return $result;
    }
    public function getAllWomenOmegaASC()
    {
        $result = DB::table('products')
            ->where([
                'category_id' => 1,
                'brand_product' => 'omega'
            ])
            ->orderBy('price_product','ASC')
            ->paginate('6');
        return $result;
    }
    public function getAllWomenOmegaDESC()
    {
        $result = DB::table('products')
            ->where([
                'category_id' => 1,
                'brand_product' => 'omega'
            ])
            ->orderBy('price_product','DESC')
            ->paginate('6');
        return $result;
    }
    public function getWomenOmegaLeather()
    {
        $result = DB::table('products')
            ->join('categories', 'category_id', '=', 'id_category')
            ->where([
                'category_id' => 1,
                'brand_product' => 'omega',
                'bracelet' => 'leather'])
            ->paginate(6);
        return $result;
    }
    public function getWomenOmegaSteel()
    {
        $result = DB::table('products')
            ->join('categories', 'category_id', '=', 'id_category')
            ->where([
                'category_id' => 1,
                'brand_product' => 'omega',
                'bracelet' => 'steel'
            ])
            ->paginate(6);
        return $result;
    }
    public function getWomenOmegaGold()
    {
        $result = DB::table('products')
            ->join('categories', 'category_id', '=', 'id_category')
            ->where([
                'category_id' => 1,
                'brand_product' => 'omega',
                'bracelet' => 'gold'
            ])
            ->paginate(6);
        return $result;
    }
    public function getAllMenWatches()
    {
        $result = DB::table('products')
            ->join('categories', 'category_id', '=', 'id_category')->where('category_id', '=', 2)->paginate(6);
        return $result;
    }
    public function getAllMenWatchesASC()
    {
        $result = DB::table('products')
            ->where('category_id','=', 2)
            ->orderBy('price_product','ASC')
            ->paginate('6');
        return $result;
    }
    public function getAllMenWatchesDESC()
    {
        $result = DB::table('products')
            ->where('category_id','=', 2)
            ->orderBy('price_product','DESC')
            ->paginate('6');
        return $result;
    }
    public function getAllMenOmega()
    {
        $result = DB::table('products')->join('categories', 'category_id', '=', 'id_category')->where(['category_id' => 2, 'brand_product' => 'omega'])->paginate(6);
        return $result;
    }
    public function getAllMenOmegaASC()
    {
        $result = DB::table('products')
            ->where([
                'category_id' => 2,
                'brand_product' => 'omega'
            ])
            ->orderBy('price_product','ASC')
            ->paginate('6');
        return $result;
    }
    public function getAllMenOmegaDESC()
    {
        $result = DB::table('products')
            ->where([
                'category_id' => 2,
                'brand_product' => 'omega'
            ])
            ->orderBy('price_product','DESC')
            ->paginate('6');
        return $result;
    }
    public function getMenOmegaRubber()
    {
        $result = DB::table('products')
            ->join('categories', 'category_id','=','id_category')
            ->where([
                'category_id' => 2,
                'brand_product' => 'omega',
                'bracelet' => 'rubber'
            ])
            ->paginate(6);
        return $result;
    }
    public function getMenOmegaLeather()
    {
        $result = DB::table('products')
            ->join('categories', 'category_id','=','id_category')
            ->where([
                'category_id' => 2,
                'brand_product' => 'omega',
                'bracelet' => 'leather'
            ])
            ->paginate(6);
        return $result;
    }
    public function getMenOmegaSteel()
    {
        $result = DB::table('products')
            ->join('categories', 'category_id','=','id_category')
            ->where([
                'category_id' => 2,
                'brand_product' => 'omega',
                'bracelet' => 'steel'
            ])
            ->paginate(6);
        return $result;
    }
    public function getMenOmegaGold()
    {
        $result = DB::table('products')
            ->join('categories', 'category_id','=','id_category')
            ->where([
                'category_id' => 2,
                'brand_product' => 'omega',
                'bracelet' => 'gold'
            ])
            ->paginate(6);
        return $result;
    }
    public function getMenOmegaTitanium()
    {
        $result = DB::table('products')
            ->join('categories', 'category_id','=','id_category')
            ->where([
                'category_id' => 2,
                'brand_product' => 'omega',
                'bracelet' => 'titanium'
            ])
            ->paginate(6);
        return $result;
    }
    public function getAllMenRolex()
    {
        $result = DB::table('products')
            ->join('categories', 'category_id','=','id_category')
            ->where([
                'category_id' => 2,
                'brand_product' => 'rolex'
            ])
            ->paginate(6);
        return $result;
    }
    public function getAllMenRolexASC()
    {
        $result = DB::table('products')
            ->where([
                'category_id' => 2,
                'brand_product' => 'rolex'
            ])
            ->orderBy('price_product','ASC')
            ->paginate('6');
        return $result;
    }
    public function getAllMenRolexDESC()
    {
        $result = DB::table('products')
            ->where([
                'category_id' => 2,
                'brand_product' => 'rolex'
            ])
            ->orderBy('price_product','DESC')
            ->paginate('6');
        return $result;
    }
    public function getMenRolexLeather()
    {
        $result = DB::table('products')
            ->join('categories', 'category_id','=','id_category')
            ->where([
                'category_id' => 2,
                'brand_product' => 'rolex',
                'bracelet' => 'leather'
            ])
            ->paginate(6);
        return $result;
    }
    public function getMenRolexGold()
    {
        $result = DB::table('products')
            ->join('categories', 'category_id','=','id_category')
            ->where([
                'category_id' => 2,
                'brand_product' => 'rolex',
                'bracelet' => 'gold'
            ])
            ->paginate(6);
        return $result;
    }
    public function getMenRolexOysterFlex()
    {
        $result = DB::table('products')
            ->join('categories', 'category_id','=','id_category')
            ->where([
                'category_id' => 2,
                'brand_product' => 'rolex',
                'bracelet' => 'oysterflex'
            ])
            ->paginate(6);
        return $result;
    }
    public function getMenRolexOsyterSteel()
    {
        $result = DB::table('products')
            ->join('categories', 'category_id','=','id_category')
            ->where([
                'category_id' => 2,
                'brand_product' => 'rolex',
                'bracelet' => 'oystersteel'
            ])
            ->paginate(6);
        return $result;
    }
    public function getMenRolexSteel()
    {
        $result = DB::table('products')
            ->join('categories', 'category_id','=','id_category')
            ->where([
                'category_id' => 2,
                'brand_product' => 'rolex',
                'bracelet' => 'steel'
            ])
            ->paginate(6);
        return $result;
    }
    public function getUlysseNardin()
    {
        $result = DB::table('products')
            ->join('categories', 'category_id','=','id_category')
            ->where([
                'category_id' => 2,
                'brand_product' => 'ulysse nardin'
            ])
            ->paginate(6);
        return $result;
    }
    public function getUlysseNardinASC()
    {
        $result = DB::table('products')
            ->where([
                'category_id' => 2,
                'brand_product' => 'ulysse nardin'
            ])
            ->orderBy('price_product','ASC')
            ->paginate('6');
        return $result;
    }
    public function getUlysseNardinDESC()
    {
        $result = DB::table('products')
            ->where([
                'category_id' => 2,
                'brand_product' => 'ulysse nardin'
            ])
            ->orderBy('price_product','DESC')
            ->paginate('6');
        return $result;
    }
    public function getUlysseNardinLeather()
    {
        $result = DB::table('products')
            ->join('categories', 'category_id','=','id_category')
            ->where([
                'category_id' => 2,
                'brand_product' => 'ulysse nardin',
                'bracelet' => 'leather'
            ])
            ->paginate(6);
        return $result;
    }
    public function getUlysseNardinRubber()
    {
        $result = DB::table('products')
            ->join('categories', 'category_id','=','id_category')
            ->where([
                'category_id' => 2,
                'brand_product' => 'ulysse nardin',
                'bracelet' => 'rubber'
            ])
            ->paginate(6);
        return $result;
    }
}