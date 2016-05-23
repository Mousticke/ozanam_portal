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

            <p id="timer">
                <script type="text/javascript">
                    function GetClock() {
                        var d = new Date();
                        var nhour = d.getHours(), nmin = d.getMinutes(), nsec = d.getSeconds();
                        if (nmin <= 9) nmin = "0" + nmin
                        if (nsec <= 9) nsec = "0" + nsec;

                        document.getElementById('clockbox').innerHTML = "" + nhour + ":" + nmin + ":" + nsec + "";
                    }

                    window.onload = function () {
                        GetClock();
                        setInterval(GetClock, 1000);
                    }
                </script>
            <div id="clockbox"></div>
            </p>
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
            @if(Auth::check())
                <ul class="nav navbar-nav site">
                    @foreach($menus as $menu)
                        @if(str_contains($menu->link , '.fr') || str_contains($menu->link , '.com') || str_contains($menu->link , '.org') || str_contains($menu->link , '.net'))
                            @if(starts_with($menu->link , 'wwww.'))
                                <li><a class="custom-color-a" href="http://{{$menu->link}}" target="_blank"><i
                                                class="fa {{$menu->icon}}" aria-hidden="true"></i>&nbsp {{$menu->name}}
                                    </a></li>
                            @elseif(starts_with($menu->link , 'http://'))
                                <li><a class="custom-color-a" href="{{$menu->link}}" target="_blank"><i
                                                class="fa {{$menu->icon}}" aria-hidden="true"></i>&nbsp {{$menu->name}}
                                    </a></li>
                            @elseif(starts_with($menu->link , 'https://'))
                                <li><a class="custom-color-a" href="{{$menu->link}}" target="_blank"><i
                                                class="fa {{$menu->icon}}" aria-hidden="true"></i>&nbsp {{$menu->name}}
                                    </a></li>
                            @elseif(!starts_with($menu->link , 'https://') && !starts_with($menu->link , 'http://') && !starts_with($menu->link , 'www.'))
                                <li><a class="custom-color-a" href="http://www.{{$menu->link}}" target="_blank"><i
                                                class="fa {{$menu->icon}}" aria-hidden="true"></i>&nbsp {{$menu->name}}
                                    </a></li>
                            @endif
                        @else
                            @if(starts_with($menu->link , 'wwww'))
                                <li><a class="custom-color-a" href="http://{{$menu->link}}.fr" target="_blank"><i
                                                class="fa {{$menu->icon}}" aria-hidden="true"></i>&nbsp {{$menu->name}}
                                    </a></li>
                            @elseif(starts_with($menu->link , 'http://'))
                                <li><a class="custom-color-a" href="{{$menu->link}}.fr" target="_blank"><i
                                                class="fa {{$menu->icon}}" aria-hidden="true"></i>&nbsp {{$menu->name}}
                                    </a></li>
                            @elseif(starts_with($menu->link , 'https://'))
                                <li><a class="custom-color-a" href="{{$menu->link}}.fr" target="_blank"><i
                                                class="fa {{$menu->icon}}" aria-hidden="true"></i>&nbsp {{$menu->name}}
                                    </a></li>
                            @elseif(!starts_with($menu->link , 'https://') && !starts_with($menu->link , 'http://') && !starts_with($menu->link , 'www.'))
                                <li><a class="custom-color-a" href="http://www.{{$menu->link}}.fr" target="_blank"><i
                                                class="fa {{$menu->icon}}" aria-hidden="true"></i>&nbsp {{$menu->name}}
                                    </a></li>
                        @endif
                    @endif
                @endforeach
                <!--
                                <li><a class="custom-color-a" href="http://www.ozanam-lycee.fr" target="_blank"><i class="fa fa-internet-explorer" aria-hidden="true"></i>&nbsp Site Vitrine </a></li>
                                <li><a class="custom-color-a" href="http://www.moodle.ozanam-lycee.fr" target="_blank"><i class="fa fa-book" aria-hidden="true"></i>&nbsp Moodle </a></li>
                                <li><a class="custom-color-a" href="#"><i class="fa fa-book" aria-hidden="true"></i>&nbsp Scolinfo </a></li>
                                <li><a class="custom-color-a" href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp Cahier de Texte </a></li>
                                <li><a class="custom-color-a" href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp Cahier d'Appel </a></li>
                                <li><a class="custom-color-a" href="#"><i class="fa fa-internet-explorer" aria-hidden="true"></i>&nbsp E-Sidoc </a></li>
                                <li><a class="custom-color-a" href="#"><i class="fa fa-graduation-cap" aria-hidden="true"></i>&nbsp Rectorat </a></li>
                                <li><a class="custom-color-a" href="#"><i class="fa fa-internet-explorer" aria-hidden="true"></i>&nbsp Cerise Pro</a></li>
                                <li><a class="custom-color-a" href="#"><i class="fa fa-camera" aria-hidden="true"></i>&nbsp Album </a></li>
                                -->
                    <li><a class="custom-color-a" href="{{route('pl_admin')}}">Admin</a></li>
                </ul>
            @else
                <ul class="nav navbar-nav site">
                    <li><a class="custom-color-a" href="http://www.ozanam-lycee.fr" target="_blank"><span
                                    data-toggle="tooltip_menu" data-original-title="Site Web"
                                    class="fa fa-internet-explorer" aria-hidden="true"></span></a></li>

                    <li><a class="custom-color-a" href="http://www.ozanet.fr/cdt" target="_blank"><span
                                    data-toggle="tooltip_menu" data-original-title="Cahier d'appel"
                                    class="fa fa-pencil-square-o" aria-hidden="true"></span></a></li>

                    <li><a class="custom-color-a" href="http://www.ozanet.fr/cdt" target="_blank"><span
                                    data-toggle="tooltip_menu" data-original-title="Cahier de Texte"
                                    class="fa fa-pencil-square-o" aria-hidden="true"></span></a></li>

                    <li><a class="custom-color-a" href="http://www.moodle.ozanam-lycee.fr" target="_blank"><span
                                    data-toggle="tooltip_menu" data-original-title="Moodle"
                                    class="fa fa-book" aria-hidden="true"></span></a></li>

                    <li><a class="custom-color-a" href="http://www.scolinfo.net" target="_blank"><span
                                    data-toggle="tooltip_menu" data-original-title="Scolinfo"
                                    class="fa fa-book" aria-hidden="true"></span></a></li>
<!--
                    <li><a class="custom-color-a" href="http://www.moodle.ozanam-lycee.fr" target="_blank"><i
                                    class="fa fa-book" aria-hidden="true"></i>&nbsp Moodle </a></li>
                    <li><a class="custom-color-a" href="#"><i class="fa fa-book" aria-hidden="true"></i>&nbsp Scolinfo
                        </a></li>
                    <li><a class="custom-color-a" href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp
                            Cahier de Texte </a></li>
                    <li><a class="custom-color-a" href="#"><i class="fa fa-internet-explorer" aria-hidden="true"></i>&nbsp
                            E-Sidoc </a></li>
                    <li><a class="custom-color-a" href="#"><i class="fa fa-graduation-cap" aria-hidden="true"></i>&nbsp
                            Rectorat </a></li>
                    <li><a class="custom-color-a" href="#"><i class="fa fa-camera" aria-hidden="true"></i>&nbsp Album
                            <span></span></a></li>
-->
                </ul>
            @endif
            <ul class="nav navbar-nav navbar-right">

                <li class="search" style="margin-right: 25px">
                    <form action="http://www.google.fr/search" method="get" onsubmit="process(); return false;">
                        <p>
                            <a href="http://www.google.fr"></a>
                            <input maxlength="255" name="q" size="21" type="text">
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
                        <a ng-click="slideToggle=! slideToggle" class="btn icon-btn btn-success" href="#">
                            <i class="glyphicon btn-glyphicon glyphicon-user img-circle text-primary"
                               aria-hidden="true"></i>
                            Se Connecter
                        </a>
                    </li>
                @endif
            <!--<li><a ng-click="slideToggle=! slideToggle" class="custom-color-a" href="#"><span class="fa fa-user" aria-hidden="true"></span>&nbsp Se Connecter</a></li>-->
                @if(Auth::check())
                    <li>
                        <a class="btn icon-btn btn-danger" href="{{route('logout')}}">
                            <i class="glyphicon btn-glyphicon glyphicon-log-out img-circle text-info"
                               aria-hidden="true"></i>
                            Se Déconnecter</a>
                    </li>
                @endif

                <li>
                    <a ng-click="slideToggle2=! slideToggle2" class="btn icon-btn btn-warning" href="#">
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