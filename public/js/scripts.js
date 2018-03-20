// Empty JS for your own code to be here

// ---------------- order index
function orderIndexTableChange(element,td ) {
  console.log($(element)+' = '+element+' - '+td+' = '+$(td+':parent'));
  if($(element).checked){
    $(td+':parent').style.display = "";
  }else {
    $(td+':parent').style.display = "none";
  }

}



// ---------------- end order index





// ----------- zmiana klienta z modala
function customerChange(custoner, customerName) {
  //console.log(custoner);
  $('#customerName').val(customerName);
  $('#customerId').val(custoner);
};
function customerNoData() {
  $('#customerName').val('Brak zgody');
  $('#customerId').val(null);
}
//----------------------------------------------------------------------------------------------
// filtruje zawartość tablicy 'table' wg zawartości poda 'input' po zawartości wszystkich kolumn
// wywołując należy wskazań zakres przeszukiwanych wierszy np.: $('#maintab tbody tr')
//----------------------------------------------------------------------------------------------
function findInTable(table, input) {
  // Declare variables
  //console.log(input.value);
  var filter, td, found=false;
  filter =input.value.toUpperCase();

  $(table).each(function() {
		td = $(this).find('td');
    found=false;
    this.style.display = "none";
    td.each(function() {
      if (! found)
        if ($(this).text().toUpperCase().indexOf(filter) > -1) {
          found=true
          console.log($(this).text().toUpperCase());
      	}
      }
    )
    if (found) {
      this.style.display = "";
    }
  })
};
