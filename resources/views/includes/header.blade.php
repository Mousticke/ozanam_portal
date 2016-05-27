<!--APP ANGULAR POUR LA DIV DU LOGIN-->
<div id="header">
    <div id="logo">
        <a href="{{route('dashboard')}}"><img id="logo_ozanam" src="{{URL::to('src/img/logo.png')}}"></a>
    </div>
    <div id="right-header">
        <div id="wrapper_info">
            <p class="top_info">
                <a id="top_link" href="#">Site Mont-Héry</a>
                <br>
                03 26 69 32 70
                <br>
                1 rue de la fraternité
                <br>
                51000 Châlons-en-Champagne
            </p>
            <p class="top_info">
                <a id="top_link" href="#">Site Centre</a>
                <br>
                03 26 64 60 74
                <br>
                41 rue du Général-Fery
                <br>
                51000 Châlons-en-Champagne Cedex
            </p>

            <p id="timer"></p>
                <script type="text/javascript">
                    function GetClock() {
                        var weekday = new Array(7);
                        weekday[0] = "Dimanche" ;
                        weekday[1] = "Lundi" ;
                        weekday[2] = "Mardi" ;
                        weekday[3] = "Mercredi" ;
                        weekday[4] = "Jeudi" ;
                        weekday[5] = "Vendredi" ;
                        weekday[6] = "Samedi" ;
                        var d = new Date();
                        var thisDay = weekday[d.getDay()];
                        var thisNumber = d.getDay();
                        var thisYear = d.getFullYear();
                        var nhour = d.getHours(), nmin = d.getMinutes(), nsec = d.getSeconds();
                        if (nmin <= 9) nmin = "0" + nmin;
                        if (nsec <= 9) nsec = "0" + nsec;

                        document.getElementById('clockbox').innerHTML = thisDay + " " + thisNumber + " " + thisYear + "<br/>" + nhour + ":" + nmin + ":" + nsec + "";
                    }

                    window.onload = function () {
                        GetClock();
                        setInterval(GetClock, 1000);
                    }
                </script>
            <div id="clockbox"></div>
        </div>
    </div>
</div>
<nav class="navbar navbar-custom">
    <div class="container-fluid navbar-inner">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!--TODO : faire pour tous-->
        <div id="navbar" class="navbar-collapse collapse-1">
            <ul class="nav navbar-nav site">
                @foreach($menus as $menu)
                    @if($menu->id != 1)
                        @if($menu->visibility == 1 && Auth::check())
                            @if(str_contains($menu->link , '.fr') || str_contains($menu->link , '.com') || str_contains($menu->link , '.org') || str_contains($menu->link , '.net'))
                                @if(starts_with($menu->link , 'wwww.'))
                                    <li><a class="custom-color-a" href="http://{{$menu->link}}" target="_blank"><span
                                                    data-toggle="tooltip_menu" data-original-title="{{$menu->name}}"
                                                    class="fa" aria-hidden="true"><img class="custom_fa" src="{{URL::to($menu->icon)}}"></span></a></li>
                                @elseif(starts_with($menu->link , 'http://'))
                                    <li><a class="custom-color-a" href="{{$menu->link}}" target="_blank"><span
                                                    data-toggle="tooltip_menu" data-original-title="{{$menu->name}}"
                                                    class="fa" aria-hidden="true"><img class="custom_fa" src="{{URL::to($menu->icon)}}"></span></a></li>
                                @elseif(starts_with($menu->link , 'https://'))
                                    <li><a class="custom-color-a" href="{{$menu->link}}" target="_blank"><span
                                                    data-toggle="tooltip_menu" data-original-title="{{$menu->name}}"
                                                    class="fa" aria-hidden="true"><img class="custom_fa" src="{{URL::to($menu->icon)}}"></span></a></li>
                                @elseif(!starts_with($menu->link , 'https://') && !starts_with($menu->link , 'http://') && !starts_with($menu->link , 'www.'))
                                    <li><a class="custom-color-a" href="http://www.{{$menu->link}}" target="_blank"><span
                                                    data-toggle="tooltip_menu" data-original-title="{{$menu->name}}"
                                                    class="fa" aria-hidden="true"><img class="custom_fa" src="{{URL::to($menu->icon)}}"></span></a></li>
                                @endif
                            @else
                                @if(starts_with($menu->link , 'wwww'))
                                    <li><a class="custom-color-a" href="http://{{$menu->link}}.fr" target="_blank"><span
                                                    data-toggle="tooltip_menu" data-original-title="{{$menu->name}}"
                                                    class="fa" aria-hidden="true"><img class="custom_fa" src="{{URL::to($menu->icon)}}"></span></a></li>
                                @elseif(starts_with($menu->link , 'http://'))
                                    <li><a class="custom-color-a" href="{{$menu->link}}.fr" target="_blank"><span
                                                    data-toggle="tooltip_menu" data-original-title="{{$menu->name}}"
                                                    class="fa" aria-hidden="true"><img class="custom_fa" src="{{URL::to($menu->icon)}}"></span></a></li>
                                @elseif(starts_with($menu->link , 'https://'))
                                    <li><a class="custom-color-a" href="{{$menu->link}}.fr" target="_blank"><span
                                                    data-toggle="tooltip_menu" data-original-title="{{$menu->name}}"
                                                    class="fa" aria-hidden="true"><img class="custom_fa" src="{{URL::to($menu->icon)}}"></span></a></li>
                                @elseif(!starts_with($menu->link , 'https://') && !starts_with($menu->link , 'http://') && !starts_with($menu->link , 'www.'))
                                    <li><a class="custom-color-a" href="http://www.{{$menu->link}}.fr" target="_blank"><span
                                                    data-toggle="tooltip_menu" data-original-title="{{$menu->name}}"
                                                    class="fa" aria-hidden="true"><img class="custom_fa" src="{{URL::to($menu->icon)}}"></span></a></li>
                                @endif
                            @endif
                        @elseif($menu->visibility == 0)
                            @if(str_contains($menu->link , '.fr') || str_contains($menu->link , '.com') || str_contains($menu->link , '.org') || str_contains($menu->link , '.net'))
                                @if(starts_with($menu->link , 'wwww.'))
                                    <li><a class="custom-color-a" href="http://{{$menu->link}}" target="_blank"><span
                                                    data-toggle="tooltip_menu" data-original-title="{{$menu->name}}"
                                                    class="fa" aria-hidden="true"><img class="custom_fa" src="{{URL::to($menu->icon)}}"></span></a></li>
                                @elseif(starts_with($menu->link , 'http://'))
                                    <li><a class="custom-color-a" href="{{$menu->link}}" target="_blank"><span
                                                    data-toggle="tooltip_menu" data-original-title="{{$menu->name}}"
                                                    class="fa" aria-hidden="true"><img class="custom_fa" src="{{URL::to($menu->icon)}}"></span></a></li>
                                @elseif(starts_with($menu->link , 'https://'))
                                    <li><a class="custom-color-a" href="{{$menu->link}}" target="_blank"><span
                                                    data-toggle="tooltip_menu" data-original-title="{{$menu->name}}"
                                                    class="fa" aria-hidden="true"><img class="custom_fa" src="{{URL::to($menu->icon)}}"></span></a></li>
                                @elseif(!starts_with($menu->link , 'https://') && !starts_with($menu->link , 'http://') && !starts_with($menu->link , 'www.'))
                                    <li><a class="custom-color-a" href="http://www.{{$menu->link}}" target="_blank"><span
                                                    data-toggle="tooltip_menu" data-original-title="{{$menu->name}}"
                                                    class="fa" aria-hidden="true"><img class="custom_fa" src="{{URL::to($menu->icon)}}"></span></a></li>
                                @endif
                            @else
                                @if(starts_with($menu->link , 'wwww'))
                                    <li><a class="custom-color-a" href="http://{{$menu->link}}.fr" target="_blank"><span
                                                    data-toggle="tooltip_menu" data-original-title="{{$menu->name}}"
                                                    class="fa" aria-hidden="true"><img class="custom_fa" src="{{URL::to($menu->icon)}}"></span></a></li>
                                @elseif(starts_with($menu->link , 'http://'))
                                    <li><a class="custom-color-a" href="{{$menu->link}}.fr" target="_blank"><span
                                                    data-toggle="tooltip_menu" data-original-title="{{$menu->name}}"
                                                    class="fa" aria-hidden="true"><img class="custom_fa" src="{{URL::to($menu->icon)}}"></span></a></li>
                                @elseif(starts_with($menu->link , 'https://'))
                                    <li><a class="custom-color-a" href="{{$menu->link}}.fr" target="_blank"><span
                                                    data-toggle="tooltip_menu" data-original-title="{{$menu->name}}"
                                                    class="fa" aria-hidden="true"><img class="custom_fa" src="{{URL::to($menu->icon)}}"></span></a></li>
                                @elseif(!starts_with($menu->link , 'https://') && !starts_with($menu->link , 'http://') && !starts_with($menu->link , 'www.'))
                                    <li><a class="custom-color-a" href="http://www.{{$menu->link}}.fr" target="_blank"><span
                                                    data-toggle="tooltip_menu" data-original-title="{{$menu->name}}"
                                                    class="fa" aria-hidden="true"><img class="custom_fa" src="{{URL::to($menu->icon)}}"></span></a></li>
                                @endif
                            @endif
                        @endif
                    @endif

                @endforeach
                @if(Auth::check())
                    <li><a class="custom-color-a" href="{{route('pl_admin')}}">Admin</a></li>
                @endif
            </ul>

            <ul class="nav navbar-nav navbar-right">

                <li class="search" style="margin-right: 25px">
                    <form target="_blank" action="http://www.google.fr/search" method="get" onsubmit="process(); return false;">
                        <p>
                            <a href="http://www.google.fr" target="_blank"></a>
                            <input maxlength="255" name="q" size="21" type="text" title="Rechercher">
                            <input name="hl" type="hidden" value="fr">
                            <button class="btn btn-inverse icon-btn" name="btnG" type="submit">
                                <span class="glyphicon btn-glyphicon glyphicon-search img-circle text-success"></span>
                                Google
                            </button>
                        </p>
                    </form>
                </li>
                <!--Bouton de toggle-->
                @if(!Auth::check())
                    <li>
                        <a ng-click="slideToggle=! slideToggle" class="btn icon-btn btn-success custom_btn" href="#">
                            <i class="glyphicon btn-glyphicon glyphicon-user img-circle text-primary"
                               aria-hidden="true"></i>
                            Se Connecter
                        </a>
                    </li>
                @endif
            <!--<li><a ng-click="slideToggle=! slideToggle" class="custom-color-a" href="#"><span class="fa fa-user" aria-hidden="true"></span>&nbsp Se Connecter</a></li>-->
                @if(Auth::check())
                    <li>
                        <a class="btn icon-btn btn-danger custom_btn" href="{{route('logout')}}">
                            <i class="glyphicon btn-glyphicon glyphicon-log-out img-circle text-info"
                               aria-hidden="true"></i>
                            Se Déconnecter</a>
                    </li>
                @endif

                <li>
                    <a ng-click="slideToggle2=! slideToggle2" class="btn icon-btn btn-warning custom_btn" href="#">
                        <i class="glyphicon btn-glyphicon glyphicon-phone img-circle text-primary"
                           aria-hidden="true"></i>
                        Contacter</a>
                </li>
            </ul>

        </div>

    </div>

    <md-progress-linear md-mode="indeterminate"></md-progress-linear>
</nav>

<!--TOOGLE LOGIN-->
<div class="row box-info slide-toggle" ng-show="slideToggle">
    @include('includes.sign')
</div>

<!--TOGGLE Contact -->
<div class="row box box-info slide-toggle" ng-show="slideToggle2">
    @include('includes.contact')
</div>
<script type="text/javascript">
    process = function () {
        window.open('about:blank', 'popup', 'width=320,height=240,resizeable=no');
        document.login.setAttribute('target', 'popup');
        document.login.setAttribute('onsubmit', '');
        document.login.submit();
    };
</script>