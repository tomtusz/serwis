@extends('master')
@section('content')
  <h3>Nowy klijent:</h3>
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="card">
            <div class="panel-body">
              @include('forms.form_errors')
            <!-- Formularz -->
              {!! Form::open(['url'=>'customer','class'=>'form-forizontal']) !!}

                @include('forms.form_customer')


            	{!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@stop
