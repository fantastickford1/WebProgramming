<?php
  session_start();
  if (isset($_SESSION['username']) && $_SESSION['type'] == "User") {
    $user = $_SESSION['username'];
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>OSX El Capitan 10.11.3</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" href="css/jquery-ui.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link href='https://fonts.googleapis.com/css?family=Ubuntu|Chewy|Quattrocento+Sans|Kaushan+Script|Comfortaa|Lobster+Two|Raleway|Montserrat|Titillium+Web|Josefin+Sans|Pacifico|Orbitron|Josefin+Slab|Satisfy|Economica|Courgette' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/OSXElCapitalStyle.css">
        <script src="js/jquery-1.12.0.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/animation.js"></script>
        <script src="js/ajaxscrip.js"></script>
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
        <!-- Calculator -->
        <div id="calContainer">
            <div id="calculator">
                <div class="buttons" id="close"></div>
                <div class="buttons" id="min"></div>
                <div class="buttons" id="max"></div>
                <input id="display" type="text" maxlength="8">
                <div id="keypad">
                    <a class="top clear-button" id="clear">AC</a>
                    <a class="top plus-minus">+/-</a>
                    <a class="top percent">%</a>
                    <a class="right function-button divide">/</a>
                    <a class="num-button seven">7</a>
                    <a class="num-button eight">8</a>
                    <a class="num-button nine">9</a>
                    <a class="right function-button times">x</a>
                    <a class="num-button four">4</a>
					<a class="num-button five">5</a>
					<a class="num-button six">6</a>
					<a class="right function-button minus">-</a>
					<a class="num-button one">1</a>
					<a class="num-button two">2</a>
					<a class="num-button three">3</a>
					<a class="right function-button plus">+</a>
					<a class="num-button zero" id="zero">0</a>
					<a class="num-button dot">.</a>
					<a class="right equals-button" id="equal">=</a>
                </div>
            </div>
        </div>
        <!-- Calculator End -->

        <!-- Notes app -->
        <div id="notesContainer">
            <div id="notes">
                <div id="notesBar">
                    <div class="NoteButtons" id="closeN"></div>
                    <div class="NoteButtons" id="min"></div>
                    <div class="NoteButtons" id="max"></div>
                    <div style="float: left; height: 10px; width: 10px;"></div>
                    <div class="NoteOtherButtons"></div>
                    <div class="NoteOtherButtons"></div>
                    <div class="NoteOtherButtons" style="padding-left: 15px;" onclick="deleteNote()"><img src="img/ios7-trash-outline.png" alt="circleCheck" height="15.39px"></div>
                    <div id="NoteNewButton"><b><a onclick="newNote()">New note</a></b></div>
                    <div class="NoteOtherButtons" id="newNote" style="padding-left: 9px;"><img src="img/circle-check-128.png" alt="circleCheck" height="24.39px"></div>
                </div>
                <div id="notesSideBar">
                    <ul id="notesViewer">

                    </ul>
                </div>
                <textarea id="textArea" cols="101" rows="30">

                </textarea>
            </div>
        </div>

        <!-- Finder -->
        <div id="finderM">
            <div id="menuBar">
                <div id="cmzBtBar">
                    <div class="cmzButtons" id="closeF"></div>
                    <div class="cmzButtons" id="minF"></div>
                    <div class="cmzButtons" id="maxF"></div>
                </div>
                <div id="buttonsBar">
                    <div class="buttonER" id="newFile" align="center">
                        <img src="img/newDocument.png" alt="newDoc" height="12" width="12" />
                    </div>
                    <div class="buttonER" id="deleteFile" align="center">
                        <img src="img/deleteDocument.png" alt="delDoc" height="12" width="12" />
                    </div>
                    <div class="buttonER" id="openFile" align="center">
                        <img src="img/documentEdit.png" alt="editDoc" height="12" width="12" />
                    </div>
                </div>
            </div>
            <div id="backFav"></div>
            <div id="favorites">
              <p class="cbz">Favorites</p>
                <ul class="list">
                    <li><img src="" alt="" />All My Files</li>
                    <li><img src="" alt="" />Desktop</li>
                    <li><img src="" alt="" />Documents</li>
                </ul>
            </div>
            <div id="files">
                <ul class="list2">
                  <?php
                    if (is_dir($user)) {
                      if ($dh = opendir($user)){
                        $num = 0;
                        while (($file = readdir($dh)) != false){
                          if (is_dir($user."/".$file)){
                            echo "<li id='file".$num."'><img src='img/folderfile.png' alt='folder' height='15' width='15'>".$file."</li>";
                            $num++;
                          }else{
                            echo "<li id='file".$num."' onclick='filename(id)'><img src='img/textfile.png' alt='file' height='15' width='15'>".$file."</li>";
                            $num++;
                          }
                        }
                      }
                    }else {
                      mkdir($user);
                    }
                  ?>
                </ul>
            </div>
        </div>

        <!-- Text Editor -->
        <div id="pages">
            <div id="pagesMenuBar">
              <div id="cmzBtBarPages">
                  <div class="cmzButtons" id="closeP"></div>
                  <div class="cmzButtons" id="minP"></div>
                  <div class="cmzButtons" id="maxP"></div>
              </div>
              <p id="fileName">Pages</p>
              <div id="buttonsBarPages">
                  <div class="buttonPages" id="newFileP" align="center">
                      <img src="img/newDocument.png" alt="newDoc" height="14" width="14" />
                  </div>
                  <div class="buttonPages" id="ediFile" align="center">
                      <img src="img/documentEdit.png" alt="editDoc" height="14" width="14" />
                  </div>
              </div>
            </div>
            <div id="itextArea" contenteditable="true" style="font-family: Arial; font-size: 15px;"></div>
            <div id="toolsText">
              <div id="group1">
                <button id="undo" class="ThePage" type="button" name="undo">Undo</button>
                <button id="redo" class="ThePage" type="button" name="redo">Redo</button>
              </div>
              <div id="group2">
                <button id="font" class="ThePage btn-default dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Font<span class="caret"></span></button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                  <li id = "raleway-font" style = "font-family: Raleway;"><a href="#">Raleway</a></li>
                  <li id = "montserrat-font" style = "font-family: Montserrat"><a href="#">Montserrat</a></li>
                  <li id = "titillium-font" style = "font-family: Titillium Web"><a href="#">Titillium Web</a></li>
                  <li id = "pacifico-font" style = "font-family: Pacifico"><a href="#">Pacifico</a></li>
                  <li id = "josefin-slab-font" style = "font-family: Josefin Slab"><a href="#">Josefin Slab</a></li>
                  <li id = "orbitron-font" style = "font-family: Orbitron"><a href="#">Orbitron</a></li>
                  <li id = "comfortaa-font" style = "font-family: Comfortaa;"><a href="#">Comfortaa</a></li>
                  <li id = "courgette-font" style = "font-family: Courgette;"><a href="#">Courgette</a></li>
                  <li id = "ubuntu-font" style = "font-family: Ubuntu;"><a href="#">Ubuntu</a></li>
                  <li id = "chewy-font" style = "font-family: Chewy;"><a href="#">Chewy</a></li>
                  <li id = "lobster-two-font" style = "font-family: Lobster Two;"><a href="#">Lobster Two</a></li>
                  <li id = "kaushan-script-font" style = "font-family: Kaushan Script;"><a href="#">Kaushan Script</a></li>
                  <li id = "economica-font" style = "font-family: Economica;"><a href="#">Economica</a></li>
                  <li id = "satisfy-font" style = "font-family: Satisfy;"><a href="#">Satisfy</a></li>
                </ul>
              </div>
              <div id="group3">
                <!-- Single button -->
                <div class="btn-group">
                  <button id="size" type="button" class="ThePage btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Size <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu">
                    <li id="size2"><a href="#">2</a></li>
                    <li id="size4"><a href="#">4</a></li>
                    <li id="size6"><a href="#">6</a></li>
                    <li id="size9"><a href="#">9</a></li>
                    <li id="size12"><a href="#">12</a></li>
                    <li id="size14"><a href="#">14</a></li>
                    <li id="size16"><a href="#">16</a></li>
                    <li id="size19"><a href="#">19</a></li>
                    <li id="size22"><a href="#">22</a></li>
                    <li id="size24"><a href="#">24</a></li>
                  </ul>
                </div>
              </div>
            </div>
        </div>
        <!-- About -->

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

    <!-- Aux form -->
    <div id="dialog-form" title="File name">
        <form>
          <fieldset>
              <label>File name</label>
              <input id="fileNameInput" type="text" name="name" class="text ui-widget-content ui-corner-all" required>
              <input type="submit" tabindex="-1" style="position:absolute; top:-1000px">
          </fieldset>
        </form>
    </div>

</html>

<?php
}else {
  header("Location:LogInJ.php");
}
 ?>
