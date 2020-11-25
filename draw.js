var canvas, ctx,
    brush = {
        x: 0,
        y: 0,
        color: '#000000',
        size: 10,
        down: false,
    },
    strokes = [],
    currentStroke = null;

var statelineCap = 'round'
var stateSelectColor = 'manually'

function redraw() {
    console.log(1)
    // ctx.clearRect(0, 0, canvas.width(), canvas.height());
    ctx.lineCap = statelineCap;
    for (var i = 0; i < strokes.length; i++) {
        var s = strokes[i];
        if (statelineCap == 'smoothing') {
            ctx.lineWidth = 10;
            ctx.lineCap = 'round';
            ctx.shadowBlur = 10;
            ctx.shadowColor = `${s.color}4d`;
            ctx.strokeStyle = s.color;
            ctx.beginPath();
            ctx.moveTo(s.points[0].x, s.points[0].y);
        } else if (statelineCap == 'thick') {
            ctx.lineWidth = 10;
            ctx.lineCap = 'butt';
            ctx.shadowColor = `${s.color}4d`;
            ctx.strokeStyle = s.color;
            ctx.beginPath();
            ctx.moveTo(s.points[0].x, s.points[0].y);
        } else if (statelineCap == 'pixels') {
            ctx.lineCap = 'round';
        } else {
            ctx.strokeStyle = s.color;
            ctx.lineWidth = s.size;
            ctx.beginPath();
            ctx.moveTo(s.points[0].x, s.points[0].y);
        }

        for (var j = 0; j < s.points.length; j++) {
            var p = s.points[j];
            ctx.lineTo(p.x, p.y);
        }
        ctx.stroke();
    }
}


function clearCanvas() {
    ctx.clearRect(0, 0, canvas.width(), canvas.height());
}

function unDo() {
    ctx.clearRect(0, 0, canvas.width(), canvas.height());
    ctx.lineCap = statelineCap;
    for (var i = 0; i < strokes.length; i++) {
        var s = strokes[i];
        ctx.strokeStyle = s.color;
        ctx.lineWidth = s.size;
        ctx.beginPath();
        ctx.moveTo(s.points[0].x, s.points[0].y);
        for (var j = 0; j < s.points.length; j++) {
            var p = s.points[j];
            ctx.lineTo(p.x, p.y);
        }
        ctx.stroke();
    }
}

// function Erase() {
//     ctx.clearRect(0, 0, canvas.width(), canvas.height());
//     ctx.lineCap = statelineCap;
//     for (var i = 0; i < strokes.length; i++) {
//         var s = strokes[i];
//         ctx.strokeStyle = s.color;
//         ctx.lineWidth = s.size;
//         ctx.beginPath();
//         ctx.moveTo(s.points[0].x, s.points[0].y);
//         for (var j = 0; j < s.points.length; j++) {
//             var p = s.points[j];
//             ctx.lineTo(p.x, p.y);
//         }
//         ctx.stroke();
//     }
// }

// function erase() {
//     (canErase = !canErase), activeTool(eraser, canErase), canErase
//       ? (
//           (canSpray = !1),
//           activeTool(sprayTool, canSpray),
//           sprayPanel.classList.add("hide"),
//           brushPanel.classList.remove("hide"),
//           (ctx.globalCompositeOperation = "destination-out")
//         )
//       : (ctx.globalCompositeOperation = "source-over");
//   }


function init() {
    canvas = $('#draw');
    canvas.attr({
        width: window.innerWidth,
        height: window.innerHeight,
    });
    ctx = canvas[0].getContext('2d');

    function mouseEvent(e) {
        brush.x = e.pageX;
        brush.y = e.pageY;

        currentStroke.points.push({
            x: brush.x,
            y: brush.y,
        });

        redraw();
    }

    canvas.mousedown(function (e) {
        brush.down = true;

        currentStroke = {
            color: brush.color,
            size: brush.size,
            points: [],
        };

        strokes.push(currentStroke);

        mouseEvent(e);
    }).mouseup(function (e) {
        brush.down = false;

        mouseEvent(e);

        currentStroke = null;
    }).mousemove(function (e) {
        if (brush.down) mouseEvent(e);
    });

    $('#save-btn').click(function () {
        // window.open(canvas[0].toDataURL());
    });

    $('#undo-btn').click(function () {
        strokes.pop();
        unDo();
    });

    // $('#erase1').click(function () {
    //     strokes.pop();
    //     Erase();
    // });

    $('#clear-btn').click(function () {
        strokes = [];
        clearCanvas();
    });

    $('#color-picker').on('input', function () {
        brush.color = this.value;
    });


    $('#brush-size').on('button', function () {
        brush.size = this.value;
    });

    $('#brush-opacity').on('button', function () {
        brush.size = this.value;
    });

    setInterval(function () {
        // callFirebase()
        checkSteateSelectColor()
    }, 3000);

    document.getElementById("dot-sensor-color").style.backgroundColor = '#ff0000'
    document.getElementById("input-sensor-color").placeholder = '#ff0000'
}

$(init);

function chnw(state) {
    if (state == 1) {

        document.getElementById("showface").style.display = "none";//ไม่แสดงข้อมูล facebook
        document.getElementById("nwhdBarface").style.display = "block";//แสดงแถบเมนูfacebook
    }
    else if (state == 2) {
        document.getElementById("showface").style.display = "block";//แสดงข้อมูล facebook
        document.getElementById("nwhdBarview").style.width = "50px";
        document.getElementById("nwhdBarface").style.display = "none";//ไม่แสดง เมนู facebook
    }
}
function closeA() {
    document.getElementById("showface").style.display = "none";
    document.getElementById("nwhdBarface").style.display = "block";
}


function downloadCanvas(e, a, t) {
    (e.href = document.getElementById(a).toDataURL()), (e.download = t);

}


var dlToolLink = document.querySelector("#download")
var isDlTool = !1, dlTool = document.querySelector(".dl");
dlToolLink.addEventListener("click", function () { (isDlTool = !isDlTool), isDlTool && (dlTool.classList.add("active"), setTimeout(function () { dlTool.classList.remove("active"); }, 250)), downloadCanvas(this, "draw", "picpixel.png"); }, !1);




$("#btnSaveSig").click(function (e) {
    html2canvas([document.getElementById('draw')], {
        onrendered: function (canvas) {
            var canvas_img_data = canvas.toDataURL('image/png');
            var img_data = canvas_img_data.replace(/^data:image\/(png|jpg);base64,/, "");
            //ajax call to save image inside folder
            $.ajax({
                url: 'save.php',
                type: 'post',
                dataType: 'json',
                data: { img_data: img_data },
                success: function (response) {
                    strokes = [];
                    redraw();
                    alert("Success !")
                    window.location.reload();
                },
                error: function (err) {
                    alert("Can't Saved !")
                }
            });
        }
    });
});

let imgInput = document.getElementById('imageLoader');
imgInput.addEventListener('change', function (e) {
    if (e.target.files) {
        let imageFile = e.target.files[0]; //here we get the image file
        var reader = new FileReader();
        reader.readAsDataURL(imageFile);
        reader.onloadend = function (e) {
            var myImage = new Image(); // Creates image object
            myImage.src = e.target.result; // Assigns converted image to image object
            myImage.onload = function (ev) {
                var myCanvas = document.getElementById("draw"); // Creates a canvas object
                var ctx = myCanvas.getContext("2d"); // Creates a contect object
                myCanvas.width = window.innerWidth; // Assigns image's width to canvas
                myCanvas.height = window.innerHeight; // Assigns image's height to canvas
                ctx.drawImage(myImage, 0, 0); // Draws the image on canvas
                let imgData = myCanvas.toDataURL("image/jpeg", 0.75); // Assigns image base64 string in jpeg format to a variable
            }
        }
    }
});


function checkSteateSelectColor(){

    if(stateSelectColor === 'auto'){
        callFirebase()
    }

}


function _stateSelectColor(state){
    stateSelectColor = state
}

function callInput() {
    document.getElementById("imageLoader").click();
}



function setBrush(brushlineCap) {
    statelineCap = brushlineCap
}

function setColor(value){
    brush.color = value
    document.getElementById("color-picker").value = value
}

function getRandomInt(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}


function drawPixels(x, y) {
    for (var i = -10; i < 10; i += 4) {
        for (var j = -10; j < 10; j += 4) {
            if (Math.random() > 0.5) {
                ctx.fillStyle = ['red', 'orange', 'yellow', 'green',
                    'light-blue', 'blue', 'purple'][getRandomInt(0, 6)];
                ctx.fillRect(x + i, y + j, 4, 4);
            }
        }
    }
}


function callFirebase(){
    $.ajax({
        url: 'https://webhook-color-firebase.herokuapp.com/checkcolor',
        type: 'get',
        success: function (response) {
            document.getElementById("color-picker").value = response
            document.getElementById("dot-sensor-color").style.backgroundColor = response
            document.getElementById("input-sensor-color").placeholder = response
            brush.color = response
        },
        error: function (err) {
            alert("Can't Saved !")
        }
    });
}



var el = document.getElementById('c');
var ctx = el.getContext('2d');
var isDrawing;

el.onmousedown = function(e) {
  isDrawing = true;
  ctx.moveTo(e.clientX, e.clientY);
};
el.onmousemove = function(e) {
  if (isDrawing) {
    ctx.lineTo(e.clientX, e.clientY);
    ctx.stroke();
  }
};
el.onmouseup = function() {
  isDrawing = false;
};












