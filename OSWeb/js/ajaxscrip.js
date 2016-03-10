$(function () {

  $.ajax({
    cache: false,
    type: "POST",
    dataType: "html",
    url: "consult_notes_bd.php",
    success: getNotes
  });

  function getNotes() {
    $("#notesViewer").load("consult_notes_bd.php");
  }
});
