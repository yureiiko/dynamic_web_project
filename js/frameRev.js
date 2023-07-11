function revFrame(id) {
    for (var i=0 ; i<3 ; i++) {
        var div = document.getElementById(i);
        if (i==id) {
            div.style.display="block";
        } else {
            div.style.display="none";
        }
    }
}
function revSubFrame(id) {
    for (var i=10 ; i<13 ; i++) {
        var div = document.getElementById(i);
        if (i==id) {
            div.style.display="block";
        } else {
            div.style.display="none";
        }
    }
}