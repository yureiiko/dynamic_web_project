function addToCart(idProd) {
    console.log(idProd);
    jQuery.ajax({
        type: "POST",
        url: "addToCart.php",
        datatype: "json",
        data: {id_prod: idProd},
        complete:function(obj, textstatus) {
            if ("success" in obj) {
                window.location.href = "buyer_cart.php";
            }
        }
    });
}

function removeFromCart(idProd) {
    jQuery.ajax({
        type: "POST",
        url: "removeFromCart.php",
        datatype: "json",
        data: {id_prod: idProd},
        complete:function(obj, textstatus) {
            if ("success" in obj) {
                window.location.href = "buyer_cart.php";
            }
        }
    });
}