<?php
/**
 * Created by PhpStorm.
 * User: PCWIN7
 * Date: 11-Mar-19
 * Time: 03:54 AM
 */

namespace App\Models;


class ModelCart
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;


    public function __construct($oldCart)
    {
        if($oldCart) {
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function add($item, $id){
        $storedItem = ['qty' => 0, 'price' => $item->price_product, 'item' => $item];
        if($this->items){
            if(array_key_exists($id, $this->items)){
                $storedItem = $this->items[$id];
            }
        }
        $storedItem['qty']++;
        $storedItem['price'] = $item->price_product * $storedItem['qty'];
        $this->items[$id] = $storedItem;
        $this->totalQty++;
        $this->totalPrice += $item->price_product;
    }

    public function reduceByOne($id)
    {
        $this->items[$id]['qty']--;
        $this->items[$id]['price'] -= $this->items[$id]['item']->price_product;
        $this->totalQty--;
        $this->totalPrice -= $this->items[$id]['item']->price_product;

        if($this->items[$id]['qty'] <= 0)
        {
            unset($this->items[$id]);
        }
    }
    public function removeAll($id)
    {
        $this->totalQty -= $this->items[$id]['qty'];
        $this->totalPrice -= $this->items[$id]['item']->price_product;
        unset($this->items[$id]);
    }
}