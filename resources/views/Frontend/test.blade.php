@foreach ($products as $product)

        <div class="card mr-2" style="height: 260px;width: 195px; float:left; padding:">
            <img src="{{ $product->images }}" class="card-img-top" alt="..." height="150px" width="195px" style="box-shadow: 0px 15px 10px -10px #111;">
            <div class="card-body" style="padding:0px;display="inline-flex" >
                <div class="row col-md-12" style="margin:0;padding: 5px;height:65px;">
                    <div class="px col-md-8">
                        <h6 class="card-title col-md-12" style="text-align: left;margin:0px;padding: 0px; font-size: 12px;">{{ $product->productName }}</h6>
                        <p style="font-size:8px"><span style="font-size:8px">{{ $product->price }}</span>per peice</p>
                    </div>
                     <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#showmodal{{$product->id}}" id="cart_button" style="font-size:8px;padding: 5px; background-color: #0A2A4c;height: 25px;margin-top: 8px;">
                         Add to cart
                    </button>
                                                <!-- Modal -->
                    <form action="{{url('/cart/add')}}/{{$product->id}}" method="post">
                        @csrf
                        <div class="modal fade" id="showmodal{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" data-toggle="modal" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <input type="hidden" name="productid" value="{{ $product->id }}">
                                <div class="modal-header">
                                    <div class="modal-title" id="exampleModalCenterTitle">
                                        <p>proid:{{$product->id}}</p>
                                        <p>note:1 {{ $product->productName }}  price {{ $product->price }} </p>
                                    </div>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="left_body col-md-4 md-3">
                                            <div class="image">
                                                <img src="{{ $product->images }}"  alt="" height="40px" width="40px" class="center">
                                                <p>{{ $product->productName }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="right_body col-md-12 md-3">
                                                <p>How many you want to give ?</p>
                                                <div class="enter_quantity">
                                                    <label for="amount text:right">Quantity</label>
                                                    <input type="number" class="quantity" id="quantity" name="quantity" placeholder="" required>
                                                    <div class="invalid-feedback">
                                                        Please enter how much you want to donate.
                                                    </div>
                                                </div>
                                                <div class="amount_total">
                                                    <p>total amount</p>
                                                    <h1>
                                                    <!-- total = price * quentity -->
                                                    </h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="row col-md-12" style="font-size: 12px;margin:0;padding-left:15px;padding-right:15px">
                    <div class="col-md-6" style="padding-left: 0px">
                        received
                    </div>
                    <div class="col-md-6" style="padding-right: 0px;text-align: right">
                        needed
                    </div>
                </div>
                <div style="padding-left:15px;padding-right:15px">
                <div class="progress mb-2" style="padding:0px">
                    <div class="progress-bar" style="display: inline;" role="progressbar"  aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                        <div class="row product_quantity">
                            <div class="received_product mx-3">
                                <p class="text-left">{{ $product->qtyreceived }}</p>
                            </div>
                            <div class="needed_product">
                                <p class="text-right" style="margin-left: 105px">{{ $product->qtyneed  }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
    </div>

@endforeach

