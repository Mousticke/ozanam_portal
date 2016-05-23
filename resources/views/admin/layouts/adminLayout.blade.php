<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Administration</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{URL::to('src/admintheme/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="{{URL::to('https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{URL::to('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{URL::to('src/admintheme/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{URL::to('src/admintheme/dist/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{URL::to('src/admintheme/dist/css/skins/_all-skins.min.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/css/select2.min.css" rel="stylesheet"/>

    <link rel="stylesheet" href="{{URL::to('src/css/adminMenu.css')}}">
    <link rel="stylesheet" href="{{URL::to('src/css/dashboard.css')}}">
    <link rel="stylesheet" href="{{URL::to('src/css/carousel.css')}}">
    <link rel="stylesheet" href="{{URL::to('src/css/header.css')}}">
    <link rel="stylesheet" href="{{URL::to('src/css/contact.css')}}">
    <!-- jQuery 2.1.4 -->
    <script src="{{URL::to('src/admintheme/plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script>
    <script src=" https://ajax.googleapis.com/ajax/libs/angularjs/1.4.0-rc.0/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.0-rc.0/angular-animate.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular-route.js"></script>


</head>
<body class="hold-transition skin-blue sidebar-mini" ng-app="mainApp">
<div class="wrapper" n-controller=" pl_adminController">

@include('admin.common.header')

@include('admin.common.sidebarRight')

<!-- Content Wrapper. Contains page content -->

    @yield('contentAdmin')

    @include('admin.common.footerAdmin')

    @include('admin.common.sidebarLeft')


    <div class="control-sidebar-bg"></div>

</div><!-- ./wrapper -->


<!-- Bootstrap 3.3.5 -->
<script src="{{URL::to('src/admintheme/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- FastClick -->
<script src="{{URL::to('src/admintheme/plugins/fastclick/fastclick.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{URL::to('src/admintheme/dist/js/app.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{URL::to('src/admintheme/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap -->
<script src="{{URL::to('src/admintheme/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{URL::to('src/admintheme/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- SlimScroll 1.3.0 -->
<script src="{{URL::to('src/admintheme/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<!-- ChartJS 1.0.1 -->
<script src="{{URL::to('src/admintheme/plugins/chartjs/Chart.min.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{URL::to('src/admintheme/dist/js/pages/dashboard2.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{URL::to('src/admintheme/dist/js/demo.js')}}"></script>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular-aria.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angular_material/1.0.7/angular-material.min.js"></script>
<script src="{{URL::to('src/js/appAdmin.js')}}"></script>
<script src="{{URL::to('src/js/vendor/tinymce/js/tinymce/tinymce.min.js')}}"></script>
<script src="{{URL::to('src/js/angularMain.js')}}"></script>
<script>

    var editor_config = {
        path_absolute: "{{URL::to('/')}}",
        selector: "textarea#new-post",
        plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table contextmenu directionality",
            "emoticons template paste textcolor colorpicker textpattern"

        ],
        toolbar: " insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist | outdent indent |link image media ",

        relative_urls: false,

        file_browser_callback: function (field_name, url, type, win) {
            var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
            var y = window.innerHeight || document.documentElement.clientHeight || document.getElementsByTagName('body')[0].clientHeight;

            var cmsURL = editor_config.path_absolute + '/laravel-filemanager?field_name=' + field_name;
            if (type == 'image') {
                cmsURL = cmsURL + '&type=Images';
            } else {
                cmsURL = cmsURL + '&type=Files';
            }

            tinyMCE.activeEditor.windowManager.open({
                file: cmsURL,
                title: 'Filemanager',
                width: x * 0.8,
                height: y * 0.8,
                resizable: "yes",
                close_previous: "no"
            });
        }
    };

    tinymce.init(editor_config);
</script>

</body>
</html>
