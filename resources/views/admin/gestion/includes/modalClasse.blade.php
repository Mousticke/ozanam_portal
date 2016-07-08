<div class="modal fade modal-wide modal-warning" id="classe_display">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×
                </button>
                <h4 class="modal-title classe_title">
                    <span class="info-box-text"><i class="fa fa-calendar"></i>&nbsp; Classe de :</span>
                    <span id="classe_name" class="info-box-number"></span>
                </h4>
            </div>
            <div class="modal-body classe_student" style="background-color: #FFFFFF !important; color : #5D9CEC !important;">
                <div class="row classe_info">
                    <p>Unité pédagogique : <strong id="UtP"></strong></p>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Nom</th>
                        </tr>
                        </thead>
                        <tbody id="eleves">
                        </tbody>
                    </table>
                </div>
                <br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->