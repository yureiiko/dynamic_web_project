function checkDel(id, table) {
    document.getElementById("del").innerHTML = "Do you really want to delete the product "+id+"<br><button onclick='noDel();'>No</button><button onclick='yesDel("+id+","+table+");'>Yes</button>";
}
function noDel() {
    document.getElementById("del").innerHTML = "";
}
function yesDel(id, table) {
    jQuery.ajax({
        type: "POST",
        url: "../admin/deleteprod.php",
        dataType: "json",
        data: {prodid: id, table: table},
        complete:function(obj, textstatus) {
            if ("success" in obj) {
                document.getElementById("del").innerHTML = "";
                document.getElementById(id).innerHTML = "";
            }
        }
    })
}