<div class="col-md-12">
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">Ajout d'un accès rapide</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
        </div>
        <div class="box-body">
            <header><h3>Accès rapide vers : </h3></header>
            <form action="{{route('access.create')}}" method="post">
                @include('admin.gestion.includes.accessElement')
                <div class="form-group bg-">
                    <textarea class="form-control text_actu" name="body" id="access_mce" rows="5"
                              placeholder="Description : ..."></textarea>
                </div>
                <button type="submit" class="btn icon-btn btn-info">
                    <span class="glyphicon btn-glyphicon glyphicon-book img-circle text-info"></span>
                    Submit
                </button>
                <input type="hidden" value="{{Session::token()}}" name="_token">
            </form>
            @include('admin.gestion.includes.accessPreview')
        </div>
    </div>
</div>