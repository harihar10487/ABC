<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Charge extends Model {	
        
    protected $fillable = [
        'amount', 'service_tax', 'vat','ABC_company', 'resource_amount',
    ];
}
