<div style="height:360px;padding-top:5px">
        <div class="specificdonate_show" id="specificdonate_show" style="margin:15px;">
            <div class="col-md-12 donate_project">
                <div class="row">
                <div class="col-md-2">
                    <label for="project">Project:</label>
                </div>
                <div class="col-md-4">
                    <select name="project" id="project" class="project col-md-12 p-1" onchange="projectSelect()">
                        <option> Chose Project </option>
                        @foreach($projects as $project)
                            <option value='{{  $project->id}}'>{{ $project->projectName }}</option>
                        @endforeach
                    </select>
                    </div>
                    <div class="col-md-2">
                        <label for="donate_project_catagory">Catagory:</label>
                    </div>
                    <div class="col-md-4">
                        <select name="category" id="category" class="category col-md-12 p-1" onchange="categorySelect()">

                        </select>
                    </div>
                </div>
            </div>
            <div class="row col-md-12 mt-4" style="margin:0px;padding:0px">
                <div class="col-md-8" style="overflow:scroll;overflow-y:hidden">
                    <div class="product" id="product" style="display:inline-flex">

                    </div>
                </div>
                <div class="col-md-4" id="donation_cart">
                    <div class="card right_bottom_part_left col-sm-12 mr-3" style="height:200px; overflow: scroll;overflow-x:hidden;background-color:rgba(226, 226, 226, 0.7);">
                        <p style="text-align:center;">Donation Cart</p>
                            <!-- Cart information start-->
                            @include('Frontend.showCart')
                            <!-- Cart information end -->
                    </div>
                    <div class="col-md-12 mt-2">
                            {{-- style="position: absolute; bottom: 10px; right: 32px;" --}}
                        <div class="row total_amount" style="margin:0px;padding:0px">
                                {{-- style="float:right;margin-right: 80px;" --}}
                            <label class="col-md-4" for="">Total</label>
                            <input class="col-md-8" type="text" readonly name="total_amount_test" id="total_amount_test" value="{{Cart::subtotal()}}">
                        </div>
                </div>
            </div>
        </div>
    </div>
    <div style="right: 45px; bottom: 5px; position: absolute; padding: 0px;">
        <button class="btn btn-secondary" type="submit" style="border-radius: 0px; padding: 10px 30px 10px 30px;" onClick="refreshPage()">Refresh</button>
        <button class="btn btn-primary"  type="submit" style="border-radius: 0px; padding: 10px 30px 10px 30px;">Procced</button>
    </div>
</div>
