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
            <form action="{{route('post.create')}}" method="post" id="ajout_actu" enctype="multipart/form-data">
                @include('admin.gestion.includes.actuElements')
                @include('admin.gestion.includes.actuSocial')
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
            @include('admin.gestion.includes.actuPreview')
        </div><!-- /.box-body -->
    </div><!-- /.box -->
</div>