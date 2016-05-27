<div class="col-lg-8 col-lg-offset-2"><!---->
    <div class="row posts">
        <div ng-cloak>
            <div class="md-padding" layout-xs="column" layout="row">
                <div flex-xs flex-gt-xs="100" layout="row">
                    @foreach($posts as $key=>$post)
                        @if($post->id != 1)
                            @if($key == 0)
                                <div class="info-box card radius shadowDepth1 bg-yellow" data-actuid="{{ $post->id }}">
                                    <div class="card_header_actu bg-blue">
                                        <div class="bulle_bleu"></div>
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
                            @elseif($key == 1 )
                                <div class="info-box card radius shadowDepth1 bg-green" data-actuid="{{ $post->id }}">
                                    <div class="card_header_actu bg-blue">
                                        <div class="bulle_verte"></div>
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
                            @elseif($key == 2 )
                                <div class="info-box card radius shadowDepth1 bg-red" data-actuid="{{ $post->id }}">
                                    <div class="card_header_actu bg-blue">
                                        <div class="bulle_rouge"></div>
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
                            @else
                                <div class="info-box card radius shadowDepth1 bg-yellow" data-actuid="{{ $post->id }}">
                                    <div class="card_header_actu bg-blue">
                                        <div class="bulle_bleu"></div>
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
                            @endif
                        @endif

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>

<div class="posts col-lg-offset-4 "><!--col-xs-offset-4 col-md-offset-4 col-sm-offset-4-->
    <!--Actu Facebook-->
    <div id="articleNew" class="col-lg-8 "><!--col-xs-7-->
        <div class="small-box info-box bg-blue">
            <span class="info-box-icon"><i class="fa fa-facebook"></i></span>
            <div class="info-box-content">
                <div class="panel-heading">Fil d'actualité Facebook</div>
                <div class="progress">
                    <div class="progress-bar" style="width: 100%"></div>
                </div>
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FOzanamLyceeChalons%2F%3Ffref%3Dts&tabs=timeline&width=500&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=152007268286" width="500" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>

<div class="modal fade modal-wide modal-primary" id="actualite_display">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×
                </button>
                <h4 class="modal-title">
                    <span class="info-box-text"><i class="fa fa-calendar"></i>&nbsp UNE DATE</span>
                </h4>
            </div>
            <div class="modal-body"
                 style="background-color: #FFFFFF !important; color : #5D9CEC !important;">
                <div class="attach_media">
                    <img style="max-height: 400px; max-width: 500px;"
                         src="{{URL::to('slider/slider1.jpg')}}" alt="img_modal" class="center_image_modal">
                </div>
                <div class="row">
                    <!-- Custom Tabs (Pulled to the right) -->
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs pull-right">
                            <li class="active annexes_link"><a href="#tab_1-1" data-toggle="tab" aria-expanded="true"><i class="fa fa-internet-explorer" aria-hidden="true"></i>&nbsp Liens</a>
                            </li>
                            <li class="annexes_files"><a href="#tab_2-2" data-toggle="tab" aria-expanded="false"><i class="fa fa-file" aria-hidden="true"></i>&nbsp Fichiers</a></li>
                            <li class="annexes_facebook"><a href="#tab_3-2" data-toggle="tab" aria-expanded="false"><i class="fa fa-facebook" aria-hidden="true"></i>&nbsp Facebook</a></li>
                            <li class="pull-left header"><i class="fa fa-th"></i>Liens/Fichiers Utiles</li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_1-1">
                                <a href="http://www.google.fr" class="link_modal"><i class="fa fa-internet-explorer" aria-hidden="true"></i>&nbsp Liens 1</a>
                                <a href="http://www.google.fr" class="link_modal"><i class="fa fa-internet-explorer" aria-hidden="true"></i>&nbsp Liens 2</a>
                            </div><!-- /.tab-pane -->
                            <div class="tab-pane" id="tab_2-2">
                                <a href="http://www.google.fr" class="files_modal"><i class="fa fa-file" aria-hidden="true"></i>&nbsp Fichier 1</a>
                                <a href="http://www.google.fr" class="files_modal"><i class="fa fa-file" aria-hidden="true"></i>&nbsp Fichier 2</a>
                            </div><!-- /.tab-pane -->
                            <div class="tab-pane" id="tab_3-2">
                                <a href="http://www.google.fr" class="facebook_modal"><i class="fa fa-facebook" aria-hidden="true"></i>&nbsp Facebook</a>
                            </div><!-- /.tab-pane -->
                        </div><!-- /.tab-content -->
                    </div><!-- nav-tabs-custom -->
                </div>
                <br>
                <blockquote class="contentArticle"
                     style="color : #000 !important; border: 1px solid lightgrey; border-radius: 4px; width: 60%;">
                    <em>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</em><br/><hr/>
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type
                    specimen book.
                    It has survived not only five centuries, but also the leap into electronic
                    typesetting,
                    remaining essentially unchanged. It was popularised in the 1960s with the release of
                    Letraset
                    sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                    software
                    like Aldus PageMaker including versions of Lorem Ipsum.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type
                    specimen book.
                    It has survived not only five centuries, but also the leap into electronic
                    typesetting,
                    remaining essentially unchanged. It was popularised in the 1960s with the release of
                    Letraset
                    sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                    software
                    like Aldus PageMaker including versions of Lorem Ipsum.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type
                    specimen book.
                    It has survived not only five centuries, but also the leap into electronic
                    typesetting,
                    remaining essentially unchanged. It was popularised in the 1960s with the release of
                    Letraset
                    sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                    software
                    like Aldus PageMaker including versions of Lorem Ipsum.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type
                    specimen book.
                    It has survived not only five centuries, but also the leap into electronic
                    typesetting,
                    remaining essentially unchanged. It was popularised in the 1960s with the release of
                    Letraset
                    sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                    software
                    like Aldus PageMaker including versions of Lorem Ipsum.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type
                    specimen book.
                    It has survived not only five centuries, but also the leap into electronic
                    typesetting,
                    remaining essentially unchanged. It was popularised in the 1960s with the release of
                    Letraset
                    sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                    software
                    like Aldus PageMaker including versions of Lorem Ipsum.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type
                    specimen book.
                    It has survived not only five centuries, but also the leap into electronic
                    typesetting,
                    remaining essentially unchanged. It was popularised in the 1960s with the release of
                    Letraset
                    sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                    software
                    like Aldus PageMaker including versions of Lorem Ipsum.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type
                    specimen book.
                    It has survived not only five centuries, but also the leap into electronic
                    typesetting,
                    remaining essentially unchanged. It was popularised in the 1960s with the release of
                    Letraset
                    sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                    software
                    like Aldus PageMaker including versions of Lorem Ipsum.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type
                    specimen book.
                    It has survived not only five centuries, but also the leap into electronic
                    typesetting,
                    remaining essentially unchanged. It was popularised in the 1960s with the release of
                    Letraset
                    sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                    software
                    like Aldus PageMaker including versions of Lorem Ipsum.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type
                    specimen book.
                    It has survived not only five centuries, but also the leap into electronic
                    typesetting,
                    remaining essentially unchanged. It was popularised in the 1960s with the release of
                    Letraset
                    sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                    software
                    like Aldus PageMaker including versions of Lorem Ipsum.
                </blockquote>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info">Précédent</button>
                <button type="button" class="btn btn-success">Suivant</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--
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
-->