<div class="panel-group">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" href="#collapse1">Filtruj</a>
      </h4>
    </div>
   <div id="collapse1" class="panel-collapse collapse">
      <div class="panel-body">
        <div class="form-group">
          {!! Form::open(['url'=>'type','class'=>'form-forizontal']) !!}
          @include('order.filter.statusTab')
          <br>
          <label for="orderFilterStatus">Rodzaj:</label>
          @foreach($types as $type)
              <input type="checkbox" name="orderFilterType" value="{{$type->id}}" checked> {{$type->name}}
          @endforeach

          {!! Form::close() !!}
        </div>
      </div>
    </div>
   </div>
</div>
