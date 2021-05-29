@extends('layouts.app')
@section('front-title' , 'UG pharma | Cart')
@section('front-content')

    <section class="confirm mt-5 mb-5 pt-5 pb-5">
        <div class="container">
            @include('backend.alert')

            <table id="cart" class="table table-hover table-condensed">
                <thead>
                <tr>
                    <th style="width:50%">Product</th>
                    <th style="width:10%">Price</th>
                    <th style="width:8%">Quantity</th>
                    <th style="width:22%" class="text-center">Subtotal</th>
                    <th style="width:10%"></th>
                </tr>
                </thead>
                <tbody>
                <?php $total = 0 ?>
                  @if(session('cart'))
                    @foreach(session('cart') as $id => $details)
                        <?php $total += $details['price'] * $details['quantity'] ?>
                        <tr product-id="{{$id}}">
                            <td data-th="Product">
                                <div class="row">
                                    <div class="col-sm-3 hidden-xs">
                                        @foreach(explode("|",$details['images']) as $image)
                                            @if ($loop->first)
                                                <div class="swiper-slide">
                                                    <div class="img-container w-100">
                                                        <img src="{{asset('images/products/' . $image)}}" class="img-fluid" />
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="nomargin">{{ $details['name'] }}</h4>
                                    </div>
                                </div>
                            </td>
                            <td class="price" data-th="Price">{{ $details['price'] }} L.E</td>
                            <td data-th="Quantity">
                                <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity" />
                            </td>
                            <td data-th="Subtotal-{{$id}}" class="text-center">{{ $details['price'] * $details['quantity'] }} L.E</td>
                            <td class="actions" data-th="">
                                <button class="btn btn-info btn-sm update-cart" data-id="{{ $id }}"><i class="fas fa-sync"></i></button>
                                <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>
                    @endforeach
                    @else
                        <div class="alert alert-danger"> Your Cart Is Empty ..!</div>
                    @endif
                </tbody>
            </table>


            @if(session('cart'))

            <div class="final-detail">
                <div>
                    <p>Sub Total : <span> {{ $total }} L.E</span></p>
                    <p>shipping : <span><?php echo $shipping=20; ?> L.E</span></p>
                    <p>Total : <span>{{$total + $shipping}} L.E</span></p>
                </div>
            </div>
            @endif

            <div class="buttom mt-5 text-center d-flex justify-content-between">

                <a class="btn btn-outline rounded-pill" href="{{route('home')}}" role="button">
                    <i class="fas fa-arrow-alt-circle-left"></i>
                    Continue Shopping</a>
                @if(session('cart'))
                <a class="btn btn-outline rounded-pill" href="checkout.html" role="button">Check Out <i class="fas fa-check"></i> </a>
                @endif
            </div>
        </div>
    </section>


@section('front-scripts')
    <script>

        $(".update-cart").click(function (e) {
            e.preventDefault();

            var ele = $(this);

            $.ajax({
                url: '{{ url('update-cart') }}',
                method: "patch",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.attr("data-id"),
                    quantity: ele.parents("tr").find(".quantity").val(),
                    price: ele.parents("tr").find(".price").val()
                },
                    success: function (data) {

                    }
            });
        });

        $(".remove-from-cart").click(function (e) {
            e.preventDefault();

            var ele = $(this);

            if(confirm("Are you sure")) {
                $.ajax({
                    url: '{{ url('remove-from-cart') }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}',
                        id: ele.attr("data-id")},
                    success: function (response) {
                        ele.parent().parent().remove();
                    }
                });
            }
        });

    </script>

@endsection



@endsection
