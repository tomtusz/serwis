@extends('master')
@section('content')
  <div class="row">
		<div class="col-md-12">
      <h3 class="text-left">Wszyscy producencji</h3>
      <a href="{{ action('BrandController@create') }}" class="btn btn-success">
          Dodaj producenta
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
          @foreach($brand as $brand)
            <tr>
              <td>
  							{{$loop->index+1}}
  						</td>
              <td>
  							{{$brand->name}}
  						</td>
            </tr>
          @endforeach
       </tbody>
     </table>
   </div>
 </div>
@stop
