<div class="input-group {{ $errors->has('titre') ? 'has-error ' : '' }}">
    <span class="input-group-addon" id="basic-addon"><i class="fa fa-header" aria-hidden="true"></i></span>
    <div class="col-lg-8">
        <input type="text" aria-describedby="basic-addon" class="form-control"
               name="titre" id="titre_access" title="Titre du bloc" placeholder="Titre du bloc "/>
    </div>
</div>

<div class="input-group {{ $errors->has('icon') ? 'has-error ' : '' }}">
    <span class="input-group-addon" id="basic-addon"><i class="fa fa-tag" aria-hidden="true"></i></span>
    <div class="col-lg-8">
        <input type="text" aria-describedby="basic-addon" class="form-control"
               name="icon" id="icon_access" title="icône du bloc" placeholder="Icône du bloc "/>
    </div>
</div>

<div class="input-group {{ $errors->has('link_access') ? 'has-error ' : '' }}">
    <span class="input-group-addon" id="basic-addon"><i class="fa fa-link" aria-hidden="true"></i></span>
    <div class="col-lg-8">
        <input type="text" aria-describedby="basic-addon" class="form-control"
               name="link_access" id="link_access" title="Lien de l'acceès" placeholder="Lien de l'accès rapide sous la forme de http://"/>
    </div>
</div>

<div class="clearfix"></div>

<div class="input-group {{ $errors->has('color_access') ? 'has-error ' : '' }}">
    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-paint-brush" aria-hidden="true"></i></span>
    <div class="col-lg-8">
        <select aria-describedby="basic-addon1" class="form-control"
                name="color_access" id="color_access" title="Choix de la couleur">
            <option disabled selected value> -- Selectionner une couleur --</option>
            @foreach($colors as $color)
                <option name="color" class="bg-{{$color->name}}" value="{{$color->name}}">
                    <p style="background: {{$color->name}};"> {{$color->name}}</p>
                </option>
            @endforeach
        </select>
    </div>
</div>