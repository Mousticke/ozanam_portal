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