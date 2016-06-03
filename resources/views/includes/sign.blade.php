<div class="container-fluid" id="signform">

    <div class="col-lg-4 col-md-6 col-sm-5 col-xs-5 col-md-offset-1 col-sm-offset-1 col-lg-offset-1">
        @include('includes.message-block')
        <h3>S'enregistrer</h3>
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

            <button type="submit" class="btn btn-primary">
                Submit
            </button>
            <input type="hidden" name="_token" value="{{ Session::token() }}">
        </form>
    </div>

    <div class=" col-lg-4 col-md-6 col-sm-5 col-xs-5 col-md-offset-1 col-sm-offset-1 col-lg-offset-1">
        @include('includes.message-block')
        <h3>S'Authentifier</h3>
        <form action="{{route('signin')}}" method="POST">
            <div class="form-group {{ $errors->has('email') ? 'has-error ' : '' }}">
                <label for="email">Votre Mail : </label>
                <input class="form-control" type="text" name="email" id="email" value="{{ Request::old('email') }}">
            </div>

            <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                <label for="password">Mot de passe</label>
                <input class="form-control" type="password" name="password" id="password">
            </div>

            <button type="submit" class="btn btn-primary">
                Submit
            </button>
            <input type="hidden" name="_token" value="{{ Session::token() }}">
        </form>
    </div>
</div>