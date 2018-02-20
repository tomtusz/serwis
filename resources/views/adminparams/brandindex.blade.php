<div class="row">
	<div class="col-md-12">
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
        @foreach($brands as $brand)
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
