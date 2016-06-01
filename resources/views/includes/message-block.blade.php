@if(count($errors) > 0)
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> Erreur !</h4>
                <ul>
                    @foreach($errors->all() as $error)
                        <li><span class="fa fa-exclamation-circle" aria-hidden="true"></span>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endif

@if(Session::has('message'))
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Reussi !</h4>
                {{Session::get('message')}}
            </div>
        </div>

    </div>
@endif

@if(Session::has('message2'))
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Reussi !</h4>
                {{Session::get('message2')}}
            </div>
        </div>

    </div>
@endif

@if(Session::has('message3'))
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Reussi !</h4>
                {{Session::get('message3')}}
            </div>
        </div>

    </div>
@endif

@if(Session::has('message4'))
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Reussi !</h4>
                {{Session::get('message4')}}
            </div>
        </div>

    </div>
@endif

@if(Session::has('error'))
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-close"></i> Echec !</h4>
                {{Session::get('error')}}
            </div>
        </div>

    </div>
@endif

