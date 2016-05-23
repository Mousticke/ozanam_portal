<div class="col-md-12">
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">Ajout dans le Carousel</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div><!-- /.box-tools -->
        </div><!-- /.box-header -->
        <div class="box-body">
            <header><h3>Gestion du carousel </h3></header>
            <form action="{{route('carousel.create')}}" method="post">
                <div class="form-group">
                    <textarea class="form-control" name="body" id="new-post" rows="5"
                              placeholder="Affichage du carousel"></textarea>
                </div>
                <button type="submit" class="btn icon-btn btn-info">
                    <span class="glyphicon btn-glyphicon glyphicon-book img-circle text-info"></span>
                    Submit
                </button>
                <input type="hidden" value="{{Session::token()}}" name="_token">
            </form>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
</div>