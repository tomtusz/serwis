

<label for="orderFilterStatus">
  Status:
  <button class="btn btn-info btn-xs" type="button" onclick="$('.orderFilterStatus').prop('checked', true)">
    <span class="glyphicon glyphicon-ok"></span>
  </button>
  <button class="btn btn-info btn-xs" type="button" onclick="$('.orderFilterStatus').prop('checked', false)">
    <span class="glyphicon glyphicon-remove"></span>
  </button>

</label>
@foreach($statuses as $status)
  <span style="background-color:{{$status->color}}">
    <input
      class="orderFilterStatus"
      type="checkbox"
      name="orderFilterStatus"
      value="{{$status->id}}"
      checked
      onchange="orderIndexTableChange(this,'.statusTd' )"
    >
    {{$status->name}}
  </span>
@endforeach
