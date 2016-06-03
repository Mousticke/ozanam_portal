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