@extends('master')
@section('content')
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <h2>Parametry systemu</h2>
      <p>Zarządanie ustawieniami.</p>

      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#statustab">Status zgłoszenia</a></li>
        <li><a data-toggle="tab" href="#typetab">Rodzaj sprzętu</a></li>
        <li><a data-toggle="tab" href="#brandtab">Producencji</a></li>
      </ul>

      <div class="tab-content">
        <div id="statustab" class="tab-pane fade in active">
          <h3>Status zgłoszenia</h3>
          {{$statuses}}
        </div>
        <div id="typetab" class="tab-pane fade">
          <h3>Rodzaj sprzętu 2</h3>
          {{$types}}
        </div>
        <div id="brandtab" class="tab-pane fade">
          <h3>Producencji</h3>
          @include('adminparams.brandindex')
        </div>
      </div>
    </div>
  </div>
@stop
