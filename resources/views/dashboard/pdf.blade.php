<!DOCTYPE html>
<html>
<head>
  <title>Print Applicant Details</title>
</head>
<body>
  <div class="container-fluid">
        <table class="table table-bordered">
          <tr>
            <td>{{$applicant->fname}}</td>
            <td>{{$applicant->mname}}</td>
            <td>{{$applicant->lname}}</td>
            <td>{{$applicant->number}}</td>
            <td>{{$applicant->gender}}</td>
          </tr>
          <tr>
            <td>{{$applicant->district}}</td>
            <td>{{$applicant->division}}</td>
            <td>{{$applicant->location}}</td>
            <td>{{$applicant->sub_location}}</td>
          </tr>
        </table>
  </div>
</body>
</html>