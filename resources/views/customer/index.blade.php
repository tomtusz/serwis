@extends('master')
@section('content')
  <div class="row">
		<div class="col-md-12">
      <h3 class="text-left">Klienci</h3>
      <a href="{{ action('CustomerController@create') }}" class="btn btn-success">
          Dodaj klienta
      </a>
    </div>
  </div>
	<div class="row">
		<div class="col-md-12">
			<table class="table table-striped">
				<thead>
							<th>#</th>
							<th>Imię</th>
              <th>Nazwisko</th>
							<th>e-mail</th>
							<th>tel.</th>
            </tr>
       </thead>
       <tbody>
          @foreach($customers as $customer)
            <tr>
              <td>
  							{{$loop->index+1}}
  						</td>
              <td>
  							{{$customer->name}}
  						</td>
              <td>
  							{{$customer->surname}}
  						</td>
              <td>
  							{{$customer->email}}
  						</td>
              <td>
  							{{$customer->phone}}
  						</td>
            </tr>
          @endforeach
       </tbody>
     </table>
   </div>
 </div>
@stop
