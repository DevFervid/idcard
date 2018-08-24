<!DOCTYPE html>
<html>
<head>
  <title>NATIONAL ID</title>
</head>
<body>

<h1 class="text-center">ID Details</h1>
<hr>
  <div class="container-fluid">
      <div class="card">
          <div class="card img-top">
              {{-- <img class="img-circle" src="{{asset ('../images/avatar.png')}}" alt="applicant image" style="width: 90px; height: 60px;"> --}}
          </div>
          <div class="card body">
              <table class="table table-striped">
                  <thead>
                  <tr>
                      <th>First Name</th>
                      <th>Middle Name</th>
                      <th>Last Name</th>
                      <th>National ID</th>
                      <th>Gender</th>
                      <th>District</th>
                      <th>Division</th>
                      <th>Location</th>
                      <th>Sub-Location</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                      <td>{{$applicant->fname}}</td>
                      <td>{{$applicant->mname}}</td>
                      <td>{{$applicant->lname}}</td>
                      <td>{{$applicant->number}}</td>
                      <td>{{$applicant->gender}}</td>
                      <td>{{$applicant->district}}</td>
                      <td>{{$applicant->division}}</td>
                      <td>{{$applicant->location}}</td>
                      <td>{{$applicant->sub_location}}</td>
                  </tr>
                  </tbody>
              </table>
          </div>
      </div>
  </div>
</body>
</html>