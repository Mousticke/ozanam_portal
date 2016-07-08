<div class="col-md-12">
    <div class="box box-info box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">Gestion des classes</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div><!-- /.box-tools -->
        </div><!-- /.box-header -->
        <div class="box-body" style="display: block;">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Unité pédagogique</th>
                                    <th>Nombre d'étudiant</th>
                                    <th>Professeur Principal</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($classes as $class)
                                    <tr class="classe_details" data-classeid="{{ $class->id }}"
                                        data-classestudent="
                                        @foreach($users as $user)
                                            @if($user->classe_id == $class->id)
                                                {{$user->first_name}},
                                            @endif
                                        @endforeach"
                                        data-classename="{{$class->name}}"
                                        data-classegroupe="{{$class->groupe}}">
                                        <td class="classe_name">{{$class->name}}</td>
                                        <td>{{$class->groupe}}</td>
                                        <td>NOMBRE</td>
                                        <td>Prof Principal</td>
                                        <td>
                                            <div class="interaction">
                                                <a class="btn icon-btn btn-success classes">
                                                    <span class="glyphicon btn-glyphicon glyphicon-plus img-circle text-success"></span>
                                                    Détail
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('admin.gestion.includes.modalClasse')