@include('components.reusables.siteheader')
<div class="container">
    <h1 class="title">Modification Proprietaire</h1>
    <form action="#">
        <div class="user-details">

            <div class="input-box">
                <span class="details">Nom</span>
                <input type="text" name="nom" id="" placeholder="Entrez votre nom">
            </div>

            <div class="input-box">
                <span class="details">Prenom</span>
                <input type="text" name="prenom" id="" placeholder="Entrez votre prenom">
            </div>

            <div class="input-box">
                <span class="details">Date De Naissance</span>
                <input type="date" name="dateNaissance" id="" placeholder="Entrez votre date de naissance">
            </div>

            <div class="input-box">
                <span class="details">Lieu De Naissance</span>
                <input type="tel" name="lieuNaissance" id="" placeholder="Entrez votre lieu de naissance">
            </div>

            <div class="input-box">
                <span class="details">Code Piece D'identite</span>
                <input type="text" name="codePieceIdentite" id="" placeholder="Entrez votre code de piece d'identite">
            </div>

            <div class="input-box">
                <span class="details">Numero Piece D'identite</span>
                <input type="text" name="numeroPieceIdentite" id="" placeholder="Entrez votre numero de piece d'identite">
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