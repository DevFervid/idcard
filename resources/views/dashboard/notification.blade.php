@extends('dashboard.main')

@section('content')

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Payment</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="well well-lg">
              <div class="alert alert-success" role="alert">Payment done Successfully!<a href="{{url ('dashboard')}}"> click here to see you details</a></div>
            </div>
        </div>
        <!-- /#page-wrapper -->

@endsection