@extends('dashboard.main')

@section('content')

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Replacement</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-md-8">
                      <div class="card">
                          <div class="card-header bg-default text-center">Application for Replacement of ID/Card</div>

                          <div class="card-body">
                              @if (session('status'))
                                  <div class="alert alert-success" role="alert">
                                      {{ session('status') }}
                                  </div>
                              @endif
                              
                              <form action="{{url('dashboard')}}" method="POST" enctype="multipart/form-data">
                                  @csrf

                                  <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Enter your ID Number" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                      <button class="btn btn-outline-primary" type="button">Confirm Identity</button>
                                    </div>
                                  </div><br><br>


                                  <div class="row">
                                      <div class="col">
                                       <label>First Name</label>
                                       <fieldset disabled="">
                                       <input type="text" class="form-control" name="name" placeholder="{{ Auth::user()->name }}">
                                       </fieldset>
                                      </div>
                                       <div class="col">
                                       <label>Middle Name</label>
                                        <fieldset disabled="">
                                       <input type="text" class="form-control" name="middle_name" placeholder="">
                                       </fieldset>                           
                                   </div>
                                      <div class="col">
                                       <label>Last Name</label>
                                        <fieldset disabled="">
                                       <input type="text" class="form-control" name="lname" placeholder="">
                                       </fieldset>

                                      </div>
                                  </div><br>

                                   <div class="row">
                                      <div class="col">
                                       <label>Date of Birth</label>
                                       <fieldset disabled="">
                                       <input type="text" class="form-control" name="dob" placeholder="">
                                       </fieldset>
                                      </div>
                                      <div class="col">
                                       <label>Gender</label>
                                        <fieldset disabled="">
                                       <input type="text" class="form-control" name="gender" placeholder="">
                                      </div>
                                      <div class="col">
                                           <fieldset disabled="">
                                       <label>Home District</label>
                                       <input type="text" class="form-control" name="district" placeholder="">
                                      </div>
                                  </div><br>
                                  
                                      <div class="row">
                                      <div class="col">
                                       <label>Division</label>
                                       <fieldset disabled="">
                                       <input type="text" class="form-control" name="division" placeholder="">
                                       </fieldset>
                                      </div>
                                      <div class="col">
                                           <fieldset disabled="">
                                       <label>Location </label>
                                       <input type="text" class="form-control" name="location" placeholder="">
                                       </fieldset>
                                      </div>
                                      <div class="col">
                                           <fieldset disabled="">
                                       <label>Sub-Location</label>
                                       <input type="text" class="form-control" name="sub_location" placeholder="">
                                       </fieldset>
                                      </div>
                                  </div><br>

                                   <div class="form-group">
                                       <div class="row">
                                      <div class="col">
                                       <label>Reason for Replacement</label>
                                         <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                          <option selected>Choose...</option>
                                          <option value="1">Lost ID Card</option>
                                          <option value="2">Torned ID Card</option>
                                          <option value="3">Worn out or mutilate ID Card</option>
                                        </select>
                                   </div>
                                   </div> <br> 
                                  <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="filename">
                                    <label class="custom-file-label" for="customFile">Upload supporting documents</label>
                                  </div>
                                  <br><br>

                                  <button class="btn btn-primary" type="submit">Submit form</button>
                              </form>
                              
                          </div>
                      </div>
                  </div>
              </div>
          </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

@endsection