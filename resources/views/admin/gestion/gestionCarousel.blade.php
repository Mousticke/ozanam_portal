<div class="col-md-12">
    <div class="box box-info box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">Gestion du Carousel</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div><!-- /.box-tools -->
        </div><!-- /.box-header -->
        <div class="box-body" style="display: block;">
            <!--Interaction des actualités-->
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <tbody>
                                <tr>
                                    <th>ID</th>
                                    <th>Créateur</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Contenu</th>
                                    <th>Actions</th>
                                </tr>
                                @foreach($carousels as $carousel)
                                    <tr>
                                        <td>{{ $carousel->id }}</td>
                                        <td>{{$carousel->user->first_name}}</td>
                                        <td>{{date('d M Y' ,strtotime($carousel->user->created_at))}}</td>
                                        <td><span class="label label-success">Publiée</span></td>
                                        <td>{!! html_entity_decode($carousel->body) !!}</td>
                                        <td>
                                            @if(Auth::check())
                                                <a class="btn icon-btn btn-success edit editAdmin" href="#">
                                                    <span class="glyphicon btn-glyphicon glyphicon-plus img-circle text-success"></span>
                                                    Edition
                                                </a> |

                                                <a class="btn icon-btn btn-danger"
                                                   href="{{ route('carousel.delete', ['carousel_id' => $carousel->id]) }}">
                                                    <span class="glyphicon btn-glyphicon glyphicon-trash img-circle text-danger"></span>
                                                    Supprimmer
                                                </a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div>
            </div>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
</div>
