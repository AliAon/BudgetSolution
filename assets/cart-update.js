
function cart_quintity_request(){
    var update_cart_btn=document.getElementById("update_cart");
    update_cart_btn.addEventListener('click',function(e){
        e.preventDefault();
        const quintity = {};
        var inputs=document.getElementsByClassName('cart-plus-minus-box');
    for(let input of inputs) {
        quintity[input.id]=input.value;
    }
    console.log(quintity);
    const data=JSON.stringify(quintity);
    var httpRequest = new XMLHttpRequest();
    httpRequest.open('POST','cart-update.php',true);
        httpRequest.send(data);
      //  cart_quintity_response();
    });

}

cart_quintity_request();
