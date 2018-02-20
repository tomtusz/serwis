<!-- Modal -->
<div id="myModal{{$order->uniqid}}" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Informacje</h4>
      </div>
      <div class="modal-body">
        <div class="panel panel-default">
          <div class="panel-heading">Opis</div>
          <div class="panel-body">{{$order->description}}</div>
        </div>
      </div>
      <div class="modal-body">
        <div class="panel panel-default">
          <div class="panel-heading">Diagnoza</div>
          <div class="panel-body">{{$order->diagnosis}}</div>
        </div>
      </div>
      <div class="modal-body">
        <div class="panel panel-default">
          <div class="panel-heading">Uwagi</div>
          <div class="panel-body">{{$order->comment}}</div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span></button>
      </div>
    </div>

  </div>
</div>
