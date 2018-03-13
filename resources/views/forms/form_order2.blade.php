@include('order.modalCustomer')
<h3>Zgłoszenie Nr:
@if(! empty($order))
  {{$order->uniqid}} z dnia
    {!! Form::date('added_at', $order->added_at,  ['class'=>'']) !!}
@else
  {{$uniqid}} z dnia {!! Form::date('added_at', \Carbon\Carbon::now(), ['class'=>'']) !!}
@endif
<button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-floppy-save"></span></button>
<a href="{{ action('OrderController@index') }}" class="btn btn-info">
  <span class="glyphicon glyphicon-list"></span>
</a>
</h3>

<div class="row">
  <div class="col-md-4">
    {{ Form::hidden('uniqid', ( ! empty($order) ? $order->uniqid : $uniqid)) }}
    {{ Form::hidden('customer_id', ( ! empty($order) ? $order->customer_id : ''), ['id'=>'customerId'])}}
    <p>
      {!! Form::label('customer_id','Klient:') !!}</i>
      <input id="customerName" type="text" name="name" value="{{( ! empty($order->customer) ? $order->customer->name.' '.$order->customer->surname : 'brak zgody')}}" disabled>
      <button type="button" class="btn btn-xs btn-info" data-toggle="modal" data-target="#myModalCustomer">
        <span class="glyphicon glyphicon-user"></span>
      </button>
      <button type="button" class="btn btn-xs btn-info" onclick="customerNoData()">
        <span class="glyphicon glyphicon-remove"></span>
      </button>
    </p>
    <p>
      <i>{!! Form::label('type_id','Rodzaj sprzętu:') !!}</i><br>
      {!! Form::select('type_id', $types, null, ['placeholder' => 'Rodzaj sprzętu...','class'=>'form-control']) !!}
    </p>
    <p>
      <i>{!! Form::label('brand_id','Producent:') !!}</i><br>
      {!! Form::select('brand_id', $brands, null, ['placeholder' => 'Producent...', 'class'=>'form-control']) !!}
    </p>
    <p>
      <i>{!! Form::label('model','Model:') !!}</i><br>
      {!! Form::text('model', null, ['class'=>'form-control']) !!}
    </p>
    <p>
      <i>{!! Form::label('sn','SN:') !!}</i><br>
      {!! Form::text('sn', null, ['class'=>'form-control']) !!}
    </p>
    <p>
      <i>{!! Form::label('status_id','Rodzaj sprzętu:') !!}</i><br>
      {!! Form::select('status_id', $status, 1, ['class'=>'form-control']) !!}
    </p>
    <p>
      <i>{!! Form::label('readyOn','Planowany termin naprawy:') !!}</i><br>
      {!! Form::date('readyOn', ( ! empty($order) ? $order->readyOn : \Carbon\Carbon::now()->addDays(14)), ['class'=>'form-control']) !!}

    </p>
  </div>
  <div class="col-md-8">
    <p>
      <i>{!! Form::label('description','Opis usterki:') !!}</i><br>
      {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
    </p>
    <p>
      <i>{!! Form::label('diagnosis','Diagnoza:') !!}</i><br>
      {!! Form::textarea('diagnosis', null, ['class'=>'form-control']) !!}
    </p>
    <p>
      <i>{!! Form::label('comment','Uwagi:') !!}</i><br>
      {!! Form::textarea('comment', null, ['class'=>'form-control']) !!}
    </p>
  </div>
</div>
<div class="row">
  <div class="col-md-6 col-md-offset-4">
    {{--{!! Form::button('<span class="glyphicon glyphicon-floppy-save"></span>'', ['class'=>'btn btn-primary', 'type' => 'submit']) !!}
    <button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-floppy-save"></span></button> --}}
  </div>
</div>
