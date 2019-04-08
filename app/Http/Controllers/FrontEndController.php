<?php
/**
 * Created by PhpStorm.
 * User: PCWIN7
 * Date: 04-Mar-19
 * Time: 04:04 AM
 */

namespace App\Http\Controllers;
use App\Models\ModelSlider;
use App\Models\ModelCollection;


class FrontEndController extends BaseController
{


    public function front_show()
    {
        $slider = new ModelSlider();
        $this->data['podaci'] = $slider->show_slider();

        $collection = new ModelCollection();
        $this->data['collection'] = $collection->getCollection();

        $this->data['products'] = $this->product->get_newest_Product();
        return view('pages.user.index',$this->data);
    }


    public function show_single_product($id)
    {

        $this->data['single_product'] = $this->product->getSingleProduct($id);

        return view("pages.user.product",$this->data);
    }
    public function  showAllProducts()
    {

        $this->data['all_products'] = $this->product->getAllProducts();
        return view('pages.user.allProducts', $this->data);
    }

    public function showFAQ()
    {
        return view('pages.user.faq', $this->data);
    }
    public function showAuthor()
    {
        return view('pages.user.author', $this->data);
    }
    public function showAboutUs()
    {
        return view('pages.user.about_us', $this->data);
    }
    //filters
    public function showMenWatches()
    {
        $this->data['mens'] = $this->product->getAllMenWatches();

        return view('pages.user.menProducts', $this->data);
    }
    public function showAllRolex()
    {
    $this->data['Allrolex'] = $this->product->getRolex();
    return view('pages.user.rolex', $this->data);
    }
    public function showAllOmega()
    {
        $this->data['Allomega'] = $this->product->getOmega();
        return view('pages.user.omega', $this->data);
    }
    public function showMenOmega()
    {
        $this->data['men_omega'] = $this->product->getAllMenOmega();

        return view('pages.user.menOmega', $this->data);
    }
    public function showMenOmegaRubber()
    {
        $this->data['men_omega_rubber'] = $this->product->getMenOmegaRubber();
        return view('pages.user.menOmegaRubber', $this->data);
    }
    public function showMenOmegaLeather()
    {
        $this->data['men_omega_leather'] = $this->product->getMenOmegaLeather();
        return view('pages.user.menOmegaLeather', $this->data);
    }
    public function showMenOmegaGold()
    {
        $this->data['men_omega_gold'] = $this->product->getMenOmegaGold();
        return view('pages.user.menOmegaGold', $this->data);
    }
    public function showMenOmegaTitanium()
    {
        $this->data['men_omega_titanium'] = $this->product->getMenOmegaTitanium();
        return view('pages.user.menOmegaTitanium', $this->data);
    }
    public function showMenOmegaSteel()
    {
        $this->data['men_omega_steel'] = $this->product->getMenOmegaSteel();
        return view('pages.user.menOmegaSteel', $this->data);
    }
    public function showUlysseNardin()
    {
        $this->data['ulysse_nardin'] = $this->product->getUlysseNardin();

        return view('pages.user.UlysseNardin', $this->data);
    }
    public function showUlysseNardinRubber()
    {
        $this->data['ulysse_nardin_rubber'] = $this->product->getUlysseNardinRubber();

        return view('pages.user.UlysseNardinRubber', $this->data);
    }
    public function showUlysseNardinLeather()
    {
        $this->data['ulysse_nardin_leather'] = $this->product->getUlysseNardinLeather();

        return view('pages.user.UlysseNardinLeather', $this->data);
    }
    public function showMenRolex()
    {
        $this->data['men_rolex'] = $this->product->getAllMenRolex();

        return view('pages.user.menRolex', $this->data);
    }
    public function showMenRolexOysterSteel()
    {
        $this->data['men_rolex_oystersteel'] = $this->product->getMenRolexOsyterSteel();

        return view('pages.user.menRolexOysterSteel', $this->data);
    }
    public function showMenRolexSteel()
    {
        $this->data['men_rolex_steel'] = $this->product->getMenRolexSteel();

        return view('pages.user.menRolexSteel', $this->data);
    }
    public function showMenRolexOysterFlex()
    {
        $this->data['men_rolex_oysterflex'] = $this->product->getMenRolexOysterFlex();

        return view('pages.user.menRolexOysterFlex', $this->data);
    }
    public function showMenRolexLeather()
    {
        $this->data['men_rolex_leather'] = $this->product->getMenRolexLeather();

        return view('pages.user.menRolexLeather', $this->data);
    }
    public function showMenRolexGold()
    {
        $this->data['men_rolex_gold'] = $this->product->getMenRolexGold();

        return view('pages.user.menRolexGold', $this->data);
    }
    public function showWomenWatches()
    {
        $this->data['womens'] = $this->product->getAllWomenWatches();

        return view('pages.user.womenProducts', $this->data);

    }
    public function showWomenOmega()
    {
        $this->data['women_omega'] = $this->product->getAllWomenOmega();

        return view('pages.user.womenOmega', $this->data);
    }
    public function showWomenOmegaGold()
    {
        $this->data['women_omega_gold'] = $this->product->getWomenOmegaGold();

        return view('pages.user.womenOmegaGold', $this->data);
    }
    public function showWomenOmegaSteel()
    {
        $this->data['women_omega_steel'] = $this->product->getWomenOmegaSteel();

        return view('pages.user.womenOmegaSteel', $this->data);
    }
    public function showWomenOmegaLeather()
    {
        $this->data['women_omega_leather'] = $this->product->getWomenOmegaLeather();

        return view('pages.user.womenOmegaLeather', $this->data);
    }
    public function showWomenRolex()
    {
        $this->data['women_rolex'] = $this->product->getAllWomenRolex();

        return view('pages.user.womenRolex', $this->data);
    }
    public function showWomenRolexSteel()
    {
        $this->data['women_rolex_steel'] = $this->product->getWomenRolexSteel();

        return view('pages.user.womenRolexSteel', $this->data);
    }
    public function showDanielWellington()
    {
        $this->data['daniel_wellington'] = $this->product->getAllDanielWellington();

        return view('pages.user.womenDanielWellington', $this->data);
    }
    public function showDanielWellingtonLeather()
    {
        $this->data['daniel_wellington_leather'] = $this->product->getDanielWellingtonLeather();

        return view('pages.user.womenDanielWellingtonLeather', $this->data);
    }
    public function showDanielWellingtonSteel()
    {
        $this->data['daniel_wellington_steel'] = $this->product->getDanielWellingtonSteel();

        return view('pages.user.womenDanielWellingtonSteel', $this->data);
    }
    //sort
    public function showDanielWellingtonASC()
    {
        $this->data['DW_ASC'] = $this->product->getAllDanielWellingtonASC();

        return view('pages.user.womenProductsDanielWellingtonASC', $this->data);
    }
    public function showDanielWellingtonDESC()
    {
        $this->data['DW_DESC'] = $this->product->getAllDanielWellingtonDESC();

        return view('pages.user.womenProductsDanielWellingtonDESC', $this->data);
    }
    public function showWomenRolexASC()
    {
        $this->data['women_rolex_ASC'] = $this->product->getAllWomenRolexASC();

        return view('pages.user.womenProductsRolexASC', $this->data);
    }
    public function showWomenRolexDESC()
    {
        $this->data['women_rolex_DESC'] = $this->product->getAllWomenRolexDESC();

        return view('pages.user.womenProductsRolexDESC', $this->data);
    }
    public function showWomenOmegaASC()
    {
        $this->data['women_omega_ASC'] = $this->product->getAllWomenOmegaASC();

        return view('pages.user.womenProductsOmegaASC', $this->data);
    }
    public function showWomenOmegaDESC()
    {
        $this->data['women_omega_DESC'] = $this->product->getAllWomenOmegaDESC();

        return view('pages.user.womenProductsOmegaDESC', $this->data);
    }
    public function showMenOmegaASC()
    {
        $this->data['men_omega_ASC'] = $this->product->getAllMenOmegaASC();

        return view('pages.user.menProductsOmegaASC', $this->data);
    }
    public function showMenOmegaDESC()
    {
        $this->data['men_omega_DESC'] = $this->product->getAllMenOmegaDESC();

        return view('pages.user.menProductsOmegaDESC', $this->data);
    }
    public function showMenRolexASC()
    {
        $this->data['men_rolex_ASC'] = $this->product->getAllMenRolexASC();

        return view('pages.user.menProductsRolexASC', $this->data);
    }
    public function showMenRolexDESC()
    {
        $this->data['men_rolex_DESC'] = $this->product->getAllMenOmegaDESC();

        return view('pages.user.menProductsRolexDESC', $this->data);
    }
    public function showMenUlysseNardinASC()
    {
        $this->data['men_un_ASC'] = $this->product->getUlysseNardinASC();

        return view('pages.user.menProductsUlysseNardinASC', $this->data);
    }
    public function showMenUlysseNardinDESC()
    {
        $this->data['men_un_DESC'] = $this->product->getUlysseNardinDESC();

        return view('pages.user.menProductsUlysseNardinDESC', $this->data);
    }
    public function showMenWatchesASC()
    {
        $this->data['men_ASC'] = $this->product->getAllMenWatchesASC();

        return view('pages.user.menProductsASC', $this->data);
    }
    public function showMenWatchesDESC()
    {
        $this->data['men_DESC'] = $this->product->getAllMenWatchesDESC();

        return view('pages.user.menProductsDESC', $this->data);
    }
    public function showWomenWatchesASC()
    {
        $this->data['women_ASC'] = $this->product->getAllWomenWatchesASC();

        return view('pages.user.womenProductsASC', $this->data);
    }
    public function showWomenWatchesDESC()
    {
        $this->data['women_DESC'] = $this->product->getAllWomenWatchesDESC();

        return view('pages.user.womenProductsDESC', $this->data);
    }
    public function storeASC()
    {
        $this->data['all_ASC'] = $this->product->getAllProductsASC();

        return view('pages.user.allProductsASC', $this->data);
    }
    public function storeDESC()
    {
        $this->data['all_DESC'] = $this->product->getAllProductsDESC();

        return view('pages.user.allProductsDESC', $this->data);
    }
}