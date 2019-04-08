<?php
/**
 * Created by PhpStorm.
 * User: PCWIN7
 * Date: 05-Mar-19
 * Time: 01:20 AM
 */

namespace App\Models;
use Illuminate\Support\Facades\DB;

class ModelMenu
{
    public function show_menu()
    {
        $result = DB::table('menu')
            ->get();
        return $result;
    }
}