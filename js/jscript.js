function changeImage() {
    var img = document.getElementById('myImage');
    if (img.src.match("img/min.png")) {
        img.src = "img/white.png";
    } 
    else {
        img.src = "img/min.png";
    }
}