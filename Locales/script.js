$("#createHollow").on( "click", function(){
    $("#msgError").addClass("hidden");
    var fecha= $("#fecha").val();
    var hIni= $("#hini").val();
    var hFin= $("#hfin").val();


    var data = getAllHollows();

    
    if(contains(data)){
        $("#msgError").removeClass("hidden");
    }else{
        var row =   '<tr class="hollow">'+
                        '<td class="fecha">'+ fecha +'</td>' +
                        '<td class="hIni">'+ hIni +'</td>' +
                        '<td class="hFin">'+ hFin +'</td>' +
                    '</tr>'
        $("table tbody").append(row);
        $('#myModal').modal('hide');
    }

   
});

$("#editViewAddHollow").on( "click", function(){
    $("#msgError").addClass("hidden");
    var fecha= $("#fecha").val();
    var hIni= $("#hini").val();
    var hFin= $("#hfin").val();


    var data = getAllHollows();

    
    if(contains(data)){
        $("#msgError").removeClass("hidden");
    }else{
        window.location.href = 'add_fecha_evento.php?fecha='+ fecha + '&hIni=' + hIni + "&hFin=" + hFin + "&uuid=" + $("#uuid").text();
    }

   
});




function getAllHollows(){
    var i=0;
    var data= {};
    $("table tbody").find('.hollow').each(function(){
        var hollow = {
        fecha : $(this).children(".fecha").html(),
        hIni : $(this).children(".hIni").html(),
        hFin : $(this).children(".hFin").html()
        }

        data[i]=(hollow);
        i++;
    });

    return data;
}



function contains(data){
    var fecha= $("#fecha").val();
    var hIni= $("#hini").val();
    var hFin= $("#hfin").val();
    for(index in data){
        if(data[index]["fecha"] == fecha 
          && data[index]["hIni"] == hIni 
          && data[index]["hFin"] == hFin ){

            return true;
                
        }
    }

    return false;
}





$("#rmhollow").on( "click", function(){
    $("table tbody").empty();
});



$("#saveEvent").on( "click", function(){
    var data = getAllHollows();
    var json = {
        nombre: $("#name").val(),
        uuid: $("#uuid").text(),
        data : data
    }
    var aux = JSON.stringify(json);
    //$.post( "guardar_evento.php", aux);
    $.ajax({
        type: 'POST',
        url: 'guardar_evento.php', 
        data: json
    })
   // $.post( "guardar_evento.php", function( save ) {
    //    $( ".result" ).html( save );
   //   });
});
