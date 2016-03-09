$(function () {
 
    $("#userInput").hide();
    $("#login").addClass("hide");
    
    var sd = $("#allUsers").children("div");
    for ( i=0 ; i < $(sd).length ; i++ ){
        $(sd[i]).on("click",selectUser);
    }
    
    function selectUser(){
        $("#userInput").val($(this).text());
        $(this).addClass("move");
        $( "#selectedUser" ).append($(this));
        var we = $("#allUsers").children("div");
        for ( i=0 ; i < $(we).length ; i++ ){
            $(we[i]).addClass("hide");
        }
        $("#login").removeClass("hide");
        $("#login").addClass("showW");
    }
    
    

});
