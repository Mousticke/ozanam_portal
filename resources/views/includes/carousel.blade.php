<div>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <div class="container">
                    <div class="slide-wrapper">
                        <div class="slide-image">
                            <a href="#">
                                <img class="first-slide" src="{{URL::to('src/css/images/image-slider1.png')}}"
                                     alt="First slide">
                            </a>
                        </div>
                        <div class="slide-content">
                            <blockquote><p>Vu des chambres du Lycée Ozanam</p></blockquote>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container">
                    <div class="slide-wrapper">
                        <div class="slide-image">
                            <a href="#">
                                <img class="fill" src="{{URL::to('src/css/images/image-slider1.png')}}"
                                     alt="First slide">
                            </a>
                        </div>
                        <div class="slide-content">
                            <blockquote><p>Vu des chambres du Lycée Ozanam 2</p></blockquote>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container">
                    <div class="slide-wrapper">
                        <div class="slide-image fill">
                            <a href="#">
                                <img class="fill" src="{{URL::to('src/css/images/image-slider1.png')}}"
                                     alt="First slide">
                            </a>
                        </div>
                        <div class="slide-content">
                            <blockquote><p>Vu des chambres du Lycée Ozanam 2</p></blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div>
</div>
