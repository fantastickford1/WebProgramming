$(function () {
    //vars
    /*var users = document.getElementById('allUsers').childNodes;
    var selectedUser = document.getElementById('selectedUser');    
    
    //allthestuff
    
    
    
    
    for(i = 1; i < users.length-1;i++){
        users[i].addEventListener("click",selectUser(users));
    }
    
    
    
    //funtions
    
    function selectUser(array){
        selectedUser.appendChild(this);
        console.log(array[1]);
    }*/
    
    $("#login").hide();
    
    var sd = $("#allUsers").children("div");
    for ( i=0 ; i < $(sd).length ; i++ ){
        $(sd[i]).on("click",selectUser);
    }
    
    function selectUser(){
        $(this).removeClass("userBlock");
        $(this).addClass("userCool move");
        $( "#selectedUser" ).append($(this));
        var we = $("#allUsers").children("div");
        for ( i=0 ; i < $(we).length ; i++ ){
            $(we[i]).hide();
        }
    }

});
