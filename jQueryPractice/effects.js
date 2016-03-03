$(function(){
        
    $("#formulario").draggable().resizable();
    
    $("#info").hover(function(){
        $(this).animate({width:'220px'},300);
        $("#info *").css("visibility", "visible");
    },function(){
        $(this).animate({width:'20px'},300);
        $("#info *").css("visibility", "hidden");
    });
    
    $("#fadeB").click(function(){
        $("#square1").fadeIn("slow");
        $("#square2").fadeIn("slow");
        $("#square3").fadeIn("slow");
    });
    
    $("#hideB").click(function(){
        $("#square1").hide("slow");
        $("#square2").hide("slow");
        $("#square3").hide("slow");
    });
    
    $( "#date" ).datepicker({showAnim : "bounce"} );

    $(document).tooltip();
    
    $("#accept").click(function(){
        var name = $("#name").val();
        var date = $("#date").val();
        $("#nombre").text("Nombre: " + name);
        $("#fecha").text("Fecha: " + date);
    });
    
    
    $("#start").click(function() {
        function circle() {
            $("#circle").animate({"top" : "270px"}, "slow").animate({"left" : "270px"}, "slow").animate({"top" : "20px"}, "slow").animate({"left" : "20px"}, "slow", circle);
        }
        circle();
    });


    $("#stop").click(function() {
        $("#circle").stop(true);
    });
    
});