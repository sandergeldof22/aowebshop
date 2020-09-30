<?php

namespace App;

class Cart {

	public $items = null;
	public $totalQuantity = 0;
	public $totalPrice = 0;

	public function __construct($oldCart){
		if ($oldCart) {
			$this->items = $oldCart->items;
			$this->totalQuantity = $oldCart->totalQuantity;
			$this->totalPrice = $oldCart->totalPrice;
		}
	}

	public function add($item, $id, $quantity) {

		$storedItem = ['item' => $item, 'quantity' => $quantity, 'price' => $item->price, 'id' => $item->id];

		$storedItem['quantity'];
		$storedItem['price'] = $item->price * $storedItem['quantity'];
		$this->items[$id] = $storedItem;
		$this->totalQuantity++;
		$this->totalPrice += $storedItem['price'];      

        session()->put('cart', $this);


	}

	public function updateItem($item, $id, $quantity) {

    	$this->items[$id]['quantity'] = $quantity;
    	$this->items[$id]['price'] = $quantity * $item->price;

    	if ($this->items[$id]['quantity'] == 0) {
    		unset($this->items[$id]);
            $this->totalQuantity--;
    	}    	

    	$this->totalPrice = 0;
    		foreach($this->items as $item) {
    			$this->totalPrice += $item['price'];    			
    		}

        session()->put('Oldcart', $this);
    }

    public function deleteItem($item, $id){
    	if ($this->items[$id]['id'] == $id){
    		unset($this->items[$id]);
            $this->totalQuantity--;

    		$this->totalPrice = 0;
    			foreach($this->items as $item) {
    				$this->totalPrice += $item['price'];    			
    			}    		
    	}
    }

}
