@extends('master')
@section('content')
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel-body">
        @include('forms.form_errors')
      <!-- Formularz -->
        {!! Form::open(['url'=>'order','class'=>'form-forizontal']) !!}
        

          @include('forms.form_order2',['buttonText'=>'Dodaj zgloszenie'])

      	{!! Form::close() !!}
      </div>

    </div>
  </div>
@stop
