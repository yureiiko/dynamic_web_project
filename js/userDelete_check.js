function checkDel(id,user) {
    document.getElementById("del").innerHTML = "Do you really want to delete the user "+id+"<br><button onclick='noDel();'>No</button><button onclick='yesDel("+id+","+user+");'>Yes</button>";
}
function noDel() {
    document.getElementById("del").innerHTML = "";
}
function yesDel(id,user) {
    jQuery.ajax({
        type: "POST",
        url: "deleteUser.php",
        dataType: "json",
        data: {userid: id, user: user},
        complete:function(obj, textstatus) {
            if ("success" in obj) {
                document.getElementById("del").innerHTML = "";
                document.getElementById(id).innerHTML = "";
            }
        }
    })
}