@extends('layouts.master')

@section('content')


    @include('includes.message-block')
    <div>
        <header><h3>Nouveautés : </h3></header>
        <section class="row posts col-xs-offset-1 col-md-offset-1 col-sm-offset-1">
            @foreach($posts as $post)
                <div id="articleNew"
                     class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xs-offset-1 col-md-offset-1 col-sm-offset-1">
                    <div class="panel panel-primary">
                        <div class="panel panel-heading">Actualité du {{$post->user->created_at}}</div>
                        <div class="panel panel-body">
                            <div>
                                <article class="post" data-postid="{{ $post->id }}">
                                    <p>{{$post->body}}</p>
                                    <!--Fonction user dans post.php-->
                                    <div class="info">
                                        Posté par {{$post->user->first_name}} crée le {{$post->user->created_at}}
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </section>
    </div>


@endsection