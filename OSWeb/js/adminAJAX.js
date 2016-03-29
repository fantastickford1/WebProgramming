$(function () {

  $("#AdminUser").load("AdminUser.php");
  $("#OtherUsers").load("RequestUsers.php");

  $("#formulario").hide();
  $("#deleteForm").hide();

  $("#add").click(function () {
    $("#formulario").toggle();
  });

  $("#delete").click(function () {
    $("#deleteForm").toggle();
  });

});
