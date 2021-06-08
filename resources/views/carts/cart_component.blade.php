<div class="container carts-cmt" data-url="{{ route('deleteCart') }}">
    <div class="breadcrumbs">
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li class="active">Shopping Cart</li>
        </ol>
    </div>
    <div class="table-responsive cart_info">
        <table class="table table-condensed update_cart_url" data-url="{{ route('updateCart') }}">
            <thead>
                <tr class="cart_menu">
                    <td class="image">Item</td>
                    <td class="description"></td>
                    <td class="price">Price</td>
                    <td class="quantity">Quantity</td>
                    <td class="total">Total</td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
                @php
                    $total = 0;
                @endphp
              
                @foreach ($carts  as $id =>  $cart)
                @php
                $total += $cart['price'] * $cart['quantity'] ;
                @endphp
                <tr>
                    <td class="cart_product">
                        <a href=""><img src="{{config('app.base_url').$cart['feature_image_path'] }}" alt=""></a>
                    </td>
                    <td class="cart_description">
                        <h4><a href="">{{ $cart['name'] }}</a></h4>
                        <p>Web ID: {{ $id }}</p>
                    </td>
                    <td class="cart_price">
                        <p>${{$cart['price']  }}</p>
                    </td>
                    <td class="cart_quantity">
                        <div class="cart_quantity_button">
                            <input class="cart_quantity_input quantity" type="number" min="1" name="quantity" value="{{ $cart['quantity']  }}"  size="2">
                        </div>
                    </td>
                    <td class="cart_total">
                        <p class="cart_total_price">${{ $cart['price'] * $cart['quantity'] }}</p>
                    </td>
                    <td >
                        <a  class="btn btn-secondary cart-update" data-id="{{ $id }}" href="">Update</a>
                        <a data-id="{{ $id }}" class="btn btn-success  cart-delete" href="">Xóa</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <section id="do_action">
        <div class="container">
          
            <div class="row">
                <div class="col-sm-6"> </div>
                
                <div class="col-sm-6">
                    <div class="total_area">
                        <ul>
                            <li>Total <span>${{ $total }}</span></li>
                        </ul>
                            <a class="btn btn-default update " href="#">Update</a>
                            <a class="btn btn-default check_out" href="">Check Out</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>