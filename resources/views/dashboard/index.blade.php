@extends('dashboard.main')

@section('content')

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">DASHBOARD</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
                <!-- /.row -->
    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Bar Chart Example
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div id="morris-bar-chart"></div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-6 -->
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Area Chart Example
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div id="morris-area-chart"></div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-6 -->                          
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Donut Chart Example
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div id="morris-donut-chart"></div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    DataTable For Applicants
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Middle Name</th>
                                <th>Last Name</th>
                                <th>NATIONAL ID</th>
                                <th>Date Of Birth</th>
                                <th>Gender</th>
                                <th>Father's Name</th>
                                <th>Mother's Name</th>
                                <th>Marital Status</th>
                                <th>Husband's Name</th>
                                <th>Husband's ID</th>
                                <th>Tribe</th>
                                <th>Clan</th>
                                <th>District</th>
                                <th>Division</th>
                                <th>Constituency</th>
                                <th>Location</th>
                                <th>Sub-Location</th>
                                <th>Village</th>
                                <th>Home Address</th>
                                <th>Occupation</th>
                                <th>File</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
          
                          @foreach($applicants as $applicant)
                          @php
                            $date=date('Y-m-d', $applicant['date']);
                            @endphp
                          <tr>
                            <td>{{$applicant['id']}}</td>
                            <td>{{$applicant['fname']}}</td>
                            <td>{{$applicant['mname']}}</td>
                            <td>{{$applicant['lname']}}</td>
                            <td>{{$applicant['number']}}</td>
                            <td>{{$date}}</td>
                            <td>{{$applicant['gender']}}</td>
                            <td>{{$applicant['fathers_name']}}</td>
                            <td>{{$applicant['mothers_name']}}</td>
                            <td>{{$applicant['marital']}}</td>
                            <td>{{$applicant['husband_name']}}</td>
                            <td>{{$applicant['husband_idno']}}</td>
                            <td>{{$applicant['tribe']}}</td>
                            <td>{{$applicant['clan']}}</td>
                            <td>{{$applicant['district']}}</td>
                            <td>{{$applicant['division']}}</td>
                            <td>{{$applicant['constituency']}}</td>
                            <td>{{$applicant['location']}}</td>
                            <td>{{$applicant['sub_location']}}</td>
                            <td>{{$applicant['village']}}</td>
                            <td>{{$applicant['home_address']}}</td>
                            <td>{{$applicant['occupation']}}</td>
                            <td>{{$applicant['image']}}</td>
                            
                            <td>
                                <a href="{{action('ApplicantsController@edit', $applicant['id'])}}" class="btn btn-warning">Edit</a>
                                <form action="{{action('ApplicantsController@destroy', $applicant['id'])}}" method="post">
                                @csrf
                                <input name="_method" type="hidden" value="DELETE">
                                <button class="btn btn-danger" type="submit">Delete</button>
                              </form>
                              <a href="{{action('DashboardController@downloadPDF', $applicant['id'])}}" class="btn btn-info">Print Details</a>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    {{-- <div class="panel panel-primary">
        <div class="panel-heading">
            Your Details
        </div>
        <div class="panel-body">
            <p><h4>You are logged in! Welcome</h4></p>

        </div>                                
    </div> --}}

    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
        @foreach($applicants as $applicant)
          @if(Auth::check())
            @if(Auth::id() == $applicant->user->id)
              <div class="panel panel-info">
                  <div class="panel-heading">
                    <h3 class="panel-title">{{$applicant->fname}}</h3>
                  </div>
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="/storage/images/{{$applicant->image}}" class="img-circle img-responsive"> </div>
                      <div class=" col-md-9 col-lg-9 "> 
                        <table class="table table-user-information">
                          <tbody>
                          <tr>
                              <td>ID Number:</td>
                              <td>{{$applicant->number}}</td>
                                 
                            </tr>
                            <tr>
                              <td>First Name:</td>
                              <td>{{$applicant->fname}}</td>
                            </tr>
                            <tr>
                              <td>Middle Name:</td>
                              <td>{{$applicant->mname}}</td>
                            </tr>
                            <tr>
                              <td>Surname Name:</td>
                              <td>{{$applicant->lname}}</td>
                            </tr>
                            <tr>
                              <td>Date Applied:</td>
                              <td>{{$applicant->created_at}}</td>
                            </tr>
                            <tr>
                              <td>Date of Birth</td>
                              <td>{{$applicant->date}}</td>
                            </tr>
                         
                               <tr>
                                   <tr>
                              <td>Gender</td>
                              <td>{{$applicant->gender}}</td>
                            </tr>
                            <tr>
                              <td>Fathers Name:</td>
                              <td>{{$applicant->fathers_name}}</td>
                            </tr>
                            <tr>
                              <td>Mothers Name:</td>
                              <td>{{$applicant->mothers_name}}</td>
                            </tr>
                            <tr>
                              <td>Marital Status:</td>
                              <td>{{$applicant->marital}}</td>
                            </tr>
                            <tr>
                              <td>Husband Name:</td>
                              <td>{{$applicant->husband_name}}</td>
                            </tr>
                            <tr>
                              <td>Husband ID Number:</td>
                              <td>{{$applicant->husband_idno}}</td>
                            </tr>
                            <tr>
                              <td>Tribe:</td>
                              <td>{{$applicant->tribe}}</td>
                            </tr>
                            <tr>
                              <td>Clan:</td>
                              <td>{{$applicant->clan}}</td>
                            </tr>
                              <tr>
                              <td>District:</td>
                              <td>{{$applicant->district}}</td>
                            </tr>
                            <tr>
                              <td>Division:</td>
                              <td>{{$applicant->division}}</td>
                            </tr>
                            <tr>
                              <td>Constituency:</td>
                              <td>{{$applicant->constituency}}</td>
                            </tr>
                            <tr>
                              <td>Location:</td>
                              <td>{{$applicant->location}}</td>
                            </tr>
                            <tr>
                              <td>Sub Location:</td>
                              <td>{{$applicant->sub_location}}</td>
                            </tr>
                            <tr>
                              <td>Home Address:</td>
                              <td>{{$applicant->home_address}}</td>
                            </tr>
                            <tr>
                              <td>Village:</td>
                              <td>{{$applicant->village}}</td>
                            </tr>
                            <tr>
                              <td>Occupation:</td>
                              <td>{{$applicant->village}}</td>
                            </tr>                       
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>           
              </div>
            @endif
          @endif
        @endforeach
      </div>
    </div>
<!-- /#page-wrapper -->

@endsection