<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    {{-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"> --}}  {{-- 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> --}}  
    {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>   --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script> --}} 


    <!-- Bootstrap Core CSS -->
    <link href="{{asset ('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="{{asset ('css/date.css')}}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{asset ('metis/metisMenu.min.css')}}" rel="stylesheet">

        <!-- DataTables CSS -->
    <link href="{{asset ('css/dataTables.bootstrap.css')}}" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="{{asset ('css/dataTables.responsive.css')}}" rel="stylesheet">
        
    <!-- Custom CSS -->
    <link href="{{asset ('dist/css/sb-admin-2.css')}}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{asset ('morris/morris.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset ('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

{{--      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.3/css/bootstrap-select.min.css"> --}}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<div id="wrapper">
    @include('dashboard.navbar')

    @yield('content')
</div>

    <!-- jQuery -->
    <script src="{{asset ('jquery/jquery.min.js')}}"></script>
    {{-- <script src="{{asset ('jquery/jquery1.js')}}"></script> --}}

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset ('bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{asset ('metis/metisMenu.min.js')}}"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{asset ('raphael/raphael.min.js')}}"></script>
    <script src="{{asset ('morris/morris.min.js')}}"></script>
    <script src="{{asset ('data/morris-data.js')}}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{asset ('dist/js/sb-admin-2.js')}}"></script>

        <!-- DataTables JavaScript -->
    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('js/dataTables.responsive.js')}}"></script>
    <script src="{{asset('js/date.js')}}"></script>
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

    <script type="text/javascript">  
        $('#datepicker').datepicker({ 
            autoclose: true,   
            format: 'dd-mm-yyyy'  
         });  
    </script>
</body>

</html>