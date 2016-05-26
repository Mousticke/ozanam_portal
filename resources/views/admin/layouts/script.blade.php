
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
        selector: "textarea#post-body",
        plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table contextmenu directionality",
            "emoticons template paste textcolor colorpicker textpattern"

        ],
        toolbar: " insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist | outdent indent |link image media ",

        relative_urls: false,

        file_browser_callback: function (field_name, url, type) {
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
