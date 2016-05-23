<div class="col-md-12">
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">Ajout d'un élément dans le menu</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div><!-- /.box-tools -->
        </div><!-- /.box-header -->
        <div class="box-body">
            <header><h3>Ajout de l'élément : </h3></header>
            <form action="{{route('post.menu.create')}}" method="post" class="form-horizontal">
                <div class="input-group {{ $errors->has('new_name') ? 'has-error ' : '' }}">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-credit-card"
                                                                         aria-hidden="true"></i></span>
                    <input aria-describedby="basic-addon1" placeholder="Nom" class="form-control" type="text"
                           name="new_name" id="new_name" value="{{ Request::old('new_name') }}">
                </div>
                <div class="input-group {{ $errors->has('link') ? 'has-error ' : '' }}">
                    <span class="input-group-addon" id="basic-addon2"><i class="fa fa-internet-explorer"
                                                                         aria-hidden="true"></i></span>
                    <input aria-describedby="basic-addon2" placeholder="lien" class="form-control" type="text"
                           name="link" id="link" value="{{ Request::old('link') }}">
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