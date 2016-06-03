<div class="col-lg-8 col-lg-offset-2"><!---->
    <div class="row posts">
        <div ng-cloak>
                <div class="md-padding" layout-xs="column" layout="row">
                <div flex-xs flex-gt-xs="100" layout="row">
                    @foreach($posts as $key=>$post)
                        @if($post->id != 1 && $key<=4)
                            <div class="info-box card radius shadowDepth1 bg-{{$post->color}}" data-actuid="{{ $post->id }}"
                                 data-title="{{$post->titre}}" data-img="{{$post->image_actu}}" data-content="{{$post->body}}"
                                 data-date="{{date('d M Y' ,strtotime($post->created_at))}}" data-link = " @foreach($links as $link)
                            @if($link->post_id == $post->id)
                            @if(str_contains($link->body , '.fr') || str_contains($link->body , '.com') || str_contains($link->body , '.org') || str_contains($link->body , '.net'))
                            @if(starts_with($link->body , 'wwww.'))
                                    <a class='custom-color-a-link' href='http://{{$link->body}}'>http://{{$link->body}}</a>,
                                    @elseif(starts_with($link->body , 'http://'))
                                    <a class='custom-color-a-link' href='http://{{$link->body}}'>http://{{$link->body}}</a>,
                                    @elseif(starts_with($link->body , 'https://'))
                                    <a class='custom-color-a-link' href='http://{{$link->body}}'>http://{{$link->body}}</a>,
                                    @elseif(!starts_with($link->body , 'https://') && !starts_with($link->body , 'http://') && !starts_with($link->body , 'www.'))
                                    <a class='custom-color-a-link' href='http://{{$link->body}}'>http://{{$link->body}}</a>,
                                    @endif
                            @else
                            @if(starts_with($link->body , 'wwww'))
                                    <a class='custom-color-a-link' href='http://{{$link->body}}.fr'>http://{{$link->body}}.fr</a>,
                                        @elseif(starts_with($link->body , 'http://'))
                                    <a class='custom-color-a-link' href='http://{{$link->body}}.fr'>http://{{$link->body}}.fr</a>,
                                        @elseif(starts_with($link->body , 'https://'))
                                    <a class='custom-color-a-link' href='http://{{$link->body}}.fr'>http://{{$link->body}}.fr</a>,
                                        @elseif(!starts_with($link->body , 'https://') && !starts_with($link->body , 'http://') && !starts_with($link->body , 'www.'))
                                    <a class='custom-color-a-link' href='http://www.{{$link->body}}.fr'>http://www.{{$link->body}}.fr</a>,
                                    @endif
                            @endif
                            @endif
                            @endforeach "
                            data-file = "@foreach($files as $key3=>$file)
                                @if($file->post_id == $post->id)
                                    <a class='custom-color-a-file' href='{{URL::to($file->body)}}'>Fichier joint {{$key3}}</a>,
                                 @endif
                            @endforeach "
                            >
                                <div class="bg-{{$post->color}} actu_content">
                                    <div class="card_header_actu bg-blue">
                                        <span class="info-box-text"><i class="fa fa-calendar"></i>&nbsp; Actualité du :</span>
                                        <span class="info-box-number">{{date('d M Y' ,strtotime($post->created_at))}}</span>
                                    </div>
                                    <div class="resume_bio">
                                        <a class="img-actu card__image border-tlr-radius">
                                            <img style="height: 250px;" src="{{URL::to($post->image_actu)}}" alt="image" class="border-tlr-radius">
                                        </a>
                                    </div>
                                    <div class="card__content card__padding">
                                        <div class="card__share">
                                            <div class="card__social">
                                                <a class="share-icon facebook" href="{{$post->facebook_post}}"><span
                                                            class="fa fa-facebook"></span></a>
                                                <a class="share-icon twitter" href="{{$post->twitter_post}}"><span
                                                            class="fa fa-twitter"></span></a>
                                                <a class="share-icon googleplus" href="{{$post->google_post}}"><span
                                                            class="fa fa-google-plus"></span></a>
                                            </div>
                                            <a id="share" class="share-toggle share-icon" href="#"></a>
                                        </div>
                                    </div>
                                    <article class="card__article">
                                        @if(strlen(html_entity_decode($post->body))>47)
                                            {{--*/ $resume = substr(html_entity_decode($post->body),0, 100) /*--}}
                                            <div style="text-indent: 20px !important;" class="contentArticle article_cut">
                                                {!! html_entity_decode($resume) !!}  <em>...</em> </div>
                                            <div style="display: none;text-indent: 20px !important;" class="contentArticle article_full">
                                                {!! html_entity_decode($post->body) !!}  <em>...</em> </div>
                                        @else
                                            <div style="text-indent: 20px !important;" class="contentArticle article_full">{!! html_entity_decode($post->body) !!}</div>
                                        @endif
                                    </article>

                                </div>
                                <div class="readme_center">
                                    <a href="#" class="btn icon-btn btn-info readmore">
                                        <i class="glyphicon btn-glyphicon glyphicon-book img-circle text-info"></i>
                                        Lire plus
                                    </a>
                                </div>
                                <!--MODAL-->

                            </div>
                        @endif
                        <div class="modal fade modal-wide modal-primary" id="actualite_display">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                            ×
                                        </button>
                                        <h4 class="modal-title">
                                            <span class="info-box-text"><i class="fa fa-calendar"></i>&nbsp; Actualité du :</span>
                                            <span id="date" class="info-box-number"></span>
                                        </h4>
                                    </div>
                                    <div class="modal-body"
                                         style="background-color: #FFFFFF !important; color : #5D9CEC !important;">
                                        <div class="attach_media">
                                            <img src="" id="image_actu" style="max-height: 400px; max-width: 500px;" alt="img_modal" class="center_image_modal">
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
                                                    </div><!-- /.tab-pane -->
                                                    <div class="tab-pane" id="tab_2-2">
                                                    </div><!-- /.tab-pane -->
                                                    <div class="tab-pane" id="tab_3-2">
                                                        <a href="http://www.google.fr" class="facebook_modal"><i class="fa fa-facebook" aria-hidden="true"></i>&nbsp Facebook</a>
                                                    </div><!-- /.tab-pane -->
                                                </div><!-- /.tab-content -->
                                            </div><!-- nav-tabs-custom -->
                                        </div>
                                        <br>
                                        <blockquote class="modal_contentArticle"
                                                    style="color : #000 !important; border: 1px solid lightgrey; border-radius: 4px; width: 60%;">
                                            <em id="title_actu"></em><br/><hr/>
                                            <div id="content_actu"></div>
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
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
<div class="row">
    <div class="posts col-lg-offset-2">
        <!--Flux RSS-->
        <div id="articleNew" class="col-lg-4"><!--col-xs-7-->
            <div class="small-box info-box bg-orange">
                <span class="info-box-icon"><i class="fa fa-rss"></i></span>
                <div class="info-box-content">
                    <div class="panel-heading">Flux RSS</div>
                    <div class="progress">
                        <div class="progress-bar" style="width: 100%"></div>
                    </div>
                    <ul>
                        @foreach($xml as $feeds)
                            <li>
                                <strong>{{$feeds->title}}</strong>
                                <blockquote>{{$feeds->description}}</blockquote>
                                <strong>Date : {{$feeds->pubDate}}</strong>
                                <strong>Source : {{$feeds->link}}</strong>
                            </li>
                            <div class="progress">
                                <div class="progress-bar" style="width: 100%"></div>
                            </div>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="posts col-lg-offset-6"><!--col-xs-offset-4 col-md-offset-4 col-sm-offset-4-->
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
</div>

<div class="clearfix"></div>

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