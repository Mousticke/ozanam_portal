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
            <form action="{{route('post.create')}}" method="post">
                <div class="input-group {{ $errors->has('icon_new') ? 'has-error ' : '' }}">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-paint-brush"
                                                                         aria-hidden="true"></i></span>
                    <select  aria-describedby="basic-addon1" class="form-control"
                            name="color_actu" id="color_actu" title="Choix de la couleure" >
                        <option disabled selected value> -- select an option -- </option>
                        @foreach($colors as $color)
                            <option name="color" class="bg-{{$color->name}}" value="{{$color->name}}">
                               <p style="background: {{$color->name}};"> {{$color->name}}</p>
                            </option>
                        @endforeach
                    </select>
                </div>
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
                <div>
                    <p>Aperçu au niveau de la couleur</p>
                    <div class="col-lg-3">
                        <div class="info-box card radius shadowDepth1 ">
                            <div class="bg-aqua actu_content result_color">
                                <div class="card_header_actu bg-blue">
                                    <div class="bulle_bleu"></div>
                                    <span class="info-box-text"><i class="fa fa-calendar"></i>&nbsp; Actualité du :</span>
                                    <span class="info-box-number">TEST</span>
                                </div>
                                <div class="resume_bio">
                                    <a class="img-actu card__image border-tlr-radius">
                                        <img style="height: 250px;" src="{{URL::to('slider/slider1.jpg')}}" alt="image" class="border-tlr-radius">
                                        <!--TODO : lien comme pour le saoir plus -->
                                    </a>
                                </div>
                                <div class="card__content card__padding">
                                    <div class="card__share">
                                        <div class="card__social">
                                            <a class="share-icon facebook" href="#"><span
                                                        class="fa fa-facebook"></span></a>
                                            <a class="share-icon twitter" href="#"><span
                                                        class="fa fa-twitter"></span></a>
                                            <a class="share-icon googleplus" href="#"><span
                                                        class="fa fa-google-plus"></span></a>
                                        </div>

                                        <a id="share" class="share-toggle share-icon" href="#"></a>
                                    </div>
                                </div>

                                <article class="card__article" id="target_actu">
                                </article>
                                <div class="readme_center">
                                    <a href="#" class="btn icon-btn btn-info readmore">
                                        <i class="glyphicon btn-glyphicon glyphicon-book img-circle text-info"></i>
                                        Lire plus
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

        </div><!-- /.box-body -->
    </div><!-- /.box -->
</div>