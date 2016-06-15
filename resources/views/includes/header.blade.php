<div style="background-color: white" id="header">
    <div id="logo">
        <a href="{{route('dashboard')}}"><img id="logo_ozanam" src="{{URL::to('src/img/logo.png')}}"></a>
        <div class="col-lg-offset-2" style="position: absolute;">
            <h5 style="padding-left: 40px;">Portail pédagogique du </h5>
            <h6 style="padding-left: 60px;">Lycée Frédéric Ozanam</h6>
        </div>
    </div>
    <div style="position: absolute; left:250px;">

    </div>
    <div id="right-header">
        <div layout="row" layout-wrap class="col-lg-offset-1">
            <div flex-gt-sm="20" flex-md="20" flex-lg="20" flex-sm="20">
                <p class="top_info">
                    <a id="top_link" href="#">Site Mont-Héry</a>
                    <br>
                    03 26 69 32 70
                    <br>
                    1 rue de la fraternité
                    <br>
                    51000 Châlons-en-Champagne
                </p>
            </div>
            <div flex-gt-sm="20" flex-md="28" flex-lg="28" flex-sm="20">
                <p class="top_info">
                    <a id="top_link" href="#">Site Centre</a>
                    <br>
                    03 26 64 60 74
                    <br>
                    41 rue du Général-Fery
                    <br>
                    51000 Châlons-en-Champagne Cedex
                </p>
            </div>
            <div flex-gt-sm="20" flex-md="20" flex-lg="20" flex-sm="20">
                <p class="top_info_site">
                    <a style="font-size: 12px;" id="top_link" href="http://www.ozanam-lycee.fr">Site Web du Lycée
                        <img width="120" height="60" src="{{URL::to('src/img/ozanamlycee.png')}}"></a>
                </p>

            </div>
            <div flex-gt-sm="20" flex-md="20" flex-lg="20" flex-sm="20">
                @if(!Auth::check())
                    <div>
                        <button ng-click="slideToggle=! slideToggle" class="btn icon-btn btn-success custom_btn" href="#">
                            <i class="glyphicon btn-glyphicon glyphicon-user img-circle text-primary"
                               aria-hidden="true"></i>
                            Se Connecter
                        </button>
                    </div>
                @endif
                @if(Auth::check())
                    <div>
                        <a style="color: white !important;" class="btn icon-btn btn-danger custom_btn" href="{{route('logout')}}">
                            <i class="glyphicon btn-glyphicon glyphicon-log-out img-circle text-info"
                               aria-hidden="true"></i>
                            Se Déconnecter
                        </a>
                    </div>
                @endif
                <div>
                    <button ng-click="slideToggle2=! slideToggle2" class="btn icon-btn btn-warning custom_btn" href="#">
                        <i class="glyphicon btn-glyphicon glyphicon-phone img-circle text-primary"
                           aria-hidden="true"></i>
                        Contacter
                    </button>
                </div>
            </div>
            <div flex-gt-sm="20" flex-md="20" flex-lg="20" flex-sm="20">
                <div id="clockbox"></div>
            </div>
        </div>

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
                var month = new Array(12);
                month[0] = "Janvier";
                month[1] = "Fevrier";
                month[2] = "Mars";
                month[3] = "Avril";
                month[4] = "Mai";
                month[5] = "Juin";
                month[6] = "Juillet";
                month[7] = "Aout";
                month[8] = "Septembre";
                month[9] = "Octobre";
                month[10] = "Novembre";
                month[11] = "Décembre";
                var d = new Date();
                var thisDay = weekday[d.getDay()];
                var thisNumber = d.getDate();
                var thisYear = d.getFullYear();
                var thisMonth = month[d.getMonth()];
                var nhour = d.getHours(), nmin = d.getMinutes(), nsec = d.getSeconds();
                if (nmin <= 9) nmin = "0" + nmin;
                if (nsec <= 9) nsec = "0" + nsec;
                document.getElementById('clockbox').innerHTML = thisDay + " " + thisNumber + " " + thisMonth + " " + thisYear + "<br/>" + nhour + ":" + nmin + ":" + nsec + "";
            }
            window.onload = function () {
                GetClock();
                setInterval(GetClock, 1000);
            }
        </script>
    </div>
</div>
<nav id="navbar-main" class="navbar-custom nav-head navbar-fixed-top ">
    <div class="container-fluid navbar-inner ">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse-1">
            <ul class="nav nav-center navbar-nav navbar-left site  navbar-custom">
                @foreach($menus as $menu)
                    @if($menu->id != 1)
                        @if($menu->visibility == 1 && Auth::check())
                            @if(str_contains($menu->link , '.fr') || str_contains($menu->link , '.com') || str_contains($menu->link , '.org') || str_contains($menu->link , '.net'))
                                @if(starts_with($menu->link , 'wwww.'))
                                    <li>
                                        <a class="custom-color-a" href="http://{{$menu->link}}" target="_blank">
                                            <div id="border_menu_link">
                                                <span
                                                        data-toggle="tooltip_menu" data-original-title="{{$menu->name}}"
                                                        class="fa" aria-hidden="true">
                                                    <img class="custom_fa" src="{{URL::to($menu->icon)}}">
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                @elseif(starts_with($menu->link , 'http://'))
                                    <li>
                                        <a class="custom-color-a" href="{{$menu->link}}" target="_blank">
                                            <div id="border_menu_link">
                                                <span
                                                        data-toggle="tooltip_menu" data-original-title="{{$menu->name}}"
                                                        class="fa" aria-hidden="true">
                                                    <img class="custom_fa" src="{{URL::to($menu->icon)}}">
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                @elseif(starts_with($menu->link , 'https://'))
                                    <li>
                                        <a class="custom-color-a" href="{{$menu->link}}" target="_blank">
                                            <div id="border_menu_link">
                                                <span
                                                        data-toggle="tooltip_menu" data-original-title="{{$menu->name}}"
                                                        class="fa" aria-hidden="true">
                                                    <img class="custom_fa" src="{{URL::to($menu->icon)}}">
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                @elseif(!starts_with($menu->link , 'https://') && !starts_with($menu->link , 'http://') && !starts_with($menu->link , 'www.'))
                                    <li>
                                        <a class="custom-color-a" href="http://www.{{$menu->link}}" target="_blank">
                                            <div id="border_menu_link">
                                                <span
                                                        data-toggle="tooltip_menu" data-original-title="{{$menu->name}}"
                                                        class="fa" aria-hidden="true">
                                                    <img class="custom_fa" src="{{URL::to($menu->icon)}}">
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                @elseif(starts_with($menu->link, 'src/'))
                                    <li>
                                        <a class="custom-color-a" href="{{URL::to($menu->link)}}" target="_blank">
                                            <div id="border_menu_link">
                                    <span data-toggle="tooltip_menu" data-original-title="{{$menu->name}}" class="fa" aria-hidden="true">
                                        <img class="custom_fa" src="{{URL::to($menu->icon)}}">
                                    </span>
                                            </div>
                                        </a>
                                    </li>
                                @endif
                            @else
                                @if(starts_with($menu->link , 'wwww'))
                                    <li>
                                        <a class="custom-color-a" href="http://{{$menu->link}}.fr" target="_blank">
                                            <div id="border_menu_link">
                                                <span
                                                        data-toggle="tooltip_menu" data-original-title="{{$menu->name}}"
                                                        class="fa" aria-hidden="true">
                                                    <img class="custom_fa" src="{{URL::to($menu->icon)}}">
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                @elseif(starts_with($menu->link , 'http://'))
                                    <li>
                                        <a class="custom-color-a" href="{{$menu->link}}.fr" target="_blank">
                                            <div id="border_menu_link">
                                                <span
                                                        data-toggle="tooltip_menu" data-original-title="{{$menu->name}}"
                                                        class="fa" aria-hidden="true">
                                                    <img class="custom_fa" src="{{URL::to($menu->icon)}}">
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                @elseif(starts_with($menu->link , 'https://'))
                                    <li>
                                        <a class="custom-color-a" href="{{$menu->link}}.fr" target="_blank">
                                            <div id="border_menu_link">
                                                <span
                                                        data-toggle="tooltip_menu" data-original-title="{{$menu->name}}"
                                                        class="fa" aria-hidden="true">
                                                    <img class="custom_fa" src="{{URL::to($menu->icon)}}">
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                @elseif(!starts_with($menu->link , 'https://') && !starts_with($menu->link , 'http://') && !starts_with($menu->link , 'www.'))
                                    <li>
                                        <a class="custom-color-a" href="http://www.{{$menu->link}}.fr" target="_blank">
                                            <div id="border_menu_link">
                                                <span
                                                        data-toggle="tooltip_menu" data-original-title="{{$menu->name}}"
                                                        class="fa" aria-hidden="true">
                                                    <img class="custom_fa" src="{{URL::to($menu->icon)}}">
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                @elseif(starts_with($menu->link, 'src/'))
                                    <li>
                                        <a class="custom-color-a" href="{{URL::to($menu->link)}}" target="_blank">
                                            <div id="border_menu_link">
                                    <span data-toggle="tooltip_menu" data-original-title="{{$menu->name}}" class="fa" aria-hidden="true">
                                        <img class="custom_fa" src="{{URL::to($menu->icon)}}">
                                    </span>
                                            </div>
                                        </a>
                                    </li>
                                @endif
                            @endif
                        @elseif($menu->visibility == 0)
                            @if(str_contains($menu->link , '.fr') || str_contains($menu->link , '.com') || str_contains($menu->link , '.org') || str_contains($menu->link , '.net'))
                                @if(starts_with($menu->link , 'wwww.'))
                                    <li>
                                        <a class="custom-color-a" href="http://{{$menu->link}}" target="_blank">
                                            <div id="border_menu_link">
                                                <span
                                                        data-toggle="tooltip_menu" data-original-title="{{$menu->name}}"
                                                        class="fa" aria-hidden="true">
                                                    <img class="custom_fa" src="{{URL::to($menu->icon)}}">
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                @elseif(starts_with($menu->link , 'http://'))
                                    <li>
                                        <a class="custom-color-a" href="{{$menu->link}}" target="_blank">
                                            <div id="border_menu_link">
                                                <span
                                                        data-toggle="tooltip_menu" data-original-title="{{$menu->name}}"
                                                        class="fa" aria-hidden="true">
                                                    <img class="custom_fa" src="{{URL::to($menu->icon)}}">
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                @elseif(starts_with($menu->link , 'https://'))
                                    <li>
                                        <a class="custom-color-a" href="{{$menu->link}}" target="_blank">
                                            <div id="border_menu_link">
                                                <span
                                                        data-toggle="tooltip_menu" data-original-title="{{$menu->name}}"
                                                        class="fa" aria-hidden="true">
                                                    <img class="custom_fa" src="{{URL::to($menu->icon)}}">
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                @elseif(!starts_with($menu->link , 'https://') && !starts_with($menu->link , 'http://') && !starts_with($menu->link , 'www.'))
                                    <li>
                                        <a class="custom-color-a" href="http://www.{{$menu->link}}" target="_blank">
                                            <div id="border_menu_link">
                                                <span
                                                        data-toggle="tooltip_menu" data-original-title="{{$menu->name}}"
                                                        class="fa" aria-hidden="true">
                                                    <img class="custom_fa" src="{{URL::to($menu->icon)}}">
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                @endif
                            @else
                                @if(starts_with($menu->link , 'wwww'))
                                    <li>
                                        <a class="custom-color-a" href="http://{{$menu->link}}.fr" target="_blank">
                                            <div id="border_menu_link">
                                                <span
                                                        data-toggle="tooltip_menu" data-original-title="{{$menu->name}}"
                                                        class="fa" aria-hidden="true">
                                                    <img class="custom_fa" src="{{URL::to($menu->icon)}}">
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                @elseif(starts_with($menu->link , 'http://'))
                                    <li>
                                        <a class="custom-color-a" href="{{$menu->link}}.fr" target="_blank">
                                            <div id="border_menu_link">
                                                <span
                                                        data-toggle="tooltip_menu" data-original-title="{{$menu->name}}"
                                                        class="fa" aria-hidden="true">
                                                    <img class="custom_fa" src="{{URL::to($menu->icon)}}">
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                @elseif(starts_with($menu->link , 'https://'))
                                    <li>
                                        <a class="custom-color-a" href="{{$menu->link}}.fr" target="_blank">
                                            <div id="border_menu_link">
                                                <span
                                                        data-toggle="tooltip_menu" data-original-title="{{$menu->name}}"
                                                        class="fa" aria-hidden="true">
                                                    <img class="custom_fa" src="{{URL::to($menu->icon)}}">
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                @elseif(!starts_with($menu->link , 'https://') && !starts_with($menu->link , 'http://') && !starts_with($menu->link , 'www.'))
                                    <li>
                                        <a class="custom-color-a" href="http://www.{{$menu->link}}.fr" target="_blank">
                                            <div id="border_menu_link">
                                                <span
                                                        data-toggle="tooltip_menu" data-original-title="{{$menu->name}}"
                                                        class="fa" aria-hidden="true">
                                                    <img class="custom_fa" src="{{URL::to($menu->icon)}}">
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                @endif
                            @endif
                        @endif
                    @endif
                @endforeach
                @if(Auth::check())
                    @if (Auth::user()->isAdmin())
                        <li><a class="custom-color-a" href="{{route('pl_admin')}}">Admin</a></li>
                        <li><a href="http://ozanet.fr/cdt/?md5=82b1f4abc1130b481dac6baccad68a97&nom_prof=DESCHAMPS&passe=&Submit2=Valider">Test cahier de texte</a></li>
                    @endif
                @endif
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="search" style="margin-right: 25px">
                    <form target="_blank" action="http://www.google.fr/search" method="get">
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
            </ul>
        </div>
    </div>
</nav>
<div class="clearfix"></div>

<div class="slide-toggle col-lg-8" ng-show="slideToggle" style="position: absolute; right: 10px; z-index: 20; box-sizing: border-box;">
    @include('includes.navbar.sign')
</div>
<div class="slide-toggle col-lg-8" ng-show="slideToggle2" style="position: absolute; right: 50px; z-index: 20; box-sizing: border-box;">
    @include('includes.navbar.contact')
</div>
<script type="text/javascript">
    process = function () {
        window.open('about:blank', 'popup', 'width=320,height=240,resizeable=no');
        document.login.setAttribute('target', 'popup');
        document.login.setAttribute('onsubmit', '');
        document.login.submit();
    };
</script>