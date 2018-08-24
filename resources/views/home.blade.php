@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-default text-center">Application For Identity Card</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        
                        <form action="{{url('applications')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col">
                                 <label>First Name</label>
                                 <fieldset disabled="">
                                 <input type="text" class="form-control" name="name" placeholder="{{ Auth::user()->name }}">
                                 </fieldset>
                                </div>
                                <div class="col">
                                 <label>Middle Name</label>
                                 <input type="text" class="form-control" name="middle_name" placeholder="">
                                </div>
                                <div class="col">
                                 <label>Last Name</label>
                                 <input type="text" class="form-control" name="lname" placeholder="">
                                </div>
                            </div><br>
                             <div class="form-group">
                                <label for="date">Date of Birth</label>
                                <input class="form-control"  type="text" id="datepicker" name="date"> 
                             </div>  
                             <br>
                            <div class="form-group">
                                <select class="custom-select">
                                  <option selected>Select Gender</option>
                                  <option value="1">Male</option>
                                  <option value="2">Female</option>
                                </select>
                            </div>
                            <br><br>
                             <div class="row">
                                <div class="col">
                                 <label>Father's Name</label>
                                 <input type="text" class="form-control" name="fathers_name" placeholder="">
                                </div>
                                <div class="col">
                                 <label>Mother's Name</label>
                                 <input type="text" class="form-control" name="mothers_name" placeholder="">
                                </div>
                            </div><br>
                            <div class="form-group">
                                <select class="custom-select">
                                  <option selected>Select Marital Status</option>
                                  <option value="1">Single</option>
                                  <option value="2">Married</option>
                                  <option value="3">Divorced</option>
                                  <option value="4">Widowed</option>
                                </select>
                            </div>
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
                                 <label>Tribe</label>
                                   <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                    <option selected>Choose...</option>
                                    <option value="1">Kamba</option>
                                    <option value="2">Kikuyu</option>
                                    <option value="3">Luo</option>
                                    <option value="4">Luhya</option>
                                    <option value="5">Kalenjin</option>
                                  </select>
                             </div>
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
                                    <option value="2">Kogalo</option>
                                    <option value="3">Bondo</option>
                                    <option value="4">kabarnet</option>
                                    <option value="5">Kisumu central</option>
                                  </select>
                                </div>
                            </div><br>
                                <div class="row">
                                <div class="col">
                                 <label>Sub-location</label>
                                   <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                        <option selected>Choose...</option>
                                        <option value="1">Itoloni</option>
                                        <option value="2">Nyando</option>
                                        <option value="3">Nyakach</option>
                                        <option value="4">Makueni</option>
                                        <option value="5">Moyale</option>
                                      </select>
                                </div>
                                <div class="col">
                                 <label>Village</label>
                                   <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                    <option selected>Choose...</option>
                                    <option value="1">Kamutisya</option>
                                    <option value="2">sotik</option>
                                    <option value="3">siakago</option>
                                    <option value="3">Juja</option>
                                    <option value="3">Thika Town</option>
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
                             </div> <br> 
                            <div class="form-group">
                                <label for="filename">Upload supporting documents</label>
                                <input type="file" class="form-control-file" id="filename" name="filename">
                            </div>
                            <br><br>

                            <button class="btn btn-primary" type="submit">Submit form</button>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
