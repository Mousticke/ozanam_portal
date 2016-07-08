<div class="col-md-12">
    <div class="box box-warning box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">Administration des classes</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div><!-- /.box-tools -->
        </div><!-- /.box-header -->
        <div class="box-body" style="display: block;">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-body no-padding">
                            <button  ng-click="slideToggle=! slideToggle"  class="btn icon-btn btn-success">
                                <span class="glyphicon btn-glyphicon glyphicon-plus img-circle text-success"></span>
                                Ajout d'une classe
                            </button>
                            <div class="slide-toggle col-lg-8" ng-show="slideToggle">
                                @include('admin.gestion.includes.classe.ajoutClasse')
                            </div>
                            <button ng-click="slideToggle4=! slideToggle4" class="btn icon-btn btn-warning">
                                <span class="glyphicon btn-glyphicon glyphicon-plus img-circle text-warning"></span>
                                Modifier une classe
                            </button>
                            <div class="slide-toggle col-lg-8" ng-show="slideToggle4">
                                @include('admin.gestion.includes.classe.modifierClasse')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

