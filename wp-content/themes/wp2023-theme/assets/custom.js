console.log(custom_js_object);
function update_cart(){
    let options = {
        url: custom_js_object. ajaxurl+'?action=wp2023_update_cart' ,
        method: 'POST',
        dataType: 'json',
        data: jQuery('#form-cart').serialize(),
        success : function(res){
            console.log(res);
        },
    }
    jQuery.ajax(options);
}
function add_to_cart(){
    let product_qty = jQuery('#product_qty').val();
    let product_id = jQuery('#product_id').val();

    let options = {
        url: custom_js_object. ajaxurl ,
        type: 'POST',
        dataType: 'json',
        data: {
            action : 'wp2023_add_to_cart',
            nonce : custom_js_object.nonce,
            qty   : product_qty,
            product_id : product_id
        },
        success : function(res){
            console.log(res);
        },
    }
    jQuery.ajax(options);
}
jQuery(document). ready( function(){
   
    jQuery('#update_cart').click(function(){
        update_cart();
    });
    jQuery('#add_to_cart').click(function(){
        add_to_cart()
    })
});