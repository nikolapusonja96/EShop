<?php
/**
 * Created by PhpStorm.
 * User: PCWIN7
 * Date: 05-Mar-19
 * Time: 03:16 AM
 */

namespace App\Models;
use Illuminate\Support\Facades\DB;

class ModelCategory
{
    public function getAllCategories()
    {
        $categories = DB::table('categories')
            ->get();
        foreach ($categories as $category)
        {
            $category->subcategories = DB::table('categories')
                ->where('parent_id','=', $category->id_category)
                ->get();
        }
        return $categories;
    }

    public function footer_categories()
    {
        $result = DB::table('categories')
                ->where('parent_id','=',0)
                ->get();
        return $result;
    }
}