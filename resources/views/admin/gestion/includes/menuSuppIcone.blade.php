<div class="box box-danger">
    <div class="box-header with-border">
        <h3 class="box-title">Supprmier une icône</h3>
        <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div><!-- /.box-tools -->
    </div><!-- /.box-header -->
    <div class="box-body table-responsive no-padding">
        <header><h3>Supression de l'icône : </h3></header>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Icône</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($faicons as $icon)
                <tr>
                    <td>{{$icon->id}}</td>
                    <td>{{$icon->faicon}}</td>
                    <td><img class="custom_fa" src="{{URL::to($icon->faicon)}}"></td>
                    <td>
                        <a class="btn icon-btn btn-danger"
                           href="{{ route('icon.delete.admin', ['icon_id' => $icon->id]) }}">
                            <span class="glyphicon btn-glyphicon glyphicon-trash img-circle text-danger"></span>
                            Supprimmer
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>

        </table>
    </div><!-- /.box-body -->
</div>