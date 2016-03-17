$(function(){
    
    var nombre = $("#nombre").val();
    var apellido = $("#apellido").val();
    var edad = $("#edad").val();
    var ocupacion = $("#ocupacion").val();
    var genero = $("#genero").val();
    
    
    $("#send").click(function(){
        var nombre = $("#nombre").val();
        var apellido = $("#apellido").val();
        var edad = $("#edad").val();
        var ocupacion = $("#ocupacion").val();
        var genero = $("#genero").val();
        
        
        $("#contenido").html($("#contenido").html() + nombre);
        $("#lastname").html($("#lastname").html() + apellido);
        $("#age").html($("#age").html() + edad);
        $("#op").html($("#op").html() + ocupacion);
        $("#gender").html($("#gender").html() + genero);
    });
    
});