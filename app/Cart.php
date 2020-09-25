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
		$storedItem = ['item' => $item, 'quantity' => $quantity, 'price' => $item->prijs, 'id' => $item->id];

		$storedItem['quantity'];
		$storedItem['price'] = $item->prijs * $storedItem['quantity'];
		$this->items[$id] = $storedItem;
		$this->totalQuantity++;
		$this->totalPrice += $storedItem['price'];
	}

	public function updateItem($item, $id, $quantity) {
    	$this->items[$id]['quantity'] = $quantity;
    	$this->items[$id]['price'] = $quantity * $item->prijs;

    	if ($this->items[$id]['quantity'] == 0) {
    		unset($this->items[$id]);
    	}    	

    	$this->totalQuantity = 0;
    	$this->totalPrice = 0;
    		foreach($this->items as $item) {
    			$this->totalQuantity += $item['quantity'];
    			$this->totalPrice += $item['price'];    			
    		}
    }

    public function deleteItem($item, $id){
    	if ($this->items[$id]['id'] == $id){
    		unset($this->items[$id]);

    		$this->totalQuantity = 0;
    		$this->totalPrice = 0;
    			foreach($this->items as $item) {
    				$this->totalQuantity += $item['quantity'];
    				$this->totalPrice += $item['price'];    			
    			}    		
    	}
    }
}
