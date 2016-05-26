@extends('layouts.master')

@section('content')
    <br>
    <div class="col-sm-offset-3 col-sm-6" onload="chargement()">
        <div class="panel panel-info">
            <div class="panel-heading">Contact</div>
            <div class="panel-body">
                Merci. Votre message a bien été transmis.
                <p>Redirection dans quelques instant</p>
                <div class="alert alert-success">
                    <p ><a class="text-aqua" href="{{route('home')}}">Si la redirection ne fonctionne pas, cliquez ici</a></p>
                </div>
            </div>
        </div>
    </div>
@stop