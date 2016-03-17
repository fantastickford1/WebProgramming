(function(){

  // Caching the DOM
  var cta = document.getElementById('mostrar-mapa'),
      presentation = document.getElementById('presentacion');

//  var canvas = document.getElementById('canvas'),
//      ctx    = canvas.getContext('2d'),
//      map = document.getElementById('mapa');

// Configuracion
//  ctx.fillStyle = "#DB453B";

  // Binding events
  cta.addEventListener('click', changeView);
//  canvas.addEventListener('mousedown', pressed);
//  canvas.addEventListener('mouseup', unpressed);
//

  // CSS Manipulation
  function changeView() {
    presentation.className += ' is-hidden';
    map.className += ' is-visible';
  }

//  // Canvas
//  function pressed() {
//    canvas.addEventListener('mousemove', draw);
//  }
//
//  function unpressed() {
//    canvas.removeEventListener('mousemove', draw);
//  }
//
//  function draw(e) {
//    var mouse = getMousePos(canvas, e);
//
//    var x = mouse.x,
//        y = mouse.y;
//
//    ctx.fillRect(x, y, 5, 5);
//  }
//
//  function getMousePos(canvas, evt) {
//    var rect = canvas.getBoundingClientRect();
//    return {
//      x: evt.clientX - rect.left,
//      y: evt.clientY - rect.top
//    };
//  }

})();
