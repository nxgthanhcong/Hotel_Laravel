<!DOCTYPE html>

<html>
<head>
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Bootstrap Core CSS -->
    <link href="{!! asset('api/css/bootstrap.min.css') !!}" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="{!! asset('api/css/style.css') !!}" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="{!! asset('api/css/morris.css') !!}" type="text/css" />
    <!-- Graph CSS -->
    <link href="{!! asset('api/css/font-awesome.css') !!}" rel="stylesheet">
    <!-- jQuery -->
    <script src="{!! asset('api/js/jquery-2.1.4.min.js') !!}"></script>
    <!-- //jQuery -->
    <link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css' />
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- lined-icons -->
    <link rel="stylesheet" href="{!! asset('api/css/icon-font.min.css') !!}" type='text/css' />
    <!-- //lined-icons -->
    <script src="{!! asset('api/ckeditor/ckeditor.js') !!}"></script>
</head>
<body>
    <div class="page-container">
        <div class="left-content">
            <div class="mother-grid-inner">
                @include('admin.theme.headermain')	
                <div>
                    @yield('content')
                </div>
            </div>
        </div>
        @include('admin.theme.sidebar')
        <div class="clearfix"></div>
    </div>
    <!--copy rights start here-->
    <!-- <div class="copyrights">
        <p>© All Rights Reserved | Design by  Cong </p>
    </div> -->
    <!--COPY rights end here-->
    <script>
	var toggle = true;

	$(".sidebar-icon").click(function() {
		if (toggle)
		{
		$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
		$("#menu span").css({"position":"absolute"});
		}
		else
		{
		$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
		setTimeout(function() {
			$("#menu span").css({"position":"relative"});
		}, 400);
		}

					toggle = !toggle;
				});
</script>
<!--js -->
<script src="{!! asset('api/js/jquery.nicescroll.js') !!}"></script>
<script src="{!! asset('api/js/scripts.js') !!}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{!! asset('api/js/bootstrap.min.js') !!}"></script>
<!-- /Bootstrap Core JavaScript -->
<!-- morris JavaScript -->
<script src="{!! asset('api/js/raphael-min.js') !!}"></script>
<script src="{!! asset('api/js/morris.js') !!}"></script>
<script>
  $('.lock').on('click',function(){
    alert("Chức năng chưa hoàn thành");
  })
</script>
</body>
</html>
