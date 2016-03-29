<?php
session_start();
if (isset($_SESSION['username']) && $_SESSION['type'] == "Super") {
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>OSX El Capitan 10.11.3</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/OSXElCapitalStyle.css">
        <script src="js/jquery-1.12.0.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/animation.js"></script>
        <script src="js/adminAJAX.js"></script>
    </head>
    <body>
        <nav id="topThing">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a id="AppleLogoContainer" class="navbar-brand" href="#">
                            <img id="appleLogo" alt="Brand" src="img/Apple_logo_black.svg.png">
                        </a>
                    </div>
                    <ul id="menu">
                        <li><a class="topA"  href="#">Finder</a></li>
                        <li><a class="topA" href="#">File</a></li>
                        <li><a class="topA" href="#">Edit</a></li>
                        <li><a class="topA" href="#">View</a></li>
                        <li><a class="topA" href="#">Note</a></li>
                    </ul>
                </div>
        </nav>
        <div class="container-fluid" style="background-image: url('img/background1366x768.jpg'); background-repeat: no-repeat; width: 1366px;height: 768px;">
            <div class="row" id="docker">

            </div>
            <div class="row" id="dock">
                <div class="col-md-2">
                    <img id="finder" src="img/finder.png" alt="finder">
                </div>
                <div class="col-md-2">
                    <img id="launcher" src="css/images/Layer-1.png" alt="launcher">
                </div>
                <div class="col-md-2">
                    <img id="safari" src="img/safari.png" alt="Safari">
                </div>
                <div class="col-md-2">
                    <img id="mail" src="img/mail.png" alt="Mail">
                </div>
                <div class="col-md-2">
                    <img id="note" src="img/notes.png" alt="Notes">
                </div>
                <div class="col-md-2">
                    <img id="calc" src="img/calculator-icon.png" alt="Calculator">
                </div>
            </div>
        </div>
        
        <!-- Users and Groups app -->
        <div id="UGContainer">
            <div id="user_groups">
                <div id="u_gBar">
                    <div class="NoteButtons" id="closeN"></div>
                    <div class="NoteButtons" id="min"></div>
                    <div class="NoteButtons" id="max"></div>
                </div>
                <div id="sideBar">
                    <div class="Users">
                        <p>Current User</p>
                        <div id="AdminUser" class="theUsers">
                        </div>
                    </div>
                    <div class="Users">
                        <p>Other Users</p>
                        <div id="OtherUsers" class="theUsers">
<!--                            <div>-->
<!--                                <img id="adminImage" src="users/fantastickford1.JPG">-->
<!--                                <p class="userName"><strong>fantastickford1</strong></p>-->
<!--                                <p>Admin</p>-->
<!--                            </div>-->
                        </div>
                    </div>
                </div>
                <div id="toolbar">
                        <div id="add"></div>
                        <div id="delete"></div>
                    </div>
                <div id="config" align="center">
                    <form id="formulario" action="AddUsers.php" method="post">
                        <label>Usuario</label><br>
                        <input type="text" name="username" required><br>
                        <label>Tipo</label><br>
                        <input type="text" name="type" required><br>
                        <label>Contraseña</label><br>
                        <input type="text" name="password" required><br>
                        <input type="submit" value="Registrar">
                    </form>
                    <form id="deleteForm" action="DeleteUser.php" method="post">
                        <label>Usuario a borrar</label><br>
                        <input type="text" name="user" required><br>
                        <input type="submit" value="Borrar">
                    </form>
                </div>
                </div>
            </div>
        </div>

        <ul id="menuDrop">
            <li><a id="aboutB">Acerca de este Mac</a></li>
            <li><a>Preferencias del Sistema...</a></li>
            <li><a>Ubicación</a></li>
            <li><a>App Strore---</a></li>
        </ul>

        <div id="about">
            <div>
                    <div class="AboutButtons" id="closeB"></div>
                    <div class="AboutButtons" id="min"></div>
                    <div class="AboutButtons" id="max"></div>
            </div>
            <div> <img src="img/Untitled-1.jpg"></div>
        </div>

    </body>
</html>
<?php
}else {
    header("Location:LogInJ.php");
}
?>