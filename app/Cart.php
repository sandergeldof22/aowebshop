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

	public function add($item, $id) {
		$storedItem = ['item' => $item, 'quantity' => 0, 'price' => $item->prijs, 'id' => $item->id];
		if ($this->items) {
			if (array_key_exists($id, $this->items)) {
				$storedItem = $this->items[$id];
			}
		}
		$storedItem['quantity']++;
		$storedItem['price'] = $item->prijs * $storedItem['quantity'];
		$this->items[$id] = $storedItem;
		$this->totalQuantity++;
		$this->totalPrice += $item->prijs;
	}

	public function updateItem($item, $id, $quantity) {
    	$this->items[$id]['quantity'] = $quantity;
    	$this->items[$id]['price'] = $quantity * $item->prijs;

    	$this->totalQuantity = 0;
    	$this->totalPrice = 0;
    		foreach($this->items as $item) {
    			$this->totalQuantity += $item['quantity'];
    			$this->totalPrice += $item['price'];
    		}
    }

}
