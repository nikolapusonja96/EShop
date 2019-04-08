<?php
/**
 * Created by PhpStorm.
 * User: PCWIN7
 * Date: 06-Mar-19
 * Time: 11:18 AM
 */

namespace App\Http\Controllers;
use App\Models\ModelMenu;
use App\Models\ModelCategory;
use App\Models\ModelProducts;
use App\Models\ModelUser;
use App\Models\ModelAdmin;
use App\Models\ModelAdminMenu;
abstract class BaseController
{
    protected $user;
    protected $admin;
    protected $data = [];
    protected $product;

    public function __construct()
    {
        $category = new ModelCategory();
        $this->data['categories'] = $category->getAllCategories();

        $menu = new ModelMenu();
        $this->data['menu_podaci'] = $menu->show_menu();

        $footer_menu = new ModelCategory();
        $this->data['menu_footer_watches'] = $footer_menu->footer_categories();

        $this->user = new ModelUser();
        $this->admin = new ModelAdmin();
        $this->product = new ModelProducts();

        $menu = new ModelAdminMenu();
        $this->data['menus'] = $menu->getAdminMenu();
    }
}