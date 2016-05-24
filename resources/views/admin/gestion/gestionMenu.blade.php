<div class="col-md-12">
    <div class="box box-info box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">Gestion du Menu</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div><!-- /.box-tools -->
        </div><!-- /.box-header -->
        <div class="box-body" style="display: block;">
            <!--Interaction des actualités-->
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Lien</th>
                                    <th>Liste des icônes disponibles</th>
                                    <th>Icône</th>
                                    <!--<th>Visibilité (tous, admin, connecté)</th>-->
                                    <th>Actions</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($menus as $menu)
                                    <tr class="menu" data-postid="{{ $menu->id }}">
                                        <td>{{$menu->id}}</td>
                                        <td class="name-site">{{$menu->name}}</td>
                                        @if(str_contains($menu->link , '.fr') || str_contains($menu->link , '.com') || str_contains($menu->link , '.org') || str_contains($menu->link , '.net'))
                                            @if(starts_with($menu->link , 'wwww.'))
                                                <td><a class="link-site" href="http://{{$menu->link}}"
                                                       target="_blank">http://{{$menu->link}}</a></td>
                                            @elseif(starts_with($menu->link , 'http://'))
                                                <td><a class="link-site" href="{{$menu->link}}" target="_blank">{{$menu->link}}</a></td>
                                            @elseif(starts_with($menu->link , 'https://'))
                                                <td><a class="link-site" href="{{$menu->link}}" target="_blank">{{$menu->link}}</a></td>
                                            @elseif(!starts_with($menu->link , 'https://') && !starts_with($menu->link , 'http://') && !starts_with($menu->link , 'www.'))
                                                <td><a class="link-site" href="http://www.{{$menu->link}}"
                                                       target="_blank">http://www.{{$menu->link}}</a></td>
                                            @endif
                                        @else
                                            @if(starts_with($menu->link , 'wwww'))
                                                <td><a class="link-site" href="http://{{$menu->link}}.fr"
                                                       target="_blank">http://{{$menu->link}}.fr</a></td>
                                            @elseif(starts_with($menu->link , 'http://'))
                                                <td><a class="link-site" href="{{$menu->link}}.fr" target="_blank">{{$menu->link}}.fr</a>
                                                </td>
                                            @elseif(starts_with($menu->link , 'https://'))
                                                <td><a class="link-site" href="{{$menu->link}}.fr" target="_blank">{{$menu->link}}.fr</a>
                                                </td>
                                            @elseif(!starts_with($menu->link , 'https://') && !starts_with($menu->link , 'http://') && !starts_with($menu->link , 'www.'))
                                                <td><a class="link-site" href="http://www.{{$menu->link}}.fr"
                                                       target="_blank">http://www.{{$menu->link}}.fr</a></td>
                                            @endif
                                        @endif
                                        <td>
                                            <select class="wpmse_select2">
                                                @foreach($faicons as $icon)
                                                    <option value="{{$icon->faicon}}" style="background-image: {{URL::to($icon->faicon)}};"><i class="fa {{$icon->faicon}}"
                                                                                         aria-hidden="true"></i>{{$icon->faicon}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td><span class="fa {{$menu->icon}}" aria-hidden="true"></span></td>
                                        <!-- <td><span class="label label-success">Tous</span></td>-->
                                        <td>
                                            <div id="articleNew"
                                                 class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xs-offset-1 col-md-offset-1 col-sm-offset-1">
                                                <div class="panel panel-primary">
                                                    <div class="panel panel-heading">Choix de l'action</div>
                                                    <div class="panel panel-body">
                                                        <div>
                                                            <article>
                                                                <p>{{$menu->name}} -> {{$menu->link}}
                                                                    -> {{$menu->icon}} </p>
                                                                <div class="interaction">
                                                                    <a class="btn icon-btn btn-success editMenu">
                                                                        <span class="glyphicon btn-glyphicon glyphicon-plus img-circle text-success"></span>
                                                                        Edition
                                                                    </a> |

                                                                    <a class="btn icon-btn btn-danger"
                                                                       href="{{ route('link.delete.admin', ['menu_id' => $menu->id]) }}">
                                                                        <span class="glyphicon btn-glyphicon glyphicon-trash img-circle text-danger"></span>
                                                                        Supprimmer
                                                                    </a>
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div>
            </div>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
</div>

<!--TODO : Modal form a enregistrer dans la base de données-->

<div class="modal fade" tabindex="-1" role="dialog" id="edit-modal-menu">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edition</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="input-group {{ $errors->has('new_name_site') ? 'has-error ' : '' }}">
                        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-credit-card"
                                                                             aria-hidden="true"></i></span>
                        <input aria-describedby="basic-addon1" class="form-control" type="text" name="new_name_site" id="new_name_site">
                    </div>
                    <div class="input-group {{ $errors->has('new_link_site') ? 'has-error ' : '' }}">
                        <!-- <label for="email">Votre Nom </label>-->
                        <span class="input-group-addon" id="basic-addon2"><i class="fa fa-internet-explorer"
                                                                             aria-hidden="true"></i></span>
                        <input aria-describedby="basic-addon2" placeholder="lien" class="form-control" type="text"
                               name="new_link_site" id="new_link_site" value="{{ Request::old('new_link_site') }}">
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button id="modal-saveMenu" type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>