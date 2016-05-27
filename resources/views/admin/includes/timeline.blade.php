<div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
        <li class="active">
            <a style="color: #0c0c0c !important; font-weight: bold;" href="#timeline" data-toggle="tab" aria-expanded="false">Timeline</a>
        </li>
    </ul>

    <div class="tab-content">
        <div class="tab-pane active" id="timeline">
            <ul class="timeline timeline-inverse">
                @foreach($timelines as $key => $timeline)
                        @if($key>0 && date('d M Y' ,strtotime($timelines[$key-1]->created_at))!= date('d M Y' ,strtotime($timeline->created_at)))
                            <li class="time-label">
                                <span class="bg-red">{{date('d M Y' ,strtotime($timeline->created_at))}}</span>
                            </li>
                        @endif
                    @if($timeline->post_id != null)
                        <li>
                            <!-- Icone de la timeline -->
                            <i class="fa fa-newspaper-o bg-blue"></i>
                            <div class="timeline-item">
                                <span class="time"><i class="fa fa-clock-o"></i> {{$timeline->created_at}}</span>
                               @if($timeline->user_id != null)
                                    <h3 class="timeline-header"><a href="#">{{$timeline->title}}</a> par {{$timeline->user->first_name}}</h3>
                                @else
                                    <h3 class="timeline-header"><a href="#">{{$timeline->title}}</a></h3>
                                @endif
                                <div class="timeline-body">
                                    @if($timeline->action == 0)
                                        <p style="color : darkblue; font-weight:bold;">{{$timeline->user->first_name}}
                                            a posté :
                                        </p>
                                        {!! html_entity_decode($timeline->post->body) !!}
                                        <br>
                                        <p class="time-label"><i class="fa fa-clock-o"></i> le {{date('d M Y - H:m:s' ,strtotime($timeline->updated_at))}}</p>
                                    @elseif($timeline->action == 1)
                                        <p style="color : darkblue; font-weight:bold;">{{$timeline->user->first_name}}
                                            a supprimé :
                                        </p>
                                        {{$timeline->post->body}}
                                        <br>
                                        <p class="time-label"><i class="fa fa-clock-o"></i> le {{date('d M Y - H:m:s' ,strtotime($timeline->updated_at))}}</p>
                                    @elseif($timeline->action == 2)
                                        <p style="color : darkblue; font-weight:bold;">{{$timeline->user->first_name}}
                                            a édité :
                                        </p>
                                        {!! html_entity_decode($timeline->post->body) !!}
                                        <br>
                                        <p class="time-label"><i class="fa fa-clock-o"></i> le {{date('d M Y - H:m:s' ,strtotime($timeline->updated_at))}}</p>
                                    @endif
                                </div>

                                <div class="timeline-footer">
                                    <a class="btn btn-primary btn-xs">Gestion des actualités</a>
                                </div>
                            </div>
                        </li>
                    @elseif($timeline->carousel_id != null)

                        <li>
                            <!-- Icone de la timeline -->
                            <i class="fa fa fa-camera bg-purple"></i>
                            <div class="timeline-item">
                                <span class="time"><i class="fa fa-clock-o"></i> {{$timeline->created_at}}</span>

                                <h3 class="timeline-header"><a href="#">{{$timeline->title}}</a> par {{$timeline->user->first_name}}</h3>

                                <div class="timeline-body">
                                    @if($timeline->action == 0)
                                        <p style="color : darkblue; font-weight:bold;">{{$timeline->user->first_name}} a posté :</p> {{$timeline->carousel->body}} <br>
                                        <p class="time-label"><i class="fa fa-clock-o"></i> le {{date('d M Y - H:m:s' ,strtotime($timeline->updated_at))}}</p>
                                    @elseif($timeline->action == 1)
                                        <p style="color : darkblue; font-weight:bold;">{{$timeline->user->first_name}} a supprimé : </p>  {{$timeline->carousel->body}} <br>
                                        <p class="time-label"><i class="fa fa-clock-o"></i> le {{date('d M Y - H:m:s' ,strtotime($timeline->updated_at))}}</p>
                                    @elseif($timeline->action == 2)
                                        <p style="color : darkblue; font-weight:bold;">{{$timeline->user->first_name}} a édité : </p>  {{$timeline->carousel->body}} <br>
                                        <p class="time-label"><i class="fa fa-clock-o"></i> le {{date('d M Y - H:m:s' ,strtotime($timeline->updated_at))}}</p>
                                    @endif
                                </div>

                                <div class="timeline-footer">
                                    <a class="btn bg-purple btn-xs">Gestion du Carousel</a>
                                </div>
                            </div>
                        </li>
                    @elseif($timeline->menu_id != null)
                        <li>
                            <!-- Icone de la timeline -->
                            <i class="fa fa-navicon bg-aqua"></i>
                            <div class="timeline-item">
                                <span class="time"><i class="fa fa-clock-o"></i> {{$timeline->created_at}}</span>

                                <h3 class="timeline-header"><a href="#">{{$timeline->title}}</a> par {{$timeline->user->first_name}}</h3>

                                <div class="timeline-body">
                                    @if($timeline->action == 0)
                                        <p style="color : darkblue; font-weight:bold;">{{$timeline->user->first_name}} a posté :</p> {{$timeline->menu->name}}
                                        <br/>
                                        avec une visibilité  :
                                        @if($timeline->menu->visiblity == 1)
                                            <span class="label label-danger">Privée</span>
                                        @elseif($timeline->menu->visiblity == 0)
                                            <span class="label label-success">Public</span>
                                        @endif
                                        <br>
                                        <p class="time-label"><i class="fa fa-clock-o"></i> le {{date('d M Y - H:m:s' ,strtotime($timeline->updated_at))}}</p>
                                    @elseif($timeline->action == 1)
                                        <p style="color : darkblue; font-weight:bold;">{{$timeline->user->first_name}} a supprimé : </p>  {{$timeline->menu->name}}
                                        <br/>
                                        avec une visibilité  :
                                        @if($timeline->menu->visiblity == 1)
                                            <span class="label label-danger">Privée</span>
                                        @elseif($timeline->menu->visiblity == 0)
                                            <span class="label label-success">Public</span>
                                        @endif
                                        <br>
                                        <p class="time-label"><i class="fa fa-clock-o"></i> le {{date('d M Y - H:m:s' ,strtotime($timeline->updated_at))}}</p>
                                    @elseif($timeline->action == 2)
                                        <p style="color : darkblue; font-weight:bold;">{{$timeline->user->first_name}} a édité : </p>  {{$timeline->menu->name}}
                                        <br/>
                                        avec une visibilité  :
                                        @if($timeline->menu->visiblity == 1)
                                            <span class="label label-danger">Privée</span>
                                        @elseif($timeline->menu->visiblity == 0)
                                            <span class="label label-success">Public</span>
                                        @endif
                                        <br>
                                        <p class="time-label"><i class="fa fa-clock-o"></i> le {{date('d M Y - H:m:s' ,strtotime($timeline->updated_at))}}</p>
                                    @endif
                                </div>

                                <div class="timeline-footer">
                                    <a class="btn btn-info btn-xs">Gestion du menu</a>
                                </div>
                            </div>
                        </li>
                    @elseif($timeline->faicon_id != null)

                        <li>
                            <!-- Icone de la timeline -->
                            <i class="fa fa-link bg-yellow"></i>
                            <div class="timeline-item">
                                <span class="time"><i class="fa fa-clock-o"></i> {{$timeline->created_at}}</span>

                                <h3 class="timeline-header"><a href="#">{{$timeline->title}}</a> par {{$timeline->user->first_name}}</h3>

                                <div class="timeline-body">
                                    @if($timeline->action == 0)
                                        <p style="color : darkblue; font-weight:bold;">{{$timeline->user->first_name}} a posté :</p> {{$timeline->faicon->faicon}}
                                        <img class="custom_fa" src="{{URL::to($timeline->faicon->faicon)}}">
                                        <br>
                                        <p class="time-label"><i class="fa fa-clock-o"></i> le {{date('d M Y - H:m:s' ,strtotime($timeline->updated_at))}}</p>
                                    @elseif($timeline->action == 1)
                                        <p style="color : darkblue; font-weight:bold;">{{$timeline->user->first_name}} a supprimé : </p>  {{$timeline->faicon->faicon}} <br>
                                        <p class="time-label"><i class="fa fa-clock-o"></i> le {{date('d M Y - H:m:s' ,strtotime($timeline->updated_at))}}</p>
                                    @elseif($timeline->action == 2)
                                        <p style="color : darkblue; font-weight:bold;">{{$timeline->user->first_name}} a édité : </p>  {{$timeline->faicon->faicon}}
                                        <img class="custom_fa" src="{{URL::to($timeline->faicon->faicon)}}">
                                        <br>
                                        <p class="time-label"><i class="fa fa-clock-o"></i> le {{date('d M Y - H:m:s' ,strtotime($timeline->updated_at))}}</p>
                                    @endif
                                </div>

                                <div class="timeline-footer">
                                    <a class="btn btn-warning btn-xs">Gestion du menu</a>
                                </div>
                            </div>
                        </li>
                    @endif

                @endforeach
            </ul>
        </div>
    </div>

</div>



