<?php
/**
 * Created by PhpStorm.
 * User: PCWIN7
 * Date: 12-Mar-19
 * Time: 08:38 AM
 */

namespace App\Models;
use Illuminate\Support\Facades\DB;

class ModelAdminMenu
{

    public function getAdminMenu()
    {
        $menus = DB::table('adminmenu')
            ->get();
        foreach ($menus as $menu)
        {
            $menu->submenus = DB::table('adminmenu')
                ->where('parent_id','=', $menu->id_menu)
                ->get();
        }
        return $menus;
    }
}