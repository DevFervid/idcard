@extends('dashboard.main')

@section('content')
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Change Particulars</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header bg-default text-center">Application for Change of Particulars in ID/Card</div>

                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                <div class="input-group mb-3">
                                      <input type="text" class="form-control" placeholder="Enter your ID Number" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                      <div class="input-group-append">
                                        <button class="btn btn-outline-primary" type="button">Confirm Identity</button>
                                      </div>
                                    </div><br><br>
                                
                                <form action="{{url('applications')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col">
                                         <label>First Name</label>
                                         <fieldset disabled="">
                                         <input type="text" class="form-control" name="fname" placeholder="{{ Auth::user()->fname }}">
                                         </fieldset>
                                        </div>
                                        <div class="col">
                                         <label>Middle Name</label>
                                         <input type="text" class="form-control"  name="mname" placeholder="">
                                        </div>
                                        <div class="col">
                                         <label>Last Name</label>
                                         <input type="text" class="form-control" name="lname" placeholder="">
                                        </div>
                                    </div><br>
                                     <div class="form-group">
                                        <label for="formGroupExampleInput">Date of Birth</label>
                                        <input type="text" class="form-control" name="date"  placeholder="">
                                     </div>  
                                     <br>
                                    
                                    <select class="custom-select">
                                      <option selected>Select Marital Status</option>
                                      <option value="1">Single</option>
                                      <option value="2">Married</option>
                                      <option value="3">Divorced</option>
                                      <option value="4">Widowed</option>
                                    </select>
                                    <br><br>
                                     <div class="row">
                                        <div class="col">
                                         <label>Husband's Full Name</label>
                                         <input type="text" class="form-control" name="husband_name" placeholder="">
                                        </div>
                                        <div class="col">
                                         <label>Husband's ID/NO</label>
                                         <input type="text" class="form-control" name="husband_idno" placeholder="">
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col">
                                         <label>Clan</label>
                                         <input type="text" class="form-control" name="clan" placeholder="">
                                        </div>
                                        <div class="col">
                                         <label>Home District</label>
                                           <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                                <option selected>Choose...</option>
                                                <option value="1">Kitui West District</option>
                                                <option value="2">Gatundu District</option>
                                                <option value="3">Bondo District</option>
                                                <option value="4">Busia District</option>
                                                <option value="5">Kakamega District</option>
                                              </select>
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col">
                                         <label>Division</label>
                                           <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                            <option selected>Choose...</option>
                                            <option value="1">Mwingi Division</option>
                                            <option value="2">Limuru Division</option>
                                            <option value="3">Butula Division</option>
                                            <option value="4">Webuye Division</option>
                                            <option value="5">Kabarnet Division</option>
                                          </select>
                                        </div>
                                        <div class="col">
                                         <label>Constituency</label>
                                           <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                            <option selected>Choose...</option>
                                            <option value="1">Mwingi West</option>
                                            <option value="2">Gatundu South</option>
                                            <option value="3">Kisumu East</option>
                                            <option value="4">Mumias East</option>
                                            <option value="5">Saboti</option>
                                          </select>
                                        </div>
                                        <div class="col">
                                         <label>Location</label>
                                           <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                            <option selected>Choose...</option>
                                            <option value="1">Migwani</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                            <option value="4">Three</option>
                                            <option value="5">Three</option>
                                          </select>
                                        </div>
                                    </div><br>
                                        <div class="row">
                                        <div class="col">
                                         <label>Sub-location</label>
                                           <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                                <option selected>Choose...</option>
                                                <option value="1">Itoloni</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                                <option value="4">Three</option>
                                                <option value="5">Three</option>
                                              </select>
                                        </div>
                                        <div class="col">
                                         <label>Village</label>
                                           <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                            <option selected>Choose...</option>
                                            <option value="1">Kamutisya</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                            <option value="3">Three</option>
                                            <option value="3">Three</option>
                                          </select>
                                        </div>
                                        <div class="col">
                                         <label>Home Address</label>
                                         <input type="text" class="form-control" name="home_address" placeholder="">
                                        </div>
                                        
                                    </div><br>

                                     <div class="form-group">
                                        <label for="formGroupExampleInput">Occupation</label>
                                        <input type="text" class="form-control" name="Occupation" placeholder="">
                                     </div>

                                        <div class="form-group">
                                         <div class="row">
                                        <div class="col">
                                         <label>Reason for Change</label>
                                           <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                            <option selected>Choose...</option>
                                            <option value="1">Upon Marriage</option>
                                            <option value="2">Change of Location</option>
                                            <option value="3">Additional Name</option>
                                            
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
