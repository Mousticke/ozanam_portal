<div class="box box-success">
    <div class="box-header with-border">
        <h3 class="box-title">Ajout d'une icône</h3>
        <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div><!-- /.box-tools -->
    </div><!-- /.box-header -->
    <div class="box-body">
        <header><h3>Ajout de l'icône : </h3></header>
        <form action="{{route('post.icon.create')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
            <div class="input-group {{ $errors->has('icon_new') ? 'has-error ' : '' }}">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-image"
                                                                         aria-hidden="true"></i></span>
                <input aria-describedby="basic-addon1" placeholder="Icone (.png uniquement)" class="form-control" type="file"
                       name="icon_new" id="icon_new" value="{{ Request::old('icon_new') }}">
            </div>
            <button type="submit" class="btn icon-btn btn-info">
                <span class="glyphicon btn-glyphicon glyphicon-book img-circle text-info"></span>
                Submit
            </button>
            <input type="hidden" value="{{Session::token()}}" name="_token">
        </form>
    </div><!-- /.box-body -->
</div>