@extends('master')
@section('content')
  <h3>Nowy producnt:</h3>
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="card">
            <div class="panel-body">
              @include('forms.form_errors')
            <!-- Formularz -->
              {!! Form::open(['url'=>'brand','class'=>'form-forizontal']) !!}

                @include('forms.form_name')


            	{!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@stop
