@extends('master')
@section('content')
  <h3>Dodaj nowy status zgłoszenia:</h3>
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="card">
            <div class="panel-body">
              @include('forms.form_errors')
            <!-- Formularz -->
              {!! Form::open(['url'=>'status','class'=>'form-forizontal']) !!}

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
                  <div  class="col-md-4 control-label">
                    {!! Form::label('color','Kolor:') !!}
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6">
                    {!! Form::color('color', '#ffffff', ['class'=>'form-control color']) !!}
                  </div>
                </div>

                <div class="form-group">
                  <div  class="col-md-4 control-label">
                    {!! Form::label('order','Kolejność:') !!}
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6">
                    {!! Form::text('order', $count+1, ['class'=>'form-control']) !!}
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-md-6 col-md-offset-4">
                    {!! Form::submit('Dodaj nowy') !!}
                  </div>
                </div>

            	{!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@stop
