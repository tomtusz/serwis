@extends('master')
@section('content')

  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <h3 style="background-color:{{$order->status->color}}">Zgłoszenie Nr: {{$order->uniqid}} z dnia {{$order->added_at->format('d-m-Y')}}
        <a href="{{ action('OrderController@edit', $order->uniqid) }}" class="btn btn-info">
          Edytuj <span class="glyphicon glyphicon-pencil"></span>
        </a>
        <a href="{{ action('OrderController@pdfDownload', $order->uniqid) }} " target="_blank"; class="btn btn-info">
          Drukuj <span class="glyphicon glyphicon-print"></span>
        </a>
        <a href="{{ action('OrderController@index') }}" class="btn btn-info">
          Wszystkie <span class="glyphicon glyphicon-list"></span>
        </a>

        {!! DNS1D::getBarcodeHTML($order->uniqid, "C128")!!}
      </h3>
      <div class="row">
        <div class="col-md-4">
          <p>
            <i>Rodzaj sprzętu</i><br>
            {{$order->type->name}}
          </p>
          <p>
            <i>Producent</i><br>
            {{$order->brand->name}}
          </p>
          <p>
            <i>Model</i><br>
            @if ($order->model)
                {{$order->model}}

              @else
                --------

            @endif
          </p>
          <p>
            <i>Nr seryjny</i><br>
            @if ($order->sn)
                {{$order->sn}}

              @else
                --------

            @endif
          </p>
          <p>
            <i>Planowany czas naprawy</i><br>
            {{$order->readyOn->format('d-m-Y')}}
          </p>
        </div>
        <div class="col-md-8">
          <p>
            <i>Opis usterki</i><br>
            {{$order->description}}
          </p>
          <p>
            <i>Diagnoza</i><br>
            {{$order->diagnosis}}
          </p>
          <p>
            <i>Uwagi</i><br>
            {{$order->comment}}
          </p>
        </div>
      </div>
    </div>
</div>

@stop
