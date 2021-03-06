@extends('dashboard.main')

@section('content')

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Replacement of ID/Card</h1>
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
                              
                              <form action="{{url('dashboard')}}" method="POST" enctype="multipart/form-data">
                                  @csrf

                                   <div class="input-group mb-2 col-lg-10">
                                       <label>First Name</label>
                                       <fieldset disabled="">
                                       <input type="text" class="form-control" name="name" placeholder="{{ Auth::user()->name }}">
                                       </fieldset>
                                      </div><br>
                                        <div class="input-group mb-2 col-lg-10">
                                       <label>Middle Name</label>
                                        
                                       <input type="text" class="form-control" name="middle_name" placeholder="">
                                       </fieldset>                           
                                   </div><br>
                                       <div class="input-group mb-2 col-lg-10">
                                       <label>Last Name</label>
                                       <input type="text" class="form-control" name="lname" placeholder="">
                                       </fieldset>

                                      </div>
                                  </div><br>

                                    <div class="input-group mb-2 col-lg-10">
                                       <label>Date of Birth</label>
                                       
                                       <input type="text" class="form-control" name="dob" placeholder="">
                                       </fieldset>
                                      </div><br>
                                      <div class="input-group mb-2 col-lg-10">
                                       <label>Gender</label>
                                        
                                       <input type="text" class="form-control" name="gender" placeholder="">
                                      </div><br>
                                       <div class="input-group mb-2 col-lg-10">
                                    
                                       <label>Home District</label>
                                       <input type="text" class="form-control" name="district" placeholder="">
                                      </div>
                                  </div><br>
                                  
                                       <div class="input-group mb-2 col-lg-10">
                                       <label>Division</label>
                                       
                                       <input type="text" class="form-control" name="division" placeholder="">
                                       </fieldset>
                                      </div><br>
                                      <div class="input-group mb-2 col-lg-10">
                                        
                                       <label>Location </label>
                                       <input type="text" class="form-control" name="location" placeholder="">
                                       </fieldset>
                                      </div><br>
                                      <div class="input-group mb-2 col-lg-10">
                                          
                                       <label>Sub-Location</label>
                                       <input type="text" class="form-control" name="sub_location" placeholder="">
                                       </fieldset>
                                      </div><br>

                                   <div class="form-group">
                                      <div class="input-group mb-2 col-lg-10">
                                       <label>Reason for Replacement : </label>
                                         <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                          <option selected>Choose...</option>
                                          <option value="1">Lost ID Card</option>
                                          <option value="2">Torned ID Card</option>
                                          <option value="3">Worn out or mutilate ID Card</option>
                                        </select>
                                   </div>
                                   </div> <br> 
                                  <div class="custom-file">
                                      <label class="custom-file-label" for="customFile">Upload supporting documents</label>
                                    <input type="file" class="custom-file-input" name="filename">
                                  </div>
                                  <br><br>

                                  <a href="{{url ('dashboard/payment1')}}">
                                        <button class="btn btn-primary" type="button">Submit form</button>
                                  </a>
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