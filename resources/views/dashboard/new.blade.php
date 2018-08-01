@extends('dashboard.main')

@section('content')
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">National ID Application System</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="container">
                      <form method="post" action="{{url('applicants')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                          <div class="col-md-4"></div>
                          <div class="form-group col-md-4">
                            <label for="First Name">First Name:</label>
                            <input type="text" class="form-control" name="fname">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-4"></div>
                          <div class="form-group col-md-4">
                            <label for="Middel Name">Middel Name:</label>
                            <input type="text" class="form-control" name="mname">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-4"></div>
                          <div class="form-group col-md-4">
                            <label for="Last Name">Last Name:</label>
                            <input type="text" class="form-control" name="lname">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-4"></div>
                          <div class="form-group col-md-4">
                            <strong>Date Of Birth : </strong>  
                            <input class="date form-control"  type="text" id="datepicker" name="date">   
                         </div>
                        </div>
                        <div class="row">
                          <div class="col-md-4"></div>
                            <div class="form-group col-md-4">
                                <lable>Gender</lable>
                                <select name="gender">
                                  <option value="Male">Male</option>
                                  <option value="Female">Female</option> 
                                </select>
                            </div>
                          </div>
                        <div class="row">
                          <div class="col-md-4"></div>
                          <div class="form-group col-md-4">
                            <label for="Fathers Name">Fathers Name:</label>
                            <input type="text" class="form-control" name="fathers_name">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-4"></div>
                          <div class="form-group col-md-4">
                            <label for="Mothers Name">Mothers Name:</label>
                            <input type="text" class="form-control" name="mothers_name">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-4"></div>
                            <div class="form-group col-md-4">
                                <lable>Marital</lable>
                                <select name="marital">
                                  <option value="Single">Single</option>
                                  <option value="Married">Married</option> 
                                  <option value="Divorced">Divorced</option> 
                                  <option value="Widowed">Widowed</option> 
                                </select>
                            </div>
                          </div>
                        <div class="row">
                          <div class="col-md-4"></div>
                          <div class="form-group col-md-4">
                            <label for="Husband Name">Husband Name:</label>
                            <input type="text" class="form-control" name="husband_name">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-4"></div>
                          <div class="form-group col-md-4">
                            <label for="Fathers Name">Husband ID:</label>
                            <input type="text" class="form-control" name="husband_idno">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-4"></div>
                            <div class="form-group col-md-4">
                                <lable>Tribe</lable>
                                <select name="tribe">
                                  <option selected>Choose...</option>
                                  <option value="Kamba">Kamba</option>
                                  <option value="Kikuyu">Kikuyu</option> 
                                  <option value="Luo">Luo</option> 
                                  <option value="Luhya">Luhya</option> 
                                  <option value="Kalenjin">Kalenjin</option> 
                                </select>
                            </div>
                          </div>
                        <div class="row">
                          <div class="col-md-4"></div>
                            <div class="form-group col-md-4">
                              <label for="Clan">Clan:</label>
                              <input type="text" class="form-control" name="clan">
                            </div>
                          </div>
                        <div class="row">
                          <div class="col-md-4"></div>
                            <div class="form-group col-md-4">
                                <lable>Home District</lable>
                                <select name="district">
                                  <option selected>Choose...</option>
                                  <option value="Kitui West District">Kitui West District</option>
                                  <option value="Gatundu District">Gatundu District</option> 
                                  <option value="Bondo District">Bondo District</option> 
                                  <option value="Busia District">Busia District</option> 
                                  <option value="Kakamega District">Kakamega District</option> 
                                </select>
                            </div>
                          </div>
                        <div class="row">
                          <div class="col-md-4"></div>
                            <div class="form-group col-md-4">
                                <lable>Division</lable>
                                <select name="division">
                                  <option selected>Choose...</option>
                                  <option value="Mwingi Division">Mwingi Division</option>
                                  <option value="Limuru Division">Limuru Division</option> 
                                  <option value="Butula Division">Butula Division</option> 
                                  <option value="Webuye Division">Webuye Division</option> 
                                  <option value="Kabarnet Division">Kabarnet Division</option> 
                                </select>
                            </div>
                          </div>
                        <div class="row">
                          <div class="col-md-4"></div>
                            <div class="form-group col-md-4">
                                <lable>Constituency</lable>
                                <select name="constituency">
                                  <option selected>Choose...</option>
                                  <option value="Mwinci West">Mwinci West</option>
                                  <option value="Gatundu South">Gatundu South</option> 
                                  <option value="Kisumu West">Kisumu West</option> 
                                  <option value="Mumias East">Mumias East</option> 
                                  <option value="Saboti">Saboti</option> 
                                </select>
                            </div>
                          </div>
                        <div class="row">
                          <div class="col-md-4"></div>
                            <div class="form-group col-md-4">
                                <lable>Location</lable>
                                <select name="location">
                                  <option selected>Choose...</option>
                                  <option value="Migwani">Migwani</option>
                                  <option value="One">One</option> 
                                  <option value="Two">Two</option> 
                                  <option value="Three">Three</option> 
                                  <option value="Location4">Location4</option> 
                                </select>
                            </div>
                          </div>
                        <div class="row">
                          <div class="col-md-4"></div>
                            <div class="form-group col-md-4">
                                <lable>Sub-location</lable>
                                <select name="sub_location">
                                  <option selected>Choose...</option>
                                  <option value="Itoloni">Itoloni</option>
                                  <option value="One">One</option> 
                                  <option value="Two">Two</option> 
                                  <option value="Three">Three</option> 
                                  <option value="Four">Four</option> 
                                </select>
                            </div>
                          </div>
                        <div class="row">
                          <div class="col-md-4"></div>
                            <div class="form-group col-md-4">
                                <lable>Village</lable>
                                <select name="village">
                                  <option selected>Choose...</option>
                                  <option value="Kamutisya">Kamutisya</option>
                                  <option value="One">One</option> 
                                  <option value="Two">Two</option> 
                                  <option value="Three">Three</option> 
                                  <option value="Four">Four</option> 
                                </select>
                            </div>
                          </div>
                        <div class="row">
                          <div class="col-md-4"></div>
                            <div class="form-group col-md-4">
                              <label for="Number">Home Address:</label>
                              <input type="text" class="form-control" name="home_address">
                            </div>
                          </div>
                        <div class="row">
                          <div class="col-md-4"></div>
                            <div class="form-group col-md-4">
                              <label for="Number">Occupation:</label>
                              <input type="text" class="form-control" name="occupation">
                            </div>
                          </div>
                        <div class="row">
                          <div class="col-md-4"></div>
                          <div class="form-group col-md-4">
                            <input type="file" name="image">    
                         </div>
                        </div>
                        <div class="row">
                          <div class="col-md-4"></div>
                          <div class="form-group col-md-4" style="margin-top:60px">
                            <button type="submit" class="btn btn-success">Submit</button>
                          </div>
                        </div>
                      </form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection