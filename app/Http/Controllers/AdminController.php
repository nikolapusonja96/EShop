<?php
/**
 * Created by PhpStorm.
 * User: PCWIN7
 * Date: 12-Mar-19
 * Time: 07:34 AM
 */

namespace App\Http\Controllers;
use App\Models\ModelUserActivities;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\ModelSlider;
use App\Models\ModelOrders;
class AdminController extends BaseController
{

    public function getIndex()
    {
        return view('pages.admin.admin',$this->data);
    }

    //Admin insert
    public function showInsertProductForm()
    {
        return view('pages.admin.insertProduct',$this->data);
    }

    public function insertProduct(Request $request)
    {
        $name = $request->input('productName');
        $price = $request->input('productPrice');
        $brand = $request->input('productBrand');
        $bracelet = $request->input('productBracelet');
        $braceletColor = $request->input('productBraceletColor');
        $description = $request->input('descImage');
        $category = $request->input('productCategory');

        $image = $request->file('productImage');//instanca fajla
        $tmp_path = $image->getPathName();
        $extension = $image->getClientOriginalExtension();
        $file_name = time() . '.' .$extension;
        $path = './img/'.$file_name;


        if($image->isValid()) {
            File::move($tmp_path, $path);
            $this->admin->insert($name, $price, $path, $description, $brand, $bracelet, $braceletColor, $category);
            return redirect()->back()->with('message', 'Product has been added succesfully!');
        }
        else{
            return redirect()->back()->with('message', 'Error!');
        }
    }
    public function showInsertSliderImgForm()
    {
        return view('pages.admin.insertSlider', $this->data);
    }
    public function insertSlider(Request $request)
    {

        $description = $request->input('descriptionSliderImage');
        $slider = $request->file('sliderImage');//instanca fajla
        $tmp_path = $slider->getPathName();
        $extension = $slider->getClientOriginalExtension();
        $file_name = time() . '.' .$extension;
        $path = './img/'.$file_name;
        if($slider->isValid()) {

            File::move($tmp_path, $path);
            $this->admin->insertSlider($path, $description);

            return redirect()->back()->with('message', 'Image has been added succesfully!');
        }
        else{
            return redirect()->back()->with('message', 'Error!');
        }
    }

    //Admin update
    public function showUpdateProductForm()
    {

        $this->data['productsUpdateShow'] = $this->product->getAllProductsAdmin();
        return view('pages.admin.updateProducts', $this->data);
    }
    public function showFinalUpdateProductForm($id)
    {

        $this->data['first'] = $this->product->getSingleUpdateProduct($id);
        return view('pages.admin.updateProductFinalForm', $this->data);
    }
    public function updateProduct(Request $request, $id)
    {
        $newPrice = $request->input('newPrice');
        $image = $request->file('newImage');
        $tmp_path = $image->getPathName();
        $extension = $image->getClientOriginalExtension();
        $file_name = time() . '.' .$extension;
        $path = './img/'.$file_name;
        if($image->isValid()){
            File::move($tmp_path, $path);
            $this->admin->updateProduct($newPrice, $path, $id);
            return redirect('/admin/update-products')->with('message', 'Product has been updated succesfully!');
        }else{
           return redirect()->back()->with('message', 'Error!');
       }
    }

    //Admin delete
    public function showDeleteProductForm()
    {

        $this->data['productsShow'] = $this->product->getAllProductsAdmin();
        return view('pages.admin.deleteProduct', $this->data);
    }
    public function deleteProduct($id)
    {
        $this->admin->deleteProduct($id);
        return redirect()->back()->with('message','Product has been deleted successfully!');
    }
    public function showDeleteSliderImgForm()
    {
        $slide = new ModelSlider();
        $this->data['slider'] = $slide->show_slider();
        return view('pages.admin.deleteSlider', $this->data);
    }
    public function deleteSliderImg($id)
    {
        $this->admin->deleteSlider($id);
        return redirect()->back()->with('message', 'Image has been deleted succesfully!');
    }

    //Admin-User-Activities
    public function getUserActivities()
    {
        $activities = new ModelUserActivities();
        $this->data['activities'] = $activities->getAllUserActivities();

        return view('pages.admin.adminShowUserActivities', $this->data);
    }

    //Admin-User-Orders
    public function getUsersOrders()
    {
        $orders1 = new ModelOrders();

        $orders = $orders1->getAdminUsersOrders();

        $orders->transform(function($order){
            $order->cart = unserialize($order->cart);
            return $order;
        });

        return view('pages.admin.AdminUsersOrders', $this->data, ['orders'=> $orders ]);
    }

}