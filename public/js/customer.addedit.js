$("#addCustomer").click(function() {

    $.ajax({
        type: 'post',
        url: '/custonernew',
        data: {
            '_token': $('#tokenAdd').val(),
            'name': $('#nameAdd').val(),
            'surname': $('#surnameAdd').val(),
            'email': $('#email').val(),
            'phone': $('#phone').val()
        },
        success: function(data) {
            name=data.name+" "+data.surname;
            data.id=20;
            if (!data.email) {
              data.email="";
            }
            if (!data.phone) {
              data.phone="";
            }
            $('#custonerTable tbody tr:first').before(
              "<tr><td>"+data.name+"</td><td>"+data.surname+"</td><td>"+data.email+"</td><td>"+data.phone+"</td>"+
              "<td><button id='custoner_"+data.id+"' type='button' class='btn btn-xs btn-info' data-dismiss='modal'"+
                    "onclick=\"customerChange("+data.id+",'"+name+"')\"><span class='glyphicon glyphicon-ok'></span></button></td></tr>"
              );
            console.log(data);
        },
        error: function (data) {
            console.log('Error:', data);
            alert(data);
        }
    });

});
