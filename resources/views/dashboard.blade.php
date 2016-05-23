@extends('layouts.master')

<!--
section('carouselGestion')
    include('includes.gestion')
endsection
-->
@section('carousel')
    @include('includes.carousel')
@endsection

@section('content')

    @include('includes.actualite')

    <div ng-cloak>
        <md-content class="md-padding" layout-xs="column" layout="row">
            <div flex-xs flex-gt-xs="100" layout="row">
                @foreach($posts as $post)
                    <md-card>
                        <md-card-header>
                            <md-card-avatar>
                                <img src="{{URL::to('src/img/file.svg')}}"/>
                            </md-card-avatar>
                            <md-card-header-text>
                                <span class="md-title">Angular</span>
                                <span class="md-subhead">Material</span>
                            </md-card-header-text>
                        </md-card-header>
                        <md-card-title>
                            <md-card-title-text>
                                <span class="md-headline">Actualité du ....</span>
                                <span class="md-subhead">Postée par</span>
                            </md-card-title-text>
                            <md-card-title-media>
                                <div class="md-media-md card-media">
                                    <img src="{{URL::to('src/img/logo.png')}}" class="md-card-image" alt="Washed Out">
                                </div>
                            </md-card-title-media>
                        </md-card-title>
                        <div class="card__share">
                            <div class="card__social">
                                <a class="share-icon facebook" href="#"><span class="fa fa-facebook"></span></a>
                                <a class="share-icon twitter" href="#"><span class="fa fa-twitter"></span></a>
                                <a class="share-icon googleplus" href="#"><span class="fa fa-google-plus"></span></a>
                            </div>

                            <a id="share" class="share-toggle share-icon" href="#"></a>
                        </div>
                        <md-card-content>
                            <p>
                                Actu actu actu actu actu Actu actu actu actu actu Actu actu actu actu actu Actu actu
                                actu actu actu
                                Actu actu actu actu actu Actu actu actu actu actu Actu actu actu actu actu Actu actu
                                actu actu actu
                            </p>
                        </md-card-content>
                        <md-card-actions layout="row" layout-align="end center">
                            <md-button class="md-icon-button" aria-label="Favorite">
                                <md-icon md-svg-icon="{{URL::to('src/img/file.svg')}}"></md-icon>
                            </md-button>
                            <md-button class="md-icon-button" aria-label="Settings">
                                <md-icon md-svg-icon="{{URL::to('src/img/file.svg')}}"></md-icon>
                            </md-button>
                            <md-button class="md-icon-button" aria-label="Share">
                                <md-icon md-svg-icon="{{URL::to('src/img/file.svg')}}"></md-icon>
                            </md-button>
                        </md-card-actions>
                    </md-card>
                @endforeach
            </div>
        </md-content>
    </div>

    <div ng-cloak>
        <md-content class="md-padding" layout-xs="column" layout="row">
            <div flex-xs flex-gt-xs="100" layout="row">
                @foreach($posts as $key=>$post)
                    @if($key == 0)
                        <div class="info-box card radius shadowDepth1">
                            <div class="card_header_actu bg-blue">
                                <span class="info-box-text"><i class="fa fa-calendar"></i>&nbsp; Actualité du :</span>
                                <span class="info-box-number">{{date('d M Y' ,strtotime($post->created_at))}}</span>
                                <div class="card__image border-tlr-radius">
                                    <img src="{{URL::to('slider/slider1.jpg')}}" alt="image" class="border-tlr-radius">
                                </div>
                            </div>
                            <div class="bg-yellow">
                                <div class="card__content card__padding ">
                                    <div class="card__share">
                                        <div class="card__social">
                                            <a class="share-icon facebook" href="#"><span class="fa fa-facebook"></span></a>
                                            <a class="share-icon twitter" href="#"><span
                                                        class="fa fa-twitter"></span></a>
                                            <a class="share-icon googleplus" href="#"><span
                                                        class="fa fa-google-plus"></span></a>
                                        </div>

                                        <a id="share" class="share-toggle share-icon" href="#"></a>
                                    </div>

                                    <article class="card__article">
                                        <div class="contentArticle">{!! html_entity_decode($post->body) !!}</div>
                                    </article>
                                </div>

                                <div class="card__action">

                                    <div class="card__author">
                                        <img src="{{URL::to('slider/slider1.jpg')}}" alt="user">
                                        <div class="card__author-content">
                                            <p><em>Postée par {{$post->user->first_name}} crée
                                                    le {{$post->created_at}}</em></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif($key == 1 )
                        <div class="info-box card radius shadowDepth1">
                            <div class="card_header_actu bg-blue">
                                <span class="info-box-text"><i class="fa fa-calendar"></i>&nbsp; Actualité du :</span>
                                <span class="info-box-number">{{date('d M Y' ,strtotime($post->created_at))}}</span>
                                <div class="card__image border-tlr-radius">
                                    <img src="{{URL::to('slider/slider1.jpg')}}" alt="image" class="border-tlr-radius">
                                </div>
                            </div>
                            <div class="bg-green">
                                <div class="card__content card__padding ">
                                    <div class="card__share">
                                        <div class="card__social">
                                            <a class="share-icon facebook" href="#"><span class="fa fa-facebook"></span></a>
                                            <a class="share-icon twitter" href="#"><span
                                                        class="fa fa-twitter"></span></a>
                                            <a class="share-icon googleplus" href="#"><span
                                                        class="fa fa-google-plus"></span></a>
                                        </div>

                                        <a id="share" class="share-toggle share-icon" href="#"></a>
                                    </div>

                                    <article class="card__article">
                                        <div class="contentArticle">{!! html_entity_decode($post->body) !!}</div>
                                    </article>
                                </div>

                                <div class="card__action">

                                    <div class="card__author">
                                        <img src="{{URL::to('slider/slider1.jpg')}}" alt="user">
                                        <div class="card__author-content">
                                            <p><em>Postée par {{$post->user->first_name}} crée
                                                    le {{$post->created_at}}</em></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif($key == 2 )
                        <div class="info-box card radius shadowDepth1">
                            <div class="card_header_actu bg-blue">
                                <span class="info-box-text"><i class="fa fa-calendar"></i>&nbsp; Actualité du :</span>
                                <span class="info-box-number">{{date('d M Y' ,strtotime($post->created_at))}}</span>
                                <div class="card__image border-tlr-radius">
                                    <img src="{{URL::to('slider/slider1.jpg')}}" alt="image" class="border-tlr-radius">
                                </div>
                            </div>
                            <div class="bg-red">
                                <div class="card__content card__padding ">
                                    <div class="card__share">
                                        <div class="card__social">
                                            <a class="share-icon facebook" href="#"><span class="fa fa-facebook"></span></a>
                                            <a class="share-icon twitter" href="#"><span
                                                        class="fa fa-twitter"></span></a>
                                            <a class="share-icon googleplus" href="#"><span
                                                        class="fa fa-google-plus"></span></a>
                                        </div>

                                        <a id="share" class="share-toggle share-icon" href="#"></a>
                                    </div>

                                    <article class="card__article">
                                        <div class="contentArticle">{!! html_entity_decode($post->body) !!}</div>
                                    </article>
                                </div>

                                <div class="card__action">

                                    <div class="card__author">
                                        <img src="{{URL::to('slider/slider1.jpg')}}" alt="user">
                                        <div class="card__author-content">
                                            <p><em>Postée par {{$post->user->first_name}} crée
                                                    le {{$post->created_at}}</em></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="info-box card radius shadowDepth1">
                            <div class="card_header_actu bg-blue">
                                <span class="info-box-text"><i class="fa fa-calendar"></i>&nbsp; Actualité du :</span>
                                <span class="info-box-number">{{date('d M Y' ,strtotime($post->created_at))}}</span>
                                <div class="card__image border-tlr-radius">
                                    <img src="{{URL::to('slider/slider1.jpg')}}" alt="image" class="border-tlr-radius">
                                </div>
                            </div>
                            <div class="bg-yellow">
                                <div class="card__content card__padding ">
                                    <div class="card__share">
                                        <div class="card__social">
                                            <a class="share-icon facebook" href="#"><span class="fa fa-facebook"></span></a>
                                            <a class="share-icon twitter" href="#"><span
                                                        class="fa fa-twitter"></span></a>
                                            <a class="share-icon googleplus" href="#"><span
                                                        class="fa fa-google-plus"></span></a>
                                        </div>

                                        <a id="share" class="share-toggle share-icon" href="#"></a>
                                    </div>

                                    <article class="card__article">
                                        <div class="contentArticle">{!! html_entity_decode($post->body) !!}</div>
                                    </article>
                                </div>

                                <div class="card__action">

                                    <div class="card__author">
                                        <img src="{{URL::to('slider/slider1.jpg')}}" alt="user">
                                        <div class="card__author-content">
                                            <p><em>Postée par {{$post->user->first_name}} crée
                                                    le {{$post->created_at}}</em></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </md-content>
    </div>

    <script>
        var token = '{{ Session::token() }}';
        var urlEdit = '{{ route('edit') }}';
    </script>
@endsection