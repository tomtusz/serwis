@extends('master')
@section('content')
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="card">
            <div class="panel-body">
              @include('forms.form_errors')
            <!-- Formularz -->
              {!! Form::model($order, ['method'=>'PATCH','class'=>'form-forizontal','action'=>['OrderController@update', $order->id]]) !!}
                @include('forms.form_order2')
            	{!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@stop
