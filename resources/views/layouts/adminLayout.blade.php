<!DOCTYPE html>
<html lang="http://www.w3.org/1999/xhtml">
<head>
    @yield('title')
   @include('components.admin.head')
</head>
<body>
<div id="wrapper">
   @include('components.admin.navHeader')
    <!-- /. NAV TOP  -->
   @include('components.admin.navSide')
    <!-- /. NAV SIDE  -->
   @yield('main')
    <!-- /. PAGE WRAPPER  -->
</div>
<!-- /. WRAPPER  -->
<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<script src="{{asset('/js/jquery-1.10.2.js')}}"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="{{asset('/js/bootstrap.min.js')}}"></script>
<!-- METISMENU SCRIPTS -->
<script src="{{asset('/js/jquery.metisMenu.js')}}"></script>
<!-- CUSTOM SCRIPTS -->
<script src="{{asset('/js/custom.js')}}"></script>


</body>
</html>
