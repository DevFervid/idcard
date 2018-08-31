@extends('dashboard.main')

@section('content')

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Identity Confirmation</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-md-8">
                      <div class="card">
                          <div class="card-header bg-default text-center"></div>

                          <div class="card-body">
                              @if (session('status'))
                                  <div class="alert alert-success" role="alert">
                                      {{ session('status') }}
                                  </div>
                              @endif
                              
                              <form action="{{ url('dashboard/particulars')}}" method="get">
                                  @csrf
                                  
                                  <div class="input-group mb-3">
                                    
                                    <label for="">National ID</label>
                                    <input type="number" class="form-control" id="trans" name="idno" value="" required="">
                                    <br><br><br>
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-primary" type="submit">Confirm Identity <span class="fa fa-check-circle-o"></span>
                                        </button>         
                                    </div>
                                  </div>
        </div>
        <!-- /#page-wrapper -->

@endsection