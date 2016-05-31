<div class="col-md-12">
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">Ajout d'une actualité</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div><!-- /.box-tools -->
        </div><!-- /.box-header -->
        <div class="box-body">
            <header><h3>Actualités du moment : </h3></header>
            <form action="{{route('post.create')}}" method="post">
                <div class="input-group {{ $errors->has('color_actu') ? 'has-error ' : '' }}">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-paint-brush"
                                                                         aria-hidden="true"></i></span>
                    <select  aria-describedby="basic-addon1" class="form-control"
                             name="color_actu" id="color_actu" title="Choix de la couleur" >
                        <option disabled selected value> -- Selectionner une couleure -- </option>
                        @foreach($colors as $color)
                            <option name="color" class="bg-{{$color->name}}" value="{{$color->name}}">
                                <p style="background: {{$color->name}};"> {{$color->name}}</p>
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="input-group {{ $errors->has('facebook_actu') ? 'has-error ' : '' }}">
                    <span style="background-color: #3b5998; color: white;" class="input-group-addon" id="basic-addon2">
                        <a rel="popover_facebook" data-trigger="focus" data-container="body" data-toggle="popover" data-original-title="Aide" style="color: white;" href="#">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                    </span>
                    <div id="tooltip_facebook" class="hide">
                        @include('admin.includes.tooltip.facebook')
                    </div>
                    <input type="url" aria-describedby="basic-addon2" class="form-control"
                           name="facebook_actu" id="facebook_actu" title="Lier un post Facebook : " placeholder="Lier un post Facebook : ex: https://www.facebook.com/OzanamLyceeChalons/posts/1771994209696235:0. Cliquez sur l'icône pour savoir comment faire">
                </div>

                <div class="input-group {{ $errors->has('twitter_actu') ? 'has-error ' : '' }}">
                    <span style="background-color: #1da1f2; color: white;" class="input-group-addon" id="basic-addon3">
                        <a rel="popover_twitter" data-trigger="focus" data-container="body" data-toggle="popover" data-original-title="Aide" style="color: white;" href="#">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                    </span>
                    <div id="tooltip_twitter" class="hide">
                        @include('admin.includes.tooltip.twitter')
                    </div>
                    <input type="url" aria-describedby="basic-addon3" class="form-control"
                           name="twitter_actu" id="twitter_actu" title="Lier un post Twitter : " placeholder="Lier un post Twitter : ex: https://twitter.com/Exemple/status/Exemple. Cliquez sur l'icône pour savoir comment faire">
                </div>

                <div class="input-group {{ $errors->has('google_actu') ? 'has-error ' : '' }}">
                    <span style="background-color: #d32f2f; color: white;" class="input-group-addon" id="basic-addon4">
                       <a rel="popover_google" data-trigger="focus" data-container="body" data-toggle="popover" data-original-title="Aide" style="color: white;" href="#">
                            <i class="fa fa-google-plus" aria-hidden="true"></i>
                        </a>
                    </span>
                    <div id="tooltip_google" class="hide">
                        @include('admin.includes.tooltip.google')
                    </div>
                    <input type="url" aria-describedby="basic-addon4" class="form-control"
                           name="google_actu" id="google_actu" title="Lier un post Google + : " placeholder="Lier un post Google + : ex: https://plus.google.com/exemple/posts/exemple. Cliquez sur l'icône pour savoir comment faire">
                </div>

                <div class="form-group bg-">
                    <textarea class="form-control text_actu" name="body" id="new-post" rows="5"
                              placeholder="Quoi de neuf..."></textarea>
                </div>
                <button type="submit" class="btn icon-btn btn-info">
                    <span class="glyphicon btn-glyphicon glyphicon-book img-circle text-info"></span>
                    Submit
                </button>
                <input type="hidden" value="{{Session::token()}}" name="_token">
            </form>
            <div class="row">
                <div class="col-lg-3">
                    <p>Aperçu de l'actualité</p>
                    <div class="info-box card radius shadowDepth1 ">
                        <div class="bg-aqua actu_content result_color">
                            <div class="card_header_actu bg-blue">
                                <div class="bulle_bleu"></div>
                                <span class="info-box-text"><i class="fa fa-calendar"></i>&nbsp; Actualité du :</span>
                                <span class="info-box-number">{{date('d M Y')}}</span>
                            </div>
                            <div class="resume_bio">
                                <a class="img-actu card__image border-tlr-radius">
                                    <img style="height: 250px;" src="{{URL::to('slider/slider1.jpg')}}" alt="image" class="border-tlr-radius">
                                </a>
                            </div>
                            <div class="card__content card__padding">
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
                            </div>

                            <article class="card__article" id="target_actu">
                            </article>
                            <div class="readme_center">
                                <a href="#" class="btn icon-btn btn-info readmore">
                                    <i class="glyphicon btn-glyphicon glyphicon-book img-circle text-info"></i>
                                    Lire plus
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <p>Aperçu du modal</p>
                    <div class="modal-primary" id="actualite_preview">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                        ×
                                    </button>
                                    <h4 class="modal-title">
                                        <span class="info-box-text"><i class="fa fa-calendar"></i>&nbsp; Actualité du :</span>
                                        <span class="info-box-number">{{date('d M Y')}}</span>
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
                                    <blockquote class="modal_contentArticle"
                                                style="color : #000 !important; border: 1px solid lightgrey; border-radius: 4px; width: 60%;">
                                        <em>Un titre</em><br/><hr/>
                                        <div id="content_actu_preview"></div>
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
                </div>

            </div>

        </div><!-- /.box-body -->
    </div><!-- /.box -->
</div>