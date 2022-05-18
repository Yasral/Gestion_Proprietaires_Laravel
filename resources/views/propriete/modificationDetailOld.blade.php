@include('components.reusables.siteheader')
<div class="container">
    <h1 class="title">Ajout Propriete</h1>
    <form method="POST" action="{{ url('propriete/edit/'.$propriete->id) }}">
        @csrf
        <div class="user-details">

            <!-- <div class="input-box">
                <span class="details">Proprietaire</span>
                <input type="text" id="" placeholder="Choisisser le proprietaire"  name="proprietaire_id">
            </div> -->

            <div class="input-box">
                <span class="details">Adresse De La Propriete</span>
                <input type="text" name="Adresse_propriete" id="" value="{{$propriete->Adresse_propriete}}">
            </div>

            <div class="input-box">
                <span class="details">Superficie</span>
                <input type="number" min="50" max="10000" name="Superficie" id="" value="{{$propriete->Superficie}}">
            </div>

            <div class="input-box">
                <span class="details">Nombre D'etages</span>
                <input type="tel" name="Nbre_etage" id="" value="{{$propriete->Nbre_etage}}">
            </div>

            <div class="input-box">
                <span class="details">Proprietaire</span>
                <select class="form-select" name="proprietaire_id" required>
                    <option selected value="{{$propriete->proprietaire_id}}">{{$propriete->proprietaire->Prenom_proprietaire . " " . $propriete->proprietaire->Nom_proprietaire}}</option>
                    @foreach($owners as $owner)
                        @if($owner->id != $propriete->proprietaire_id)
                            <option value="{{$owner->id}}">{{$owner->Prenom_proprietaire. " " . $owner->Nom_proprietaire}}</option>
                        @endif
                    @endforeach
                </select>
            </div>

            <div class="input-box">
                <span class="details">Type De Propriete</span>
                <select class="form-select" name="type_id" required>
                    <option selected value ="{{$propriete->type_id}}">{{$propriete->type->Libelle}}</option>
                    @foreach($types as $type)
                        @if($type->id != $propriete->type_id)
                            <option value="{{$type->id}}">{{$type->Libelle}}</option>
                        @endif
                    @endforeach
                </select>
            </div>

            <div class="input-box">
                <span class="details">Quartier</span>
                <select class="form-select" name="quartier_id" required>
                    <option selected value ="{{$propriete->quartier_id}}">{{$propriete->quartier->Libelle_quartier}}</option>
                    @foreach($neighbourhoods as $neighbourhood)
                        @if($neighbourhood->id != $propriete->quartier_id)
                            <option value="{{$neighbourhood->id}}">{{$neighbourhood->Libelle_quartier}}</option>
                        @endif
                    @endforeach
                </select>
            </div>

        </div>

        <div class="button">
            <input type="submit" value="Enregistrer">
        </div>
    </form>
</div>