$(function () {

  $.ajax({
    cache: false,
    type: "POST",
    dataType: "html",
    url: "_consult_notes_db.php",
    success: getNotes
  });

  function getNotes() {
    $("#notesViewer").load("_consult_notes_db.php");
  }


});

var mesage = "";

function watchNotes(id) {
  mesage = document.getElementById(id).innerHTML;
  $("#textArea").val(mesage);
}

function newNote() {
  var text = $("#textArea").val();
  if (text != " " && text != "") {
    $.ajax({
      type: "POST",
      data: {action: "create",note: text, current: mesage },
      url: "Actions.php"
    });
    $("#notesViewer").load("_consult_notes_db.php");
    $("#textArea").val("");
    mesage = "";
  }
}

function deleteNote() {
  $.ajax({
    type: "POST",
    data: {action: "delete",current: mesage},
    url: "Actions.php"
  });
  $("#notesViewer").load("_consult_notes_db.php");
  $("#textArea").val("");
  mesage="";
}
