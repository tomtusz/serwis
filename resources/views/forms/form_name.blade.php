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
    {!! Form::submit('Dodaj nowy') !!}
  </div>
</div>
