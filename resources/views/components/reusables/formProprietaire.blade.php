<div class="container">
    <h1 class="title">Ajout Proprietaire</h1>
    <form method="POST" action="{{ url('proprietaire') }}">
        @csrf
        <div class="user-details">

            <div class="input-box">
                <span class="details">Nom</span>
                <input type="text" id="" placeholder="Entrez votre nom"  name="Nom_proprietaire">
            </div>

            <div class="input-box">
                <span class="details">Prenom</span>
                <input type="text" name="Prenom_proprietaire" id="" placeholder="Entrez votre prenom">
            </div>

            <div class="input-box">
                <span class="details">Date De Naissance</span>
                <input type="date" name="Date_naissance" id="" placeholder="Entrez votre date de naissance">
            </div>

            <div class="input-box">
                <span class="details">Lieu De Naissance</span>
                <input type="text" name="Lieu_naissance" id="" placeholder="Entrez votre lieu de naissance">
            </div>

            <div class="input-box">
                <span class="details">Code Piece D'identite</span>
                <input type="text" name="code_piece_identite" id="" placeholder="Entrez votre code de piece d'identite">
            </div>

            <div class="input-box">
                <span class="details">Numero Piece D'identite</span>
                <input type="text" name="Numero_piece_identite" id="" placeholder="Entrez votre numero de piece d'identite">
            </div>

            <div class="input-box">
                <span class="details">Adresse</span>
                <input type="text" name="Adresse" id="" placeholder="Entrez votre adresse">
            </div>

            <div class="input-box">
                <span class="details">Email</span>
                <input type="text" name="Email" id="" placeholder="Entrez votre email">
            </div>

            <div class="input-box">
                <span class="details">Genre</span>
                <select class="form-select" name="genre" required>
                    <option selected value = "Homme">Homme</option>
                    <option value = "Femme">Femme</option>
                </select>
            </div>

            <div class="input-box">
                <span class="details">Civilite</span>
                <select class="form-select" name="civilite" required>
                    <option selected value = "Marie">Marie</option>
                    <option value = "Celibataire">Celibataire</option>
                    <option value = "Divorce">Divorce</option>
                </select>
            </div>

        </div>

        <div class="button">
            <input type="submit" value="Enregistrer">
        </div>
    </form>
</div>