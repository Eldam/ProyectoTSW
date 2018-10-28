$("#createHollow").on( "click", function(){
    var fecha= $("#fecha").val();
    var hIni= $("#hini").val();
    var hFin= $("#hfin").val();


    $("table tbody").find('.fecha').each(function(){

        if($(this).is(":checked")){

            $(this).parents("tr").remove();

        }

    });

    $('#modal').modal('myModal');
});

function getAllHollows(){
    var data= [];
    $("table tbody").find('.hollow').each(function(){
        var hollow = [];
        hollow["fecha"] = $(this).children(".fecha").val();
        hollow["hIni"] = $(this).children(".hIni").val();
        hollow["hFin"] = $(this).children(".hFin").val();

        data.push(hollow);

    });

    return data;
}
