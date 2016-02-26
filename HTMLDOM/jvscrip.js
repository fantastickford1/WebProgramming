//others
var div = document.createElement("div");
var div2 = document.createElement("div");
var div3 = document.createElement("div");
var form = document.createElement("from");
var table = document.createElement("table");
var table2 = document.createElement("table");
//inputs
var input1 = document.createElement("input");
var input2 = document.createElement("input");
var input3 = document.createElement("input");
var input4 = document.createElement("input");
var input5 = document.createElement("input");
var inputColor = document.createElement("input");

//labels

var label1 = document.createElement("label");
var label2 = document.createElement("label");
var label3 = document.createElement("label");
var label4 = document.createElement("label");
var label5 = document.createElement("label");
var label6 = document.createElement("label");
//table
var row = document.createElement("tr");
var col = document.createElement("td");
var col2 = document.createElement("td");
var col3 = document.createElement("td");
var col4 = document.createElement("td");
var col5 = document.createElement("td");
/////////////////////////////////////////////////
//set table
var colName = document.createTextNode("Nombre");
col.appendChild(colName);
row.appendChild(col);
var colName2 = document.createTextNode("Apellido");
col2.appendChild(colName2);
row.appendChild(col2);
var colName3 = document.createTextNode("Universidad");
col3.appendChild(colName3);
row.appendChild(col3);
var colName4 = document.createTextNode("Edad");
col4.appendChild(colName4);
row.appendChild(col4);
var colName5 = document.createTextNode("Carrera");
col5.appendChild(colName5);
row.appendChild(col5);
table.appendChild(row);
div2.appendChild(table);
div2.appendChild(table2);
//set div//
div.setAttribute("id", "main");
document.body.appendChild(div);
document.body.appendChild(div2);
document.body.appendChild(div3);
//set form//
form.setAttribute("id", "formulario");
document.getElementById("main").appendChild(form);
//set inputs
input1.setAttribute("type", "text");
input1.setAttribute("id", "name");
//>>
input2.setAttribute("type", "text");
input2.setAttribute("id", "lastName");
//>>
input3.setAttribute("type", "text");
input3.setAttribute("id", "universidad");
//>>
input4.setAttribute("type", "text");
input4.setAttribute("id", "age");
//>>
input5.setAttribute("type", "text");
input5.setAttribute("id", "carrera");
//>>
inputColor.setAttribute("type", "text");
//set labels
label1.setAttribute("for", "name");
var t = document.createTextNode("Nombre");
label1.appendChild(t);
form.appendChild(label1);
form.appendChild(input1);
//>>
label2.setAttribute("for", "lastName");
t = document.createTextNode("Apellido");
label2.appendChild(t);
form.appendChild(label2);
form.appendChild(input2);
//>>
label3.setAttribute("for", "universidad");
t = document.createTextNode("Universidad");
label3.appendChild(t);
form.appendChild(label3);
form.appendChild(input3);
//>>
label4.setAttribute("for", "age");
t = document.createTextNode("Edad");
label4.appendChild(t);
form.appendChild(label4);
form.appendChild(input4);
//>>
label5.setAttribute("for", "carrera");
t = document.createTextNode("Carrera");
label5.appendChild(t);
form.appendChild(label5);
form.appendChild(input5);
//>>

t = document.createTextNode("Color");
label6.appendChild(t);
div3.appendChild(label6);
div3.appendChild(inputColor);
//buttons

var add = document.createElement("button");
add.setAttribute("type", "button");
add.setAttribute("id", "addButton");
t = document.createTextNode("Agregar");
add.appendChild(t);
form.appendChild(add);

var erase = document.createElement("button");
erase.setAttribute("type", "button");
t = document.createTextNode("Borrar");
erase.appendChild(t);
form.appendChild(erase);

var buttonColor = document.createElement("button");
buttonColor.setAttribute("type","button");
t = document.createTextNode("Cambiar");
buttonColor.appendChild(t);
div3.appendChild(buttonColor);

add.disabled = true;


function validate() {
    var inputsw = form.getElementsByTagName("input");
    var i;
    for (i = 0; i < inputsw.length; i++) {
        var data = inputsw[i].value;
        if(data == null || data == ""){
            add.disabled = true;
            console.log(true);
        }else{
            add.disabled = false;
            console.log(false);
        }
    }
}

input1.setAttribute("oninput", "validate()");
input2.setAttribute("oninput", "validate()");
input3.setAttribute("oninput", "validate()");
input4.setAttribute("oninput", "validate()");
input5.setAttribute("oninput", "validate()");

function addToTable() {
    var inputsw = form.getElementsByTagName("input");
    var i;
    var row = "<tr>";
    for (i = 0; i < inputsw.length; i++){
        row += "<td>" + inputsw[i].value + "</td>";
    }
    row += "</tr>";
    table2.innerHTML += row;
}

add.setAttribute("onclick", "addToTable()");

function eraseLast(){
    table2.removeChild(table2.lastChild);
}

erase.setAttribute("onclick","eraseLast()");

function change(){
    var color = inputColor.value;
    document.body.style.backgroundColor = color;
}

buttonColor.setAttribute("onclick", "change()");