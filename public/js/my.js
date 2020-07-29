$(function () {
    $('#il').on('change',function () {
        var plakaKodu = $(this).val();
        if (plakaKodu){
            $.post('http://localhost/logistics/app/controller/add-transfer.php',{'plakaKodu' : plakaKodu},function (response) {
                $('#ilce').html(response).removeAttr('disabled');
            });
        }else{

        }
    });
});
$(function () {
    $('#il2').on('change',function () {
        var plakaKodu2 = $(this).val();
        if (plakaKodu2){
            $.post('http://localhost/logistics/app/controller/add-transfer.php',{'plakaKodu2' : plakaKodu2},function (response2) {
                $('#ilce2').html(response2).removeAttr('disabled');
            });
        }else{

        }
    });
});

