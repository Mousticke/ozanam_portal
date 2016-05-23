<div class="col-lg-8 col-lg-offset-2">
    <section class="row posts">
        <div ng-cloak>
            <md-content class="md-padding" layout-xs="column" layout="row">
                <div flex-xs flex-gt-xs="100" layout="row">
                    @foreach($posts as $key=>$post)
                        @if($key == 0)
                            <div class="info-box card radius shadowDepth1 bg-yellow" data-actuid="{{ $post->id }}">
                                <div class="card_header_actu bg-blue">
                                    <span class="info-box-text"><i
                                                class="fa fa-calendar"></i>&nbsp; Actualité du :</span>
                                    <span class="info-box-number">{{date('d M Y' ,strtotime($post->created_at))}}</span>
                                </div>

                                <div class="bg-yellow actu_content">
                                    <a href="#" class="img-actu card__image border-tlr-radius">
                                        <!--TODO : lien comme pour le saoir plus -->
                                        <img src="{{URL::to('slider/slider1.jpg')}}" alt="image"
                                             class="border-tlr-radius">
                                    </a>
                                    <div class="card__content card__padding ">
                                        <div class="card__share">
                                            <div class="card__social">
                                                <a class="share-icon facebook" href="#"><span
                                                            class="fa fa-facebook"></span></a>
                                                <a class="share-icon twitter" href="#"><span
                                                            class="fa fa-twitter"></span></a>
                                                <a class="share-icon googleplus" href="#"><span
                                                            class="fa fa-google-plus"></span></a>
                                            </div>

                                            <a id="share" class="share-toggle share-icon" href="#"></a>
                                        </div>

                                        <article class="card__article">
                                            <div class="contentArticle">{!! html_entity_decode($post->body) !!}</div>
                                        </article>
                                    </div>

                                    <div class="card__action">
                                        <div class="card__author">
                                            <img src="{{URL::to('slider/slider1.jpg')}}" alt="user">
                                            <div class="card__author-content">
                                                <p><em>Postée par {{$post->user->first_name}} mis à jour
                                                        le {{date('d M Y' ,strtotime($post->updated_at))}}</em></p>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#" class="btn icon-btn btn-info readmore">
                                        <i class="glyphicon btn-glyphicon glyphicon-book img-circle text-info"></i>
                                        Lire plus
                                    </a>
                                </div>
                            </div>
                            <div class="modal fade modal-primary" id="actualite_display">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                ×
                                            </button>
                                            <h4 class="modal-title">
                                                <span class="info-box-text"><i class="fa fa-calendar"></i>&nbsp; Actualité du :{{date('d M Y' ,strtotime($post->created_at))}}</span>
                                            </h4>
                                        </div>
                                        <div class="modal-body"
                                             style="background-color: #FFFFFF !important; color : #5D9CEC !important;">
                                            <div class="attach_media">
                                                <img style="max-height: 400px; max-width: 500px; margin-left: 28px;"
                                                     src="{{URL::to('slider/slider1.jpg')}}" alt="user">
                                            </div>
                                            <div class="attach_files" style="text-decoration: underline; float: left">
                                                <p><i class="fa fa-file" aria-hidden="true"></i>&nbsp Pièces jointes</p>
                                                <a href="#" target="_blank"> Fichier 1</a>
                                            </div>
                                            <div class="annexes_link" style="text-decoration: underline; float: right">
                                                <p><i class="fa fa-internet-explorer" aria-hidden="true"></i>&nbsp Liens
                                                    annexes</p>
                                                <a href="#" target="_blank">Site 1</a>
                                            </div>
                                            <br>
                                            <div class="contentArticle"
                                                 style="color : #000 !important; border: 3px solid lightblue; border-radius: 4px">
                                                {!! html_entity_decode($post->body) !!}
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary">Fermer</button>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                        @elseif($key == 1 )
                            <div class="info-box card radius shadowDepth1 bg-green" data-actuid="{{ $post->id }}">
                                <div class="card_header_actu bg-blue">
                                    <span class="info-box-text"><i
                                                class="fa fa-calendar"></i>&nbsp; Actualité du :</span>
                                    <span class="info-box-number">{{date('d M Y' ,strtotime($post->created_at))}}</span>
                                </div>

                                <div class="bg-green actu_content">
                                    <a href="#" class="img-actu card__image border-tlr-radius">
                                        <!--TODO : lien comme pour le saoir plus -->
                                        <img src="{{URL::to('slider/slider1.jpg')}}" alt="image"
                                             class="border-tlr-radius">
                                    </a>
                                    <div class="card__content card__padding ">
                                        <div class="card__share">
                                            <div class="card__social">
                                                <a class="share-icon facebook" href="#"><span
                                                            class="fa fa-facebook"></span></a>
                                                <a class="share-icon twitter" href="#"><span
                                                            class="fa fa-twitter"></span></a>
                                                <a class="share-icon googleplus" href="#"><span
                                                            class="fa fa-google-plus"></span></a>
                                            </div>

                                            <a id="share" class="share-toggle share-icon" href="#"></a>
                                        </div>

                                        <article class="card__article">
                                            <div class="contentArticle">{!! html_entity_decode($post->body) !!}</div>
                                        </article>
                                    </div>

                                    <div class="card__action">
                                        <div class="card__author">
                                            <img src="{{URL::to('slider/slider1.jpg')}}" alt="user">
                                            <div class="card__author-content">
                                                <p><em>Postée par {{$post->user->first_name}} mis à jour
                                                        le {{date('d M Y' ,strtotime($post->updated_at))}}</em></p>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#" class="btn icon-btn btn-info readmore">
                                        <i class="glyphicon btn-glyphicon glyphicon-book img-circle text-info"></i>
                                        Lire plus
                                    </a>
                                </div>
                            </div>
                            <div class="modal fade modal-primary" id="actualite_display">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                ×
                                            </button>
                                            <h4 class="modal-title">
                                                <span class="info-box-text"><i class="fa fa-calendar"></i>&nbsp; Actualité du :{{date('d M Y' ,strtotime($post->created_at))}}</span>
                                            </h4>
                                        </div>
                                        <div class="modal-body"
                                             style="background-color: #FFFFFF !important; color : #5D9CEC !important;">
                                            <div class="attach_media">
                                                <img style="max-height: 400px; max-width: 500px; margin-left: 28px;"
                                                     src="{{URL::to('slider/slider1.jpg')}}" alt="user">
                                            </div>
                                            <div class="attach_files" style="text-decoration: underline; float: left">
                                                <p><i class="fa fa-file" aria-hidden="true"></i>&nbsp Pièces jointes</p>
                                                <a href="#" target="_blank"> Fichier 1</a>
                                            </div>
                                            <div class="annexes_link" style="text-decoration: underline; float: right">
                                                <p><i class="fa fa-internet-explorer" aria-hidden="true"></i>&nbsp Liens
                                                    annexes</p>
                                                <a href="#" target="_blank">Site 1</a>
                                            </div>
                                            <br>
                                            <div class="contentArticle"
                                                 style="color : #000 !important; border: 3px solid lightblue; border-radius: 4px">
                                                {!! html_entity_decode($post->body) !!}
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary">Fermer</button>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                        @elseif($key == 2 )
                            <div class="info-box card radius shadowDepth1 bg-red" data-actuid="{{ $post->id }}">
                                <div class="card_header_actu bg-blue">
                                    <span class="info-box-text"><i
                                                class="fa fa-calendar"></i>&nbsp; Actualité du :</span>
                                    <span class="info-box-number">{{date('d M Y' ,strtotime($post->created_at))}}</span>
                                </div>

                                <div class="bg-red actu_content">
                                    <a href="#" class="img-actu card__image border-tlr-radius">
                                        <!--TODO : lien comme pour le saoir plus -->
                                        <img src="{{URL::to('slider/slider1.jpg')}}" alt="image"
                                             class="border-tlr-radius">
                                    </a>
                                    <div class="card__content card__padding ">
                                        <div class="card__share">
                                            <div class="card__social">
                                                <a class="share-icon facebook" href="#"><span
                                                            class="fa fa-facebook"></span></a>
                                                <a class="share-icon twitter" href="#"><span
                                                            class="fa fa-twitter"></span></a>
                                                <a class="share-icon googleplus" href="#"><span
                                                            class="fa fa-google-plus"></span></a>
                                            </div>

                                            <a id="share" class="share-toggle share-icon" href="#"></a>
                                        </div>

                                        <article class="card__article">
                                            <div class="contentArticle">{!! html_entity_decode($post->body) !!}</div>
                                        </article>
                                    </div>

                                    <div class="card__action">
                                        <div class="card__author">
                                            <img src="{{URL::to('slider/slider1.jpg')}}" alt="user">
                                            <div class="card__author-content">
                                                <p><em>Postée par {{$post->user->first_name}} mis à jour
                                                        le {{date('d M Y' ,strtotime($post->updated_at))}}</em></p>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#" class="btn icon-btn btn-info readmore">
                                        <i class="glyphicon btn-glyphicon glyphicon-book img-circle text-info"></i>
                                        Lire plus
                                    </a>
                                </div>
                            </div>
                            <div class="modal fade modal-primary" id="actualite_display">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                ×
                                            </button>
                                            <h4 class="modal-title">
                                                <span class="info-box-text"><i class="fa fa-calendar"></i>&nbsp; Actualité du :{{date('d M Y' ,strtotime($post->created_at))}}</span>
                                            </h4>
                                        </div>
                                        <div class="modal-body"
                                             style="background-color: #FFFFFF !important; color : #5D9CEC !important;">
                                            <div class="attach_media">
                                                <img style="max-height: 400px; max-width: 500px; margin-left: 28px;"
                                                     src="{{URL::to('slider/slider1.jpg')}}" alt="user">
                                            </div>
                                            <div class="attach_files" style="text-decoration: underline; float: left">
                                                <p><i class="fa fa-file" aria-hidden="true"></i>&nbsp Pièces jointes</p>
                                                <a href="#" target="_blank"> Fichier 1</a>
                                            </div>
                                            <div class="annexes_link" style="text-decoration: underline; float: right">
                                                <p><i class="fa fa-internet-explorer" aria-hidden="true"></i>&nbsp Liens
                                                    annexes</p>
                                                <a href="#" target="_blank">Site 1</a>
                                            </div>
                                            <br>
                                            <div class="contentArticle"
                                                 style="color : #000 !important; border: 3px solid lightblue; border-radius: 4px">
                                                {!! html_entity_decode($post->body) !!}
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary">Fermer</button>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                        @else
                            <div class="info-box card radius shadowDepth1 bg-yellow" data-actuid="{{ $post->id }}">
                                <div class="card_header_actu bg-blue">
                                    <span class="info-box-text"><i
                                                class="fa fa-calendar"></i>&nbsp; Actualité du :</span>
                                    <span class="info-box-number">{{date('d M Y' ,strtotime($post->created_at))}}</span>
                                </div>

                                <div class="bg-yellow actu_content">
                                    <a href="#" class="img-actu card__image border-tlr-radius">
                                        <!--TODO : lien comme pour le saoir plus -->
                                        <img src="{{URL::to('slider/slider1.jpg')}}" alt="image"
                                             class="border-tlr-radius">
                                    </a>
                                    <div class="card__content card__padding ">
                                        <div class="card__share">
                                            <div class="card__social">
                                                <a class="share-icon facebook" href="#"><span
                                                            class="fa fa-facebook"></span></a>
                                                <a class="share-icon twitter" href="#"><span
                                                            class="fa fa-twitter"></span></a>
                                                <a class="share-icon googleplus" href="#"><span
                                                            class="fa fa-google-plus"></span></a>
                                            </div>

                                            <a id="share" class="share-toggle share-icon" href="#"></a>
                                        </div>
                                        <article class="card__article">
                                            <div class="contentArticle">{!! html_entity_decode($post->body) !!}</div>
                                        </article>
                                    </div>
                                    <div class="card__action">
                                        <div class="card__author">
                                            <img src="{{URL::to('slider/slider1.jpg')}}" alt="user">
                                            <div class="card__author-content">
                                                <p><em>Postée par {{$post->user->first_name}} mis à jour
                                                        le {{date('d M Y' ,strtotime($post->updated_at))}}</em></p>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#" class="btn icon-btn btn-info readmore">
                                        <i class="glyphicon btn-glyphicon glyphicon-book img-circle text-info"></i>
                                        Lire plus
                                    </a>
                                </div>
                            </div>
                            <div class="modal fade modal-primary" id="actualite_display">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                ×
                                            </button>
                                            <h4 class="modal-title">
                                                <span class="info-box-text"><i class="fa fa-calendar"></i>&nbsp; Actualité du :{{date('d M Y' ,strtotime($post->created_at))}}</span>
                                            </h4>
                                        </div>
                                        <div class="modal-body"
                                             style="background-color: #FFFFFF !important; color : #5D9CEC !important;">
                                            <div class="attach_media">
                                                <img style="max-height: 400px; max-width: 500px; margin-left: 28px;"
                                                     src="{{URL::to('slider/slider1.jpg')}}" alt="user">
                                            </div>
                                            <div class="attach_files" style="text-decoration: underline; float: left">
                                                <p><i class="fa fa-file" aria-hidden="true"></i>&nbsp Pièces jointes</p>
                                                <a href="#" target="_blank"> Fichier 1</a>
                                            </div>
                                            <div class="annexes_link" style="text-decoration: underline; float: right">
                                                <p><i class="fa fa-internet-explorer" aria-hidden="true"></i>&nbsp Liens
                                                    annexes</p>
                                                <a href="#" target="_blank">Site 1</a>
                                            </div>
                                            <br>
                                            <div class="contentArticle"
                                                 style="color : #000 !important; border: 3px solid lightblue; border-radius: 4px">
                                                {!! html_entity_decode($post->body) !!}
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary">Fermer</button>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                        @endif
                    @endforeach
                </div>
            </md-content>
        </div>

    </section>
</div>
<div>
    <md-divider md-inset></md-divider>
</div>
<br>
<section class="row posts col-lg-offset-3 col-xs-offset-3 col-md-offset-3 col-sm-offset-3">
    <!--Actu Facebook-->
    <div id="articleNew" class="col-lg-8 col-xs-8">
        <div class="small-box info-box bg-blue">
            <span class="info-box-icon"><i class="fa fa-facebook"></i></span>
            <div class="info-box-content">
                <div class="panel-heading">Dernière Actu Facebook</div>
                <div class="progress">
                    <div class="progress-bar" style="width: 100%"></div>
                </div>
                <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FOzanamLyceeChalons%2Fposts%2F1767146926847630&width=600"
                        width="600" height="auto" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                        allowTransparency="true"></iframe>
            </div>
        </div>
    </div>
</section>

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
                        <div id="post-body" class="form-control"></div>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button id="modal-save" type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
