@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Transaction list <a class="btn btn-link" href="{{ url('/') }}">
                                    Add new
                                </a></div>

                <div class="panel-body"> 			
					
					<table class="table table-bordered data" id="dataTable">
					<thead>
					<tr>
					  <th style="width: 10px">S.N</th>
					  <th>Amount</th>
					  <th>Service Tax</th>
					  <th>VAT</th>
					  <th>ABC company amount</th>
					  <th>Resource amount</th>	
					  <th>Created At</th>			  
					</tr>
					</thead>				
				  </table>				
                </div>
            </div>
        </div>
    </div>
</div>

<script>
$(function() {
    $('#dataTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('getTransactions') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'amount', name: 'amount' },
            { data: 'service_tax', name: 'service_tax' },
            { data: 'vat', name: 'vat' },
            { data: 'ABC_company', name: 'ABC_company' },
            { data: 'resource_amount', name: 'resource_amount' },            
            { data: 'created_at', name: 'created_at' }
        ]
    });
});
</script>
@endsection


