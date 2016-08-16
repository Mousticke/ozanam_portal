<div ng-cloak>
    <div layout="row" layout-wrap>
        <div flex="100" class="info-box card radius shadowDepth1 right-sign">
            <div class="col-lg-6" id="left-side-sign">
                @include('includes.message-block')
                <h3 class="title-sign">S'enregistrer</h3>
                <form action="{{route('signup')}}" method="POST">

                    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                        <label for="email">Votre Mail : </label>
                        <input class="form-control" type="text" name="email" id="email" value="{{ Request::old('email') }}">
                    </div>

                    <div class="form-group {{ $errors->has('first_name') ? 'has-error' : '' }}">
                        <label for="first_name">Nom : </label>
                        <input class="form-control" type="text" name="first_name" id="first_name"
                               value="{{ Request::old('first_name') }}">
                    </div>

                    <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                        <label for="password">Mot de passe</label>
                        <input class="form-control" type="password" name="password" id="password">
                    </div>

                    <button type="submit" class="btn-sign icon-btn btn-primary custom_btn">
                        Enregistrement
                    </button>
                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                </form>
            </div>
            <div class=" col-lg-6">
                @include('includes.message-block')
                <h3 class="title-sign">S'Authentifier</h3>
                <form action="{{route('signin')}}" method="POST">
                    <div class="form-group {{ $errors->has('first_name') ? 'has-error ' : '' }}">
                        <label for="first_name">Votre Nom : </label>
                        <input class="form-control" type="text" name="first_name" id="first_name" value="{{ Request::old('first_name') }}">
                    </div>

                    <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                        <label for="password">Mot de passe</label>
                        <input class="form-control" type="password" name="password" id="password">
                    </div>

                    <button type="submit" class="btn-sign icon-btn btn-primary custom_btn">
                        Se connecter
                    </button>
                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                </form>
            </div>
        </div>
    </div>
</div>

