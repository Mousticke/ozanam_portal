<div class="col-sm-5 bootcards-list" data-title="Utilisateurs">
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="search-form">
                <div class="row">
                    <div class="col-xs-9">
                        <div class="form-group">
                            <i class="fa fa-search" aria-hidden="true"></i>
                            <input type="text" class="form-control" placeholder="Rechercher ...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="list-group">
            @foreach($users as $user)
                <div data-name="{{$user->first_name}}" data-email="{{$user->email}}" data-poste="
                 @if($user->isAdmin())
                        Administrateur - {{$user->classe->name}}
                @elseif($user->isProf())
                        Professeur - {{$user->classe->name}}
                @elseif($user->isStudent())
                        Elève de {{$user->classe->name}}
                @elseif($user->isProfPrincipal())
                        Professeur principal des {{$user->classe->name}}
                @elseif($user->isRespProf())
                        Responsable de niveau des {{$user->classe->name}}
                @endif
                        " data-password="{{$user->password}}">
                    <a class="list-group-item pjax list-users" href="#">
                        <img src="{{URL::to('src/admintheme/dist/img/romain.jpg')}}" class="img-rounded pull-left">
                        <h4 class="list-group-item-heading">{{$user->first_name}}</h4>
                        @if($user->isAdmin())
                            <p class="list-group-item-text">Administrateur - {{$user->classe->name}}</p>
                        @elseif($user->isProf())
                            <p class="list-group-item-text">Professeur des {{$user->classe->name}}</p>
                        @elseif($user->isProfPrincipal())
                            <p class="list-group-item-text">Professeur principal des {{$user->classe->name}} et Professeur des {{$user->classe->name}}</p>
                        @elseif($user->isRespProf())
                            <p class="list-group-item-text">Responsable de niveau ({{$user->classe->name}}) - Professeur des {{$user->classe->name}}</p>
                        @else
                            <p class="list-group-item-text">Elève de : {{$user->classe->name}}</p>
                        @endif
                    </a>
                </div>
            @endforeach
        </div>
        <div class="panel-footer">
            <small class="pull-left">Eléménts de la base de données SQL</small>
            <a class="btn btn-link btn-xs pull-right" href="#" data-toggle="modal" data-target="#docsModal">
                Voir la table</a>
        </div>
    </div>
</div>
<div class="col-sm-7 bootcards-cards hidden-xs detail" data-title="Détails" style="display: none">
    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            <h3 class="panel-title pull-left">Détails</h3>
        </div>
        <div class="list-group detailsUser">
            <div class="list-group-item">
                <img src="{{URL::to('src/admintheme/dist/img/romain.jpg')}}" class="img-rounded pull-left">
                <label>NOM - Prénom</label>
                <h4 class="list-group-item-heading" id="UserNameDetails"></h4>
            </div>
            <div class="list-group-item">
                <label>Poste</label>
                <h4 class="list-group-item-heading" id="UserPosteDetails"></h4>
            </div>
            <div class="list-group-item">
                <label>Téléphone</label>
                <h4 class="list-group-item-heading">Non renseigné</h4>
            </div>
            <div class="list-group-item">
                <label>Mot de passe</label>
                <h4 class="list-group-item-heading" id="UserPasswordDetails">Non renseigné</h4>
            </div>
            <a class="list-group-item" href="mailto:">
                <label>Email</label>
                <h4 class="list-group-item-heading" id="UserEmailDetails"></h4>
            </a>
        </div>
        <div class="panel-footer">
            <small class="pull-left">Eléménts de la base de données SQL</small>
            <a class="btn btn-link btn-xs pull-right" href="#" data-toggle="modal" data-target="#docsModal">
                Voir la table</a>
        </div>
    </div>
</div>