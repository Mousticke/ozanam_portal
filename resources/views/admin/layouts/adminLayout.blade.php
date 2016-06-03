<!DOCTYPE html>
<html>
    <head>
        @include('admin.layouts.linker')
    </head>
    <body class="hold-transition skin-blue sidebar-mini" ng-app="mainApp">
        <div class="wrapper" n-controller=" pl_adminController">
            @include('admin.common.header')
            @include('admin.common.sidebarRight')

            @yield('contentAdmin')
            @include('admin.common.footerAdmin')
            @include('admin.common.sidebarLeft')
            <div class="control-sidebar-bg"></div>
        </div>
    @include('admin.layouts.script')

    </body>
</html>
