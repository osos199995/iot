@extends('layouts.admin')
@section('styles')
@stop
@section('content')
    @if (Session::has('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
    @elseif(Session::has('danger'))
        <div class="alert alert-danger">{{ Session::get('danger') }}</div>
    @endif

    <div class="row">
        <div class="col-sm-12">
            <h4 class="m-t-0 header-title">pump control</h4>
            <div class="col-12">
                <label class="form-control">pump 1</label>
                <select name="order_status" onchange="changeStatus1({{$pump->id}},this.value)" id="order_status" class="form-control">
                    <option {{$pump->pump1==0?'selected':''}} value="0">turn on</option>
                    <option {{$pump->pump1==1?'selected':''}} value="1">turn off</option>

                </select>
            </div>
            <hr>

            <div class="col-12">
                <label class="form-control">pump 2</label>
                <select name="order_status" onchange="changeStatus2({{$pump->id}},this.value)" id="order_status" class="form-control">
                    <option {{$pump->pump2==0?'selected':''}} value="0">turn on</option>
                    <option {{$pump->pump2==1?'selected':''}} value="1">turn off</option>

                </select>
            </div>

        </div>
    </div>




    <!-- Single button -->


    </div>
    </div>
@stop
@section('scripts')

    {{--Ajax request for sub categoreies--}}
    <script type="text/javascript">
        function changeStatus1(id,statusId){
            $.ajax({
                url: window.location.origin+`/iot/public/pump1/${id}/${statusId}`,
                type: "GET",
                dataType: "json",
                success:function(data) {

                }
            });


        };


    </script>


    {{--Ajax request for sub categoreies--}}
    <script type="text/javascript">
        function changeStatus2(id,statusId){
            $.ajax({
                url: window.location.origin+`/iot/public/pump2/${id}/${statusId}`,
                type: "GET",
                dataType: "json",
                success:function(data) {

                }
            });


        };


    </script>

    <script src="{{asset('admin_assets/plugins/bootstrap-table/js/bootstrap-table.js')}}"></script>
    <script src="{{asset('admin_assets/pages/jquery.bs-table.js')}}"></script>

@stop













