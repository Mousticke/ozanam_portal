<div class="col-md-12">
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">Ajout d'un flux RSS</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
        </div>
        <div class="box-body">
            <header><h3>Ajout d'un flux RSS </h3></header>
            <form action="{{route('post.rss.create')}}" method="post">

                <div class="input-group {{ $errors->has('link_feed') ? 'has-error ' : '' }}">
                    <span class="input-group-addon" id="basic-addon"><i class="fa fa-link" aria-hidden="true"></i></span>
                    <div class="col-lg-8">
                        <input type="text" aria-describedby="basic-addon" class="form-control"
                               name="link_feed" id="link_feed" title="Lien du flux RSS" placeholder="Lien du flux RSS "/>
                    </div>
                </div>

                <div class="input-group {{ $errors->has('name_feed') ? 'has-error ' : '' }}">
                    <span class="input-group-addon" id="basic-addon5"><i class="fa fa-header" aria-hidden="true"></i></span>
                    <div class="col-lg-8">
                        <input type="text" aria-describedby="basic-addon5" class="form-control"
                               name="name_feed" id="name_feed" title="Titre du flux RSS" placeholder="Titre du flux RSS "/>
                    </div>
                </div>
                <button type="submit" class="btn icon-btn btn-info">
                    <span class="glyphicon btn-glyphicon glyphicon-book img-circle text-info"></span>
                    Submit
                </button>
                <input type="hidden" value="{{Session::token()}}" name="_token">
            </form>
        </div>
    </div>
</div>