<?php
namespace App\Http\Traits;


trait TaxTrait {
	/**
	 * Calculate service tax.
	 *
	 * @return \Illuminate\Http\Response
	 */
    public function serviceTax($amount) {
		$service_tax_charge = 10;
		$service_tax = $amount * $service_tax_charge / 100;  
		return $service_tax; 
    }
    
    /**
	 * Calculate vat.
	 *
	 * @return \Illuminate\Http\Response
	 */ 
    public function vat($service_tax) {
		$vat_charge = 12;
        $vat = $service_tax * $vat_charge / 100; 
		return $vat; 
    }
    
    /**
	 * Calculate abc company charge.
	 *
	 * @return \Illuminate\Http\Response
	 */ 
    public function abc_company_charge($service_tax, $vat) {
		$abc_company_charge = $service_tax + $vat;
		return $abc_company_charge; 
    }
    
    /**
	 * Calculate resource amount.
	 *
	 * @return \Illuminate\Http\Response
	 */ 
    public function resource_amount($amount, $abc_company_charge) {
		$resource_amount = $amount - $abc_company_charge;
		return $resource_amount; 
    }
}
