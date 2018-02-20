<div class="form-group">
  <div  class="col-md-4 control-label">
    {!! Form::label('name','Imię:') !!}
  </div>
</div>
<div class="form-group">
  <div class="col-md-6">
    {!! Form::text('name', null, ['class'=>'form-control']) !!}
  </div>
</div>

<div class="form-group">
  <div  class="col-md-4 control-label">
    {!! Form::label('surname','Nazwisko:') !!}
  </div>
</div>
<div class="form-group">
  <div class="col-md-6">
    {!! Form::text('surname', null, ['class'=>'form-control']) !!}
  </div>
</div>

<div class="form-group">
  <div  class="col-md-4 control-label">
    {!! Form::label('email','Aders e-mail:') !!}
  </div>
</div>
<div class="form-group">
  <div class="col-md-6">
    {!! Form::email('email', null, ['class'=>'form-control']) !!}
  </div>
</div>

<div class="form-group">
  <div  class="col-md-4 control-label">
    {!! Form::label('phone','Nr telefonu:') !!}
  </div>
</div>
<div class="form-group">
  <div class="col-md-6">
    {!! Form::text('phone', null, ['class'=>'form-control']) !!}
  </div>
</div>


<div class="form-group">
  <div class="col-md-6 col-md-offset-4">
    {!! Form::submit('Dodaj') !!}
  </div>
</div>
