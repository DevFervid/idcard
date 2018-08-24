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
                              
                              <form action="{{url('applications')}}" method="POST" enctype="multipart/form-data">
                                  @csrf

                                  <div class="input-group mb-3">
                                    <input type="number" class="form-control" placeholder="Enter your ID Number" aria-label="Recipient's username" aria-describedby="basic-addon2" required="">
                                    <br><br>
                                    <div class="input-group-append">
                                      <a href="{{url ('dashboard/replace')}}">
                                        <button class="btn btn-outline-primary" type="button">Confirm Identity</button>
                                      </a>
                                      
                                    </div>
                                  </div><br><br>
        </div>
        <!-- /#page-wrapper -->

@endsection