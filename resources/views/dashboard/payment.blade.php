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
                                  <div>
                                    <h3>Lipa na Mpesa</h3>
                                    <ol class="list">
                                    <li class="list-item">Go to Mpesa</li>
                                    <li class="list-item">Lipa na Mpesa</li>
                                    <li class="list-item">Buy Goods and Services</li>
                                    <li class="list-item">Enter Till No. 100011</li>
                                    <li class="list-item">Enter Amount</li>
                                  </ol>
                                  </div><br>

                                  <div class="input-group mb-4 col-lg-6">
                                    <label>Mpesa Confirmation Code:</label>
                                    <input type="text" class="form-control" placeholder="e.g MH34UWYR60" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                    <br><br><br><br>
                                    <div class="input-group-append">
                                      <button class="btn btn-outline-primary" type="button">Submit</button>
                                    </div>
                                  </div><br><br>
        </div>
        <!-- /#page-wrapper -->

@endsection