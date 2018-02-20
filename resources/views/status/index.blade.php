@extends('master')
@section('content')
  <div class="row">
		<div class="col-md-12">
      <h3 class="text-left">Wszyscy producencji</h3>
      <a href="{{ action('StatusController@create') }}" class="btn btn-success">
          Dodaj status
      </a>
    </div>
  </div>
	<div class="row">
		<div class="col-md-12">
			<table class="table table-striped">
				<thead>
          <tr>
            <th>Kolejność</th>
						<th>Nazwa</th>
          </tr>
       </thead>
       <tbody>
          @foreach($status as $status)
            <tr style="background-color:{{$status->color}}">
              <td>
  							{{$status->order}}
  						</td>
              <td>
  							{{$status->name}}
  						</td>
            </tr>
          @endforeach
       </tbody>
     </table>
   </div>
 </div>
@stop
