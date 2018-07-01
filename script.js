function updateDVD1Price(){
    var quantity = parseInt(document.getElementById("quantityDVD1").value);
    var totalPrice = 17.00 * quantity;
    document.getElementById("season1price").value = totalPrice;
}
function updateDVD2Price(){
    var quantity = parseInt(document.getElementById("quantityDVD2").value);
    var totalPrice = 22.50 * quantity;
    document.getElementById("season2price").value = totalPrice;
}
function updateDVD3Price(){
    var quantity = parseInt(document.getElementById("quantityDVD3").value);
    var totalPrice = 26.75 * quantity;
    document.getElementById("season3price").value = totalPrice;
}
function updateBluray1Price(){
    var quantity = parseInt(document.getElementById("quantityBluray1").value);
    var totalPrice = 17.00 * quantity;
    document.getElementById("season11price").value = totalPrice;
}
function updateBluray2Price(){
    var quantity = parseInt(document.getElementById("quantityBluray2").value);
    var totalPrice = 22.50 * quantity;
    document.getElementById("season12price").value = totalPrice;
}
function updateBluray3Price(){
    var quantity = parseInt(document.getElementById("quantityBluray3").value);
    var totalPrice = 26.75 * quantity;
    document.getElementById("season13price").value = totalPrice;
}