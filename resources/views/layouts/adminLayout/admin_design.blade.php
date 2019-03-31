<!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="{{ asset('css/backend_css/css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ asset('css/backend_css/css/bootstrap-responsive.min.css') }}" />
<link rel="stylesheet" href="{{ asset('css/backend_css/css/select2.css') }}" />
<link rel="stylesheet" href="{{ asset('css/backend_css/css/fullcalendar.css') }}" />

<link rel="stylesheet" href="{{ asset('css/backend_css/css/matrix-style.css') }}" />
<link rel="stylesheet" href="{{ asset('css/backend_css/css/matrix-media.css') }}" />
<link href="{{ asset('fonts/glyphicon/glyphicon.css') }}" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('css/fileinput.css') }}" />
<link href="{{ asset('fonts/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('css/backend_css/css/jquery.gritter.css') }}" />

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="{{ asset('css/lightbox.css') }}" />
<link rel="stylesheet" href="{{ asset('css/backend_css/custom.css') }}" />


</head>
<body>
  @include('layouts.adminLayout.admin_header')
  @include('layouts.adminLayout.admin_sidebar')


 @yield('content')


<!--Footer-part-->

  @include('layouts.adminLayout.admin_footer')

<!--end-Footer-part-->


<script src="{{ asset('js/backend_js/js/jquery.min.js') }}"></script> 
<script src="{{ asset('js/backend_js/js/jquery.ui.custom.js') }}"></script> 
<script src="{{ asset('js/backend_js/js/bootstrap.min.js') }}"></script> 
<script src="{{ asset('js/backend_js/js/jquery.uniform.js') }}"></script> 
<script src="{{ asset('js/backend_js/js/select2.min.js') }}"></script> 
<script src="{{ asset('js/backend_js/js/jquery.dataTables.min.js') }}"></script> 
<script src="{{ asset('js/backend_js/js/jquery.validate.js') }}"></script> 
<script src="{{ asset('js/backend_js/js/matrix.js') }}"></script> 
<script src="{{ asset('js/backend_js/js/matrix.form_validation.js') }}"></script>
<script src="{{ asset('js/backend_js/js/matrix.tables.js') }}"></script> 
<script src="{{ asset('js/fileinput.js') }}"></script>
<script src="{{ asset('js/fa/theme.js') }}"></script>
<script src="{{ asset('js/fas/theme.js') }}"></script>
<script src="{{ asset('js/backend_js/custom.js') }}"></script>
<script src="{{ asset('js/lightbox.js') }}"></script>

</body>
</html>
