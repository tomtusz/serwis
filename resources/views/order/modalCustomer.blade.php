<!-- Modal -->
<div id="myModalCustomer" class="modal fade d-example-modal-lg" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Klienci:</h4>
      </div>
      <div class="modal-body">
        <div class="panel panel-default">
          <input type="text" id="serchCustomerInput" onkeyup="findInTable('#custonerTable tbody tr', this)" placeholder="Szukaj po klienta..">
          <button type="button" class="btn btn-xs btn-info" onclick="$('#addNewCostomerTr').show();">
            <span class="glyphicon glyphicon-plus"></span>
          </button>
          <div class="panel-body pre-scrollable">
            <table id="custonerTable" class="table table-striped">
      				<thead>
                <tr>
                  <th>Imię</th>
                  <th>Nazwisko</th>
    							<th>e-mail</th>
    							<th>Tel.</th>
    							<th>Wybierz</th>
                </tr>
                <tr id="addNewCostomerTr" style="display: none">
                  <form class="form-forizontal" action="" method="post" accept-charset="UTF-8">
                    <th>
                      <input id="tokenAdd" type="text" value="{{ csrf_token() }}" hidden>
                      <input id="nameAdd" class="form-control input-sm" type="text" name="" value="">
                    </th>
                    <th><input id="surnameAdd" class="form-control input-sm" type="text" name="" value=""></th>
      							<th><input id="email" class="form-control input-sm" type="email" name="" value=""></th>
      							<th><input id="phone" class="form-control input-sm" type="text" name="" value=""></th>
      							<th>
                      <button id="addCustomer" type="button" class="btn btn-xs btn-info">
                        <span class="glyphicon glyphicon-floppy-save"></span>
                      </button>
                      <button id="cancel" type="button" class="btn btn-xs btn-info" onclick="$('#addNewCostomerTr').hide();">
                        <span class="glyphicon glyphicon-remove"></span>
                      </button>
                    <th>
                  </form>
                </tr>
             </thead>
             <tbody>
                @foreach($customers as $customer)
                  <tr>
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
                    <td>
                      <button id="custoner_{{$customer->id}}" type="button" class="btn btn-xs btn-info" data-dismiss="modal"
                        onclick="customerChange({{$customer->id}}, '{{$customer->name.' '.$customer->surname}}')">
                        <span class="glyphicon glyphicon-ok"></span>
                      </button>
        						</td>
                  </tr>
                @endforeach
             </tbody>
           </table>
          </div>
        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span></button>
      </div>
    </div>

  </div>
</div>
