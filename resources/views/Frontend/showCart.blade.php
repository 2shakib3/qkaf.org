
<div class="cartinfo">
    <table class="table table-striped table-bordered table-hover table-condensed" style="font-size:8px;padding:0px;">
        <thead>
        <tr>
            {{-- <th style="padding:.50rem">SL</th> --}}
            <th style="padding:.50rem">Item name</th>
            <th style="padding:.50rem">Quntity</th>
            {{-- <th style="padding:.50rem">price</th> --}}
            <th style="padding:.50rem">Sub_total</th>
            {{-- <th style="padding:.50rem">Grand_total</th> --}}
            {{-- <th style="padding:.50rem">Action</th> --}}
        </tr>
        </thead>
        @foreach ($cart as $e)
        <?php  $i = 1; ?>
        <tbody>
        <tr style="font-size:12px">
            {{-- <td style="padding:.50rem"> <?php   echo $i++; ?>
            </td> --}}
            <td style="padding:.50rem">{{$e->name}}</td>
            <td style="padding:.50rem">{{$e->qty}}</td>
            {{-- <td style="padding:.50rem">{{$e->price}}</td> --}}
            <td style="padding:.50rem">{{$e->price * $e->qty}}</td>
            {{-- <td rowspan="10">{{Cart::subtotal()}}</td> --}}
            {{-- <td style="text-align:center">
                <a href="#">
                    <i class="fas fa-edit"></i>
                </a>
                <a href="{{url('/cart/remove')}}">
                    <i class="fas fa-trash"></i>
                </a>
            </td> --}}
        </tr>
        <?php ?>
        </tbody>
        @endforeach
    </table>
</div>
{{-- <div>
    Grand_total <span>{{Cart::subtotal()}}</Span>
</div> --}}
