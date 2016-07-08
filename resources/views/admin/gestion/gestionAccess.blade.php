<div class="col-md-12">
    <div class="box box-info box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">Gestion des Accès rapide</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
        </div>
        <div class="box-body" style="display: block;">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Créateur</th>
                                    <th>Date</th>
                                    <th>Contenu</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($quickAccess as $access)
                                    @if($access->id != 1)
                                        <tr>
                                            <td>{{ $access->id }}</td>
                                            <td>{{$access->user->first_name}}</td>
                                            <td>{{date('d M Y' ,strtotime($access->user->created_at))}}</td>
                                            <td>
                                                <div id="articleNew"
                                                     class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xs-offset-1 col-md-offset-1 col-sm-offset-1">
                                                    <div class="panel panel-primary">
                                                        <div class="panel panel-heading">Bloc d'accès crée le :
                                                            {{date('d M Y' ,strtotime($access->user->created_at))}}</div>
                                                        <div class="panel panel-body">
                                                            <div>
                                                                <article class="access" data-accessid="{{ $access->id }}" data-content="{{$access->body}}">
                                                                    <p id="thisArticle">{!! html_entity_decode($access->body) !!}</p>
                                                                    <div class="info">
                                                                        Postée par {{$access->user->first_name}} crée
                                                                        le {{$access->user->created_at}}
                                                                    </div>
                                                                    <div class="interaction">

                                                                        <a class="btn icon-btn btn-success editAccess"
                                                                           href="#">
                                                                            <span class="glyphicon btn-glyphicon glyphicon-plus img-circle text-success"></span>
                                                                            Edition
                                                                        </a> |

                                                                        <a class="btn icon-btn btn-danger"
                                                                           href="{{ route('access.delete.admin', ['access_id' => $access->id]) }}">
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
                                    @endif
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

<div class="modal fade" tabindex="-1" role="dialog" id="edit-modal-access">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edition</h4>
            </div>

            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="access-body"> Edition du bloc d'accès rapide</label>
                        <textarea id="access-body" name="access-body" class="form-control" rows="5"></textarea>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                <button id="modal-save-access" type="button" class="btn btn-primary">Enregistrer les données</button>
            </div>
        </div>
    </div>
</div>