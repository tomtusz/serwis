<!-- Modal -->
<div id="myModalCustomer" class="modal fade d-example-modal-lg" role="dialog">
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
