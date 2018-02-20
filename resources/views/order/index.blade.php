@extends('master')
@section('content')
  <div class="row">
		<div class="col-md-12">
      @include('forms.form_errors')
      <h3 class="text-left">Lista zgłoszeń</h3>
    </div>
  </div>
	<div class="row">
		<div class="col-md-12">
			<table class="table table-striped">
				<thead>
          <tr>
            <th>Nr zgłoszenia</th>
            <th>Rodzaj</th>
            <th>Producent</th>
            <th>SN</th>
            <th>Stasus</th>
            <th>Przyjęty</th>
            <th>Do wydania</th>
            <th>Akcje</th>
          </tr>
       </thead>
       <tbody>

          @foreach($order as $order)
            <tr style="background-color:{{$order->status->color}}">
              <td>
                <a href="{{ action('OrderController@show', $order->uniqid) }}">
                  {{$order->uniqid}}
                </a>
              </td>
  						<td>{{$order->type->name}}</td>
  						<td>{{$order->brand->name}}</br><i>{{$order->model}}</i></td>
  						<td>{{$order->sn}}</td>
  						<td>{{$order->status->name}}</td>
  						<td>{{$order->added_at->format('d-m-Y')}}</td>
              <td>{{$order->readyOn->format('d-m-Y')}}</td>
  						<td>
                <span class="dropdown">
                  <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">
                    <span class="glyphicon glyphicon-flash"></span> <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu">
                    @foreach($statuses as $status)

                      <li>
                        {{-- <button type="button" class="btn btn-link" >{{$status}}</button> --}}
                        <a href="{{ action('OrderController@statusChange', ['uniqid'=>$order->uniqid,'status_id'=>$status->id]) }}">{{$status->name}}</a>
                      </li>
                    @endforeach
                  </ul>
                </span>
                <a href="{{ action('OrderController@edit', $order->uniqid) }}" class="btn btn-info">
                   <span class="glyphicon glyphicon-pencil"></span>
                </a>
                <a href="{{ action('OrderController@show', $order->uniqid) }}" class="btn btn-info">
                   <span class="glyphicon glyphicon-zoom-in"></span>
                </a>
                <a href="{{ action('OrderController@pdfDownload', $order->uniqid) }} " target="_blank"; class="btn btn-info">
                   <span class="glyphicon glyphicon-print"></span>
                </a>
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal{{$order->uniqid}}">
                  <span class="glyphicon glyphicon-info-sign"></span>
                </button>
                  @include('order.modalInfo')
              </td>
            </tr>
          @endforeach

       </tbody>
     </table>
   </div>
 </div>
@stop
