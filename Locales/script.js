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
        hollow["fecha"] = $(this).children(".fecha").html();
        hollow["hIni"] = $(this).children(".hIni").html();
        hollow["hFin"] = $(this).children(".hFin").html();

        data.push(hollow);

    });

    return data;
}
