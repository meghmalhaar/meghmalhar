$(document).ready(function () {
    $(".block__pic").imagezoomsl({
        // shows the magnifying glass container
  cursorshade: false,

  // cursor type
  magnifycursor: 'crosshair',

  // background color of the magnifying glass container
  cursorshadecolor: '#fff', 

  // opacity of the magnifying glass container
  cursorshadeopacity: 0.3,

  // border styles
  cursorshadeborder: '1px solid black',

  // z-index property
  zindex: '0', 

  // zoom step
  stepzoom: 2,

  // zoom range  
  zoomrange: [2, 2], 

  // start zoom level
  zoomstart: 2,

  // disables the scrolling of the document with the mouse wheel when the cursor is over the image
  disablewheel: true
    });
});
