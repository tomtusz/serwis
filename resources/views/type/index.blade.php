@extends('master')
@section('content')
  <div class="row">
		<div class="col-md-12">
      <h3 class="text-left">Wszystkie typy urządzeń</h3>
      <a href="{{ action('TypeController@create') }}" class="btn btn-success">
          Dodaj typ urządzenia
      </a>
    </div>
  </div>
	<div class="row">
		<div class="col-md-12">
			<table class="table table-striped">
				<thead>
							<th>#</th>
							<th>Nazwa</th>
            </tr>
       </thead>
       <tbody>
          @foreach($types as $type)
            <tr>
              <td>
  							{{$loop->index+1}}
  						</td>
              <td>
  							{{$type->name}}
  						</td>
            </tr>
          @endforeach
       </tbody>
     </table>
   </div>
 </div>
@stop
