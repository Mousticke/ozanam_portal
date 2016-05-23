@include('includes.message-block')
<!--Todo : slide from top-->

@if(Auth::user())
    <div id="gCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#gCarousel" data-slide-to="0" class="active"><img class="img-responsive thumbnail"
                                                                               src="{{URL::to('slider/slider1-thumb.jpg')}}">
            </li>
            <li data-target="#gCarousel" data-slide-to="1"><img class="img-responsive thumbnail"
                                                                src="{{URL::to('slider/slider1-thumb.jpg')}}"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <div class="container">
                    <div class="slide-wrapper">
                        <div class="row">
                            <!--CONTROLLER ANGULAR MODAL-->
                            <div class="col-lg-12">
                                <div class="slide-content">

                                    <header><h3>Actualité du moment : </h3></header>
                                    <form action="{{route('post.create')}}" method="post">
                                        <div class="form-group">
                                            <textarea class="form-control" name="body" id="new-post" rows="5"
                                                      placeholder="Quoi de neuf..."></textarea>
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

                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container">
                    <div class="slide-wrapper">
                        <div class="row">
                            <!--CONTROLLER ANGULAR MODAL-->
                            <div class="col-lg-12">
                                <div class="slide-content">

                                    <header><h3>Gestion du carousel </h3></header>
                                    <form action="{{route('carousel.create')}}" method="post">
                                        <div class="form-group">
                                            <textarea class="form-control" name="body" id="new-post" rows="5"
                                                      placeholder="Affichage du carousel"></textarea>
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
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control left" href="#gCarousel" data-slide="prev">&lsaquo;</a>
        <a class="carousel-control right" href="#gCarousel" data-slide="next">&rsaquo;</a>
    </div>
@endif