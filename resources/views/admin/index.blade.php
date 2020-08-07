@extends('layouts.admin')
@section('styles')
    <link href="{{asset('admin_assets/plugins/bootstrap-table/css/bootstrap-table.min.css')}}" rel="stylesheet" type="text/css" />
@stop
@section('content')
    @if (Session::has('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
    @elseif(Session::has('danger'))
        <div class="alert alert-danger">{{ Session::get('danger') }}</div>
    @endif

    <div class="row">
        <div class="col-sm-12">
            <h4 class="m-t-0 header-title">Meassuerments sheet</h4>

        </div>
    </div>
    <hr>
    <div class="row">
        <div class="card-box col-md-12">

            <table data-toggle="table"
                   data-page-list="[5, 10, 20]"
                   data-page-size="5"
                   data-pagination="true" class="table-bordered ">
                <thead>
                <tr>

                    <th>Temprature</th>
                    <th>Water Content</th>
                    <th>Humudity</th>
                    <th>soil Moisture1</th>
                    <th>soil Moisture2</th>
                    <th>Time</th>


                </tr>
                </thead>
                <tbody>
@foreach ($meassuerments as $meassure)


                <tr>

                    <td>{{$meassure->temprature}}</td>
                    <td>{{$meassure->humudity}}</td>
                    <td>{{$meassure->water_content}}</td>
                    <td>{{$meassure->soil_moisture1}}</td>
                    <td>{{$meassure->soil_moisture2}}</td>
                    <td>{{$meassure->created_at}}</td>


                    @endforeach
                </tr>



                </tbody>
            </table>
        </div>
    </div>
@stop
@section('scripts')
    <script src="{{asset('admin_assets/plugins/bootstrap-table/js/bootstrap-table.js')}}"></script>
    <script src="{{asset('admin_assets/pages/jquery.bs-table.js')}}"></script>
@stop













