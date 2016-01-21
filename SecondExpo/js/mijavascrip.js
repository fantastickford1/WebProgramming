function link() {
	window.open("home.html");
}

function validate() {
    var x = document.getElementById("name").value;
    var y = document.getElementById("lastname").vale;
    var f = document.getElementById("phone").value;
    if (x == null || x.length == 0) {
        alert("Algun campo esta vacio");
    }else if (y == null || y.length == 0 ){
        alert("Algun campo esta vacio");
    }else if(f == null || f.length == 0){
        alert("Algun campo esta vacio");
    }
    
    if((x != null || x.length != 0)&&(y != null || y.length != 0 )&&(f != null || f.length != 0)){
        document.getElementById('showN').innerHTML = document.getElementById('name').value;
        document.getElementById('showL').innerHTML = document.getElementById('lastname').vale;
        document.getElementById('showP').innerHTML = document.getElementById('phone').value;
    }
    
    
}

function anotherPage(){
    var x;
    if (confirm("Quieres dejar esta pagina?!") == true) {
        window.open("http://www.google.com");
    } else {
        
    }
}