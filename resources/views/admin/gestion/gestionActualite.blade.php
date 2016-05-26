<div class="col-md-12">
    <div class="box box-info box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">Gestion des Actualités</h3>
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
                                    <th>Créateur</th>
                                    <th>Date</th>
                                    <th>Statut</th>
                                    <th>Contenu</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($posts as $post)
                                    <tr>
                                        <td>{{ $post->id }}</td>
                                        <td>{{$post->user->first_name}}</td>
                                        <td>{{date('d M Y' ,strtotime($post->user->created_at))}}</td>
                                        <td><span class="label label-success">Approved</span></td>
                                        <td>
                                            <div id="articleNew"
                                                 class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xs-offset-1 col-md-offset-1 col-sm-offset-1">
                                                <div class="panel panel-primary">
                                                    <div class="panel panel-heading">Actualité
                                                        du : {{date('d M Y' ,strtotime($post->user->created_at))}}</div>
                                                    <div class="panel panel-body">
                                                        <div>
                                                            <article class="post" data-postid="{{ $post->id }}" data-content="{!! html_entity_decode($post->body) !!}">
                                                                <p id="thisArticle">{!! html_entity_decode($post->body) !!}</p>
                                                                <!--Fonction user dans post.php-->
                                                                <div class="info">
                                                                    Postée par {{$post->user->first_name}} crée
                                                                    le {{$post->user->created_at}}
                                                                </div>
                                                                <!--EMOTIONS-->
                                                                <div class="interaction">

                                                                    <a class="btn icon-btn btn-success editAdmin"
                                                                       href="#">
                                                                        <span class="glyphicon btn-glyphicon glyphicon-plus img-circle text-success"></span>
                                                                        Edition
                                                                    </a> |

                                                                    <a class="btn icon-btn btn-danger"
                                                                       href="{{ route('post.delete.admin', ['post_id' => $post->id]) }}">
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

<div class="modal fade" tabindex="-1" role="dialog" id="edit-modal">
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
                        <label for="post-body"> Edition du post</label>
                        <textarea id="post-body" name="post-body" class="form-control" rows="5"></textarea>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                <button id="modal-save" type="button" class="btn btn-primary">Enregistrer les données</button>
            </div>
        </div>
    </div>
</div>