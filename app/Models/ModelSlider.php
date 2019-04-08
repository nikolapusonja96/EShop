<?php
/**
 * Created by PhpStorm.
 * User: PCWIN7
 * Date: 04-Mar-19
 * Time: 04:06 AM
 */

namespace App\Models;
use Illuminate\Support\Facades\DB;

class ModelSlider
{
    public function show_slider(){
        $result = DB::table('slider')
            ->get();
        return $result;
    }



}