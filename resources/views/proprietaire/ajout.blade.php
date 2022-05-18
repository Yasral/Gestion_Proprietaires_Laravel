<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Proprietaire') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('proprietaire.sauvegarder') }}">
                        @csrf
                        <div class="grid grid-cols-2 gap-6">
                            <div class="grid grid-rows-2 gap-6">
                                <div>
                                    <x-label for="nom" :value="__('Nom')" />
                                    <x-input id="nom" class="block mt-1 w-full" type="text" name="Nom_proprietaire" placeholder="Entrez votre nom" autofocus />
                                </div>

                                <div>
                                    <x-label for="prenom" class="mt-8" :value="__('Prenom')" />
                                    <x-input id="prenom" class="block mt-1 w-full" type="text" name="Prenom_proprietaire" placeholder="Entrez votre prenom" autofocus />
                                </div>

                                <div>
                                    <x-label for="date_naissance" class="mt-8" :value="__('Date Naissance')" />
                                    <x-input id="date_naissance" class="block mt-1 w-full" type="date" name="Date_naissance" placeholder="Entrez votre date de naissance" autofocus />
                                </div>

                                <div>
                                    <x-label for="lieu_naissance" class="mt-8" :value="__('Lieu Naissance')" />
                                    <x-input id="lieu_naissance" class="block mt-1 w-full" type="text" name="Lieu_naissance" placeholder="Entrez votre lieu de naissance" autofocus />
                                </div>

                                <div>
                                    <x-label for="code_piece_identite" class="mt-8" :value="__('Code Piece Identite')" />
                                    <x-input id="code_piece_identite" class="block mt-1 w-full" type="text" name="code_piece_identite" placeholder="Entrez votre code de piece d'identite" autofocus />
                                </div>

                                <div>
                                    <x-label for="numero_piece_identite" class="mt-8" :value="__('Numero Piece Identite')" />
                                    <x-input id="numero_piece_identite" class="block mt-1 w-full" type="text" name="Numero_piece_identite" placeholder="Entrez votre numero de piece d'identite" autofocus />
                                </div>

                                <div>
                                    <x-label for="adresse" class="mt-8" :value="__('Adresse')" />
                                    <x-input id="adresse" class="block mt-1 w-full" type="text" name="Adresse" placeholder="Entrez votre adresse" autofocus />
                                </div>

                                <div>
                                    <x-label for="email" class="mt-8" :value="__('Email')" />
                                    <x-input id="email" class="block mt-1 w-full" type="email" name="Email" placeholder="Entrez votre email" autofocus />
                                </div>

                                <div>
                                    <x-label for="genre" class="mt-8" :value="__('Genre')" />
                                    <select name="genre">
                                        <option selected value = "Homme">Homme</option>
                                        <option value = "Femme">Femme</option>
                                    </select>
                                </div>

                                <div class="input-box">
                                    <x-label for="civilite" class="mt-8" :value="__('Civilite')" />
                                    <select class="form-select" name="civilite">
                                        <option selected value = "Marie">Marie</option>
                                        <option value = "Celibataire">Celibataire</option>
                                        <option value = "Divorce">Divorce</option>
                                    </select>
                                </div>

                            </div>

                        </div>
                        <div class="flex items-center justify-end mt-8">
                            <x-button class="ml-3">
                                {{ __('Enregistrer') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
