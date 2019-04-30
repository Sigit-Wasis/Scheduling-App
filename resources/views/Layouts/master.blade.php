<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="Dashboard">
<meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

<title>Jadwal AL Andalus</title>

<link href="{{ url('admin/assets/img/favicon.png') }}" rel="icon">
<link href="{{ url('admin/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
<link href="{{ url('admin/assets/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ url('admin/assets/lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
<link rel="{{ url('admin/assets/stylesheet') }}" type="text/css" href="{{ url('admin/assets/css/zabuto_calendar.css') }}">
<link rel="{{ url('admin/assets/stylesheet') }}" type="text/css" href="{{ url('admin/assets/lib/gritter/css/jquery.gritter.css') }}" />
<link href="{{ url('admin/assets/css/style.css') }}" rel="stylesheet">
<link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">

<link href="{{ url('admin/assets/css/style-responsive.css') }}" rel="stylesheet">
<script src="{{ url('admin/assets/lib/chart-master/Chart.js') }}"></script>

</head>
<body>
  <section id="container">  
    <!--_navbar--> 
    @include('Layouts.includes._navbar')

    <!--_sidebar-->
    @include('Layouts.includes._sidebar')

    <!--content -->
    @yield('content')

    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
        </p>
          <div class="credits">
            <a href="#" class="go-top"><i class="fa fa-angle-up"></i> </a>
          </div>
      </div>
    </footer>
    
  </section>
  <script src="{{ url('admin/assets/lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ url('admin/assets/lib/bootstrap/js/bootstrap.min.js') }}"></script>
  <script class="{{ url('admin/assets/include') }}" type="text/javascript" src="{{ url('admin/assets/lib/jquery.dcjqaccordion.2.7.js') }}"></script>
  <script src="{{ url('admin/assets/lib/jquery.scrollTo.min.js') }}"></script>
  <script src="{{ url('admin/assets/lib/jquery.nicescroll.js') }}" type="text/javascript"></script>
  <script src="{{ url('admin/assets/lib/jquery.sparkline.js') }}"></script>
  <script src="{{ url('admin/assets/lib/common-scripts.js') }}"></script>
  <script type="{{ url('admin/assets/text/javascript') }}" src="{{ url('admin/assets/lib/gritter/js/jquery.gritter.js') }}"></script>
  <script type="{{ url('admin/assets/text/javascript') }}" src="{{ url('admin/assets/lib/gritter-conf.js') }}"></script>
  <script src="{{ url('admin/assets/lib/sparkline-chart.js') }}"></script>
  <script src="{{ url('admin/assets/lib/zabuto_calendar.js') }}"></script>
  <script type="{{ url('admin/assetstext/javascript') }}"></script>

  <script src="//code.jquery.com/jquery.js"></script>
  <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  @stack('scripts')

</body>

</html>