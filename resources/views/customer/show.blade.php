@extends('master')
@section('content')

  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      
    </div>
</div>

@stop



@foreach ($customer->orders as $order)
  {{$order}}
@endforeach
