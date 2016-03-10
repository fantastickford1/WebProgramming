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

var mesage;

function watchNotes(id) {
  mesage = document.getElementById(id).innerHTML;
  $("#textArea").val(mesage);
}

function newNote() {
  var text = $("#textArea").val();
  if (mesage != " " && mensaje != "") {
    $.ajax({
      type: "POST",
      data: {note: text, current: mesage },
      url: "_add_notes_db.php"
    });
    $("#notesViewer").load("_consult_notes_db.php");
    $("#textArea").val("");
    mesage = "";
  }
}

function deleteNote() {
  $.ajax({
    type: "POST",
    data: {current: mesage},
    url:
  });
  $("#notesViewer").load("_consult_notes_db.php");
  $("#textArea").val("");
  mesage="";
}
