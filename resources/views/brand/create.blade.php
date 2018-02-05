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

                <div class="form-group">
                  <div  class="col-md-4 control-label">
                    {!! Form::label('name','Nazwa:') !!}
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6">
                    {!! Form::text('name', null, ['class'=>'form-control']) !!}
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6 col-md-offset-4">
                    {!! Form::submit('Dodaj producenta') !!}
                  </div>
                </div>


            	{!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@stop
