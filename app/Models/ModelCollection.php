<?php
/**
 * Created by PhpStorm.
 * User: PCWIN7
 * Date: 06-Mar-19
 * Time: 12:48 AM
 */

namespace App\Models;
use Illuminate\Support\Facades\DB;

class ModelCollection
{
    public function getCollection()
    {
        $result = DB::table('collection')
            ->get();
        return $result;
    }
}