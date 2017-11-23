<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/* Call Models*/
use App\Charge;

use App\Http\Traits\TaxTrait;
use Datatables;

class HomeController extends GlobalController
{
	
	use TaxTrait;
	
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       $this->middleware('auth', ['except' => ['index', 'calculate', 'transaction_list' ,'getTransactions']]);
    }

    /**
     * Display the specified resource.
     *     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
      
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */ 
     
    public function calculate(Request $request)
    {
        request()->validate([
            'amount' => 'required',
        ]);

        $amount = $request->amount;        
        $service_tax = $this->serviceTax($amount);
        $vat = $this->vat($service_tax);
        $abc_company_charge = $this->abc_company_charge($service_tax, $vat);         
        $resource_amount = $this->resource_amount($amount, $abc_company_charge);  
                
        $paid_amount = $abc_company_charge + $resource_amount;
                
        try { 
			$charge = new Charge;
			$charge->amount = $amount;
			$charge->service_tax = $service_tax;
			$charge->vat = $vat;
			$charge->ABC_company = $abc_company_charge;
			$charge->resource_amount = $resource_amount;
			$charge->save();
			return redirect()->back()->with('status', 'Record added Successfully!');
		} catch (Exception $e) { 
			// if an exception happened in the try block above			
			return $e->getMessage();
		 
		}
    }
    
    /**
     * Displays transaction_list front end view
     *
     * @return \Illuminate\View\View
     */
    public function transaction_list(Request $request)
    {
		        
		return view('transaction_list');
	}


    /**
     * Process Transactions ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getTransactions()
    {       
        return \DataTables::of(Charge::query())->make(true);
    }
    
    
}
