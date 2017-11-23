@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Service Tax and VAT Calculator</div>

                <div class="panel-body">
					@if (session('status'))
						<div class="alert alert-success">
							{{ session('status') }}  <a href="{{ route('transaction_list') }}">
                                    All transaction list
                                </a>
						</div>
					@endif
					
					{{ Form::open(['method' => 'POST','route'=>['calculate'], 'class' => 'form-horizontal' ]) }}
                        <div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }}">
                            <label for="amount" class="col-md-4 control-label">Amount of Service Provided*</label>

                            <div class="col-md-6">                                
                                {{ Form::number('amount',null,['id'=>'amount', 'class'=>'form-control', 'required' => 'required','placeholder'=>'Enter amount' , 'autofocus' => 'true']) }} 

                                @if ($errors->has('amount'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('amount') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                        

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                {{ Form::button('Submit',  array('type'=>'submit','class'=>'btn btn-primary', 'id'=>'submit')) }}                           
                                <a class="btn btn-link" href="{{ route('transaction_list') }}">
                                    All transaction list
                                </a>
                            </div>
                        </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>  

@endsection
