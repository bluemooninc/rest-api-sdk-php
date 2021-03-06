<?php 

namespace PayPal\Api;

/**
 * 
 */
class AmountDetails extends Resource {


	/**
	 * Setter for subtotal
	 * @param string $subtotal
	 */ 
	public function setSubtotal($subtotal) {
		$this->subtotal = $subtotal;
	}

	/**
	 * Getter for subtotal
	 * @return string
	 */ 
	public function getSubtotal() {
		return $this->subtotal;
	}

	/**
	 * Setter for tax
	 * @param string $tax
	 */ 
	public function setTax($tax) {
		$this->tax = $tax;
	}

	/**
	 * Getter for tax
	 * @return string
	 */ 
	public function getTax() {
		return $this->tax;
	}

	/**
	 * Setter for shipping
	 * @param string $shipping
	 */ 
	public function setShipping($shipping) {
		$this->shipping = $shipping;
	}

	/**
	 * Getter for shipping
	 * @return string
	 */ 
	public function getShipping() {
		return $this->shipping;
	}

	/**
	 * Setter for fee
	 * @param string $fee
	 */ 
	public function setFee($fee) {
		$this->fee = $fee;
	}

	/**
	 * Getter for fee
	 * @return string
	 */ 
	public function getFee() {
		return $this->fee;
	}


}