

function addToCart(event){

    event.preventDefault();


    let urlCart = $(this).data('url');

    $.ajax({
        type: 'GET',
        url: urlCart,
        dataType: 'json',
        success: function(data){
           if(data.code === 200){
               alert('Thêm sản phẩm vào giỏ hàng thành công');

           } 

        },
        error:function(){

        }

    })

}

function cartUpdate(event){
    event.preventDefault();

     let urlUpdatCart = $('.update_cart_url').data('url');

     let id  = $(this).data('id');
     let quantity  = $(this).parents('tr').find('input.quantity').val();
     $.ajax({
        type: 'GET',
        url: urlUpdatCart,
        data: {id: id ,quantity :quantity},
        success: function(data){
            if(data.code===200){
                $('#cart_items').html(data.cartCompondent);
                alert("Cập nhật thành công");

            }

        },
         error:function(){

         }
    })
}



function cartDelete(event){

    event.preventDefault();
    let urldeletCart = $('.carts-cmt').data('url');
    let id  = $(this).data('id');
    $.ajax({
        type: 'GET',
        url: urldeletCart,
        data: {id: id },
        success: function(data){
            if(data.code===200){
                $('#cart_items').html(data.cartCompondent);
                alert("Xóa sản phẩm  thành công");

            }

        },
         error:function(){

         }
    })




}

$(function(){
    $('.add-to-cart').on('click' , addToCart);
 
    $('.quantity').on('change', function(){
        $('.cart-update').on('click' , cartUpdate);


    })
    
    $(document).on('click' , '.cart-delete' , cartDelete)

})