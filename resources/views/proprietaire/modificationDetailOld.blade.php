@include('components.reusables.siteheader')
<div class="container">
    <h1 class="title">Modification Proprietaire</h1>
    <form method="POST" action="{{url('proprietaire/edit/'.$owner->id)}}">
        @csrf
        <div class="user-details">

            <div class="input-box">
                <span class="details">Nom</span>
                <input type="text" id="" placeholder="Entrez votre nom" name="Nom_proprietaire" value="{{$owner->Nom_proprietaire}}">
            </div>

            <div class="input-box">
                <span class="details">Prenom</span>
                <input type="text" name="Prenom_proprietaire" id="" placeholder="Entrez votre prenom" value="{{$owner->Prenom_proprietaire}}">
            </div>

            <div class="input-box">
                <span class="details">Date De Naissance</span>
                <input type="date" name="Date_naissance" id="" placeholder="Entrez votre date de naissance" value="{{$owner->Date_naissance}}">
            </div>

            <div class="input-box">
                <span class="details">Lieu De Naissance</span>
                <input type="tel" name="Lieu_naissance" id="" placeholder="Entrez votre lieu de naissance" value="{{$owner->Lieu_naissance}}">
            </div>

            <div class="input-box">
                <span class="details">Code Piece D'identite</span>
                <input type="text" name="code_piece_identite" id="" placeholder="Entrez votre code de piece d'identite" value="{{$owner->code_piece_identite}}">
            </div>

            <div class="input-box">
                <span class="details">Numero Piece D'identite</span>
                <input type="text" name="Numero_piece_identite" id="" placeholder="Entrez votre numero de piece d'identite" value="{{$owner->Numero_piece_identite}}">
            </div>

            <div class="input-box">
                <span class="details">Adresse</span>
                <input type="text" name="Adresse" id="" placeholder="Entrez votre adresse" value="{{$owner->Adresse}}">
            </div>

            <div class="input-box">
                <span class="details">Email</span>
                <input type="text" name="Email" id="" placeholder="Entrez votre email" value="{{$owner->Email}}">
            </div>

            <div class="input-box">
                <span class="details">Genre</span>
                <select class="form-select" name="genre" required>
                    @if($owner->genre == "Homme")
                        <option selected value = "Homme">Homme</option>
                        <option value="Femme">Femme</option>
                    @else
                        <option selected value = "Femme">Femme</option>
                        <option value="Homme">Homme</option>
                    @endif
                </select>
            </div>

            <div class="input-box">
                <span class="details">Civilite</span>
                <select class="form-select" name="civilite" required>
                    @if($owner->civilite == "Marie")
                        <option selected value = "Marie">Marie</option>
                        <option value = "Celibataire">Celibataire</option>
                        <option value = "Divorce">Divorce</option>
                    @elseif($owner->civilite == "Celibataire")
                        <option selected value="Celibataire">Celibataire</option>
                        <option value="Marie">Marie</option>
                        <option value="Divorce">Divorce</option>
                    @else
                        <option selected value="Divorce">Divorce</option>
                        <option value="Marie">Marie</option>
                        <option value="Celibataire">Celibataire</option>
                    @endif
                </select>
            </div>

        </div>

        <div class="button">
            <input type="submit" value="Enregistrer">
        </div>
    </form>
</div>