<div class="row">
    <div class="col-md-3">
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
                    <span class="input-group-addon" id="basic-addon3"><i class="fa fa-image"
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
        </div><!-- /.box -->
    </div>
    <div class="col-md-3">
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
        </div><!-- /.box -->
    </div>
    <div class="col-md-6">
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Ajout d'un élément dans le menu</h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                </div><!-- /.box-tools -->
            </div><!-- /.box-header -->
            <div class="box-body">
                <header><h3>Ajout de l'élément : </h3></header>
                <form action="{{route('post.menu.create')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                    <div class="input-group {{ $errors->has('name') ? 'has-error ' : '' }}">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-credit-card"
                                                                         aria-hidden="true"></i></span>
                        <input aria-describedby="basic-addon1" placeholder="Nom" class="form-control" type="text"
                               name="name" id="name" value="{{ Request::old('name') }}">
                    </div>

                    <div class="input-group {{ $errors->has('link') ? 'has-error ' : '' }}">
                    <span class="input-group-addon" id="basic-addon2"><i class="fa fa-internet-explorer"
                                                                         aria-hidden="true"></i></span>
                        <input aria-describedby="basic-addon2" placeholder="lien" class="form-control" type="text"
                               name="link" id="link" value="{{ Request::old('link') }}">
                    </div>

                    <div class="input-group {{ $errors->has('icon') ? 'has-error ' : '' }}">
                    <span class="input-group-addon" id="basic-addon3"><i class="fa fa-image"
                                                                         aria-hidden="true"></i></span>
                        <input aria-describedby="basic-addon3" placeholder="Icone (.png uniquement)" class="form-control" type="file"
                               name="icon" id="icon" value="{{ Request::old('icon') }}">
                    </div>

                    <div class="input-group {{ $errors->has('visibiliy') ? 'has-error ' : '' }}">
                    <span class="input-group-addon" id="basic-addon4"><i class="fa fa-user"
                                                                         aria-hidden="true"></i></span>
                        <select aria-describedby="basic-addon4" name="visibility" class="wpmse_select2" title="Visibilité">
                            <option disabled selected value> -- select an option -- </option>
                            <option value="0">Public</option>
                            <option value="1">Privée</option>
                        </select>
                    </div>

                    <div class="input-group">
                    <span class="input-group-addon" id="basic-addon5"><i class="fa fa-image"
                                                                         aria-hidden="true"></i></span>
                        <select aria-describedby="basic-addon5" class="form-control"
                                name="icon_exist" id="icon_exist" title="Icône existant">
                            <option disabled selected value> -- select an option -- </option>
                            @foreach($faicons as $icon)
                                <option value="{{$icon->faicon}}" style="background-image: {{URL::to($icon->faicon)}};">
                                    {{$icon->faicon}}
                                </option>
                            @endforeach
                        </select>
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
</div>
