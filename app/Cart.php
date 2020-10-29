<?php

namespace App;
use Session;

use Illuminate\Database\Eloquent\Model;

class Cart {

	public $items = null;
	public $totalQuantity = 0;
	public $totalPrice = 0;

	public function __construct(){

		if (Session::has('cart')) {
            $oldCart = Session::get('cart');
			$this->items = $oldCart->items;
			$this->totalQuantity = $oldCart->totalQuantity;
			$this->totalPrice = $oldCart->totalPrice;
		}  
	}
    //totalQuantity is het aantal verschillende producten, Niet hoeveelheid.

    /*
    *Functie stopt alle meegegeven variabelen in storedItem.
    *hij berekent de totale prijs. increment de totale Quantiteit en laat de sessie dit opslaan in de Cart.
    *als het product al in de cart zit, verhoogt hij de totale prijs en past hij het huidige product aan in quantiteit en prijs.
    */
	public function add($item, $id, $quantity) {
        //'id !' 
		$storedItem = ['item' => $item, 'quantity' => $quantity, 'price' => $item->price, 'id' => $item->id];

        if (isset($this->items[$id]['id']) == false) {
            $storedItem['quantity'];
            $storedItem['price'] = $item->price * $storedItem['quantity'];
            $this->items[$id] = $storedItem;
            $this->totalQuantity++;
            $this->totalPrice += $storedItem['price']; 
        } else {
            $extraPrice = $storedItem['quantity'] * $storedItem['price'];
            $storedItem['quantity'] = $this->items[$id]['quantity'] + $storedItem['quantity'];                
            $storedItem['price'] = $item->price * $storedItem['quantity'];
            $this->totalPrice = $this->totalPrice + $extraPrice;
            $this->items[$id] = $storedItem;
       
        }         
        session()->put('cart', $this);
	}
    /*
    *Functie pakt alle meegegeven gegevens en verandert de huidige gegevens hiermee.
    *Mocht de quantiteit naar 0 gezet worden. Haal hem dan uit de cart en verlaag de totale quantiteit.
    *Berekent de totale prijs opnieuw en slaat dit op in de cart.
    *
    */
	public function update($item, $id, $quantity) {
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

            session()->put('cart', $this);  

    }


    /*
    *Functie pakt het ID van het product dat verwijdert moet worden en haalt alle items met dat id uit de cart.
    *Verlaagt daarna het totaleQuantiteit.
    *Hierna berekent hij opnieuw de prijs van alle producten nog aanwezig in de Cart.
    *Daarna slaat de session dit op in de cart.
    */
    public function delete($item, $id){
    	if ($this->items[$id]['id'] == $id){
    		unset($this->items[$id]);
            $this->totalQuantity--;

    		$this->totalPrice = 0;
    			foreach($this->items as $item) {
    				$this->totalPrice += $item['price'];    			
    			}

        session()->put('cart', $this);

    	}
    }

    

}
