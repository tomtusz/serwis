<div class="row">
  <div class="form-group">
    
    <div  class="col-md-4 control-label">
      {!! Form::label('type_id','Rodzaj sprzętu:') !!}
    </div>

    <div class="col-md-6">
      {!! Form::select('type_id', $types, null, ['placeholder' => 'Rodzaj sprzętu...','class'=>'form-control']) !!}
    </div>
  </div>
</div>
<div class="row">
  <div class="form-group">
    <div  class="col-md-4 control-label">
      {!! Form::label('brand_id','Producent:') !!}
    </div>

    <div class="col-md-6">
      {!! Form::select('brand_id', $brands, null, ['placeholder' => 'Producent...', 'class'=>'form-control']) !!}
    </div>
  </div>
</div>

<div class="row">
  <div class="form-group">
    <div  class="col-md-4 control-label">
      {!! Form::label('model','Model:') !!}
    </div>

    <div class="col-md-6">
      {!! Form::text('model', null, ['class'=>'form-control']) !!}
    </div>
  </div>
</div>

<div class="row">
  <div class="form-group">
    <div  class="col-md-4 control-label">
      {!! Form::label('sn','SN:') !!}
    </div>

    <div class="col-md-6">
      {!! Form::text('sn', null, ['class'=>'form-control']) !!}
    </div>
  </div>
</div>

<div class="row">
  <div class="form-group">
    <div  class="col-md-4 control-label">
      {!! Form::label('description','Opis usterki:') !!}
    </div>

    <div class="col-md-6">
      {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
    </div>
  </div>
</div>

<div class="row">
  <div class="form-group">
    <div  class="col-md-4 control-label">
      {!! Form::label('diagnosis','Diagnoza:') !!}
    </div>

    <div class="col-md-6">
      {!! Form::textarea('diagnosis', null, ['class'=>'form-control']) !!}
    </div>
  </div>
</div>

<div class="row">
  <div class="form-group">
    <div  class="col-md-4 control-label">
      {!! Form::label('readyOn','Planowany czas naprawy:') !!}
    </div>

    <div class="col-md-6">
      {!! Form::date('readyOn', \Carbon\Carbon::now()->addDays(14), ['class'=>'form-control']) !!}
    </div>
  </div>
</div>

<div class="row">
  <div class="form-group">
    <div  class="col-md-4 control-label">
      {!! Form::label('comment','Uwagi:') !!}
    </div>

    <div class="col-md-6">
      {!! Form::textarea('comment', null, ['class'=>'form-control']) !!}
    </div>
  </div>
</div>


<div class="row">
  <div class="form-group">
    <div class="col-md-6 col-md-offset-4">
      {!! Form::submit($buttonText, ['class'=>'btn btn-primary']) !!}
    </div>
  </div>
</div>
