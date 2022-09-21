var i = 0;
var width = 0; //Set value
function move() {
if (i == 0) {
  
    var elem = document.getElementById("progressbar"); //get element
        width+=5;
        elem.style.width = width + "%"; //Update the style
        elem.innerHTML = width  + "%"; //Update the counter

        if(width > 100){
            var progressdiv = document.getElementById('progressbar');
            progressdiv.style.display = "none";
        }
    
}
}

function hideDiv(id) {
    
    // gets current div that triggered event
    var div = document.getElementById(id);
    // gets next div
    var nextDiv = document.getElementById(id + 1)
        // hides current div
    div.style.display = "none";
    //shows next div
    nextDiv.style.display = "block";
   move();
}

function showFirstDiv() {
    var div = document.getElementById('1');
    div.style.display = "block";
}

var i = 0;

function procent($partijScore, $id) {

    var progressBar = document.getElementById("progressbar" + $id);
    console.log(progressBar);
    // rounds result up
    $procentscore = Math.ceil($partijScore / 20 * 100);
    width = 100 - $procentscore;
    var resterend = 100 - width;
    document.getElementById("progressbar" + $id).style.cssText = `
    width: 0%;
    height: 30px;
    background-color: #1D1387;
    text-align: center;
    line-height: 30px;
    color: white;
    `;

    progressBar.innerHTML = $procentscore + "%"; //Update the counter
    progressBar.style.width = resterend + "%"; //Update the style
}