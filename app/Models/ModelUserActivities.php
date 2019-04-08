<?php
/**
 * Created by PhpStorm.
 * User: PCWIN7
 * Date: 17-Mar-19
 * Time: 09:07 PM
 */

namespace App\Models;
use Illuminate\Support\Facades\DB;

class ModelUserActivities
{
    public function getAllUserActivities()
    {
        $result = DB::table('activities')
            ->paginate(20);
        return $result;
    }
}