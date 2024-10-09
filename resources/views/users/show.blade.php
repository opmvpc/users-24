<x-app-layout>
    <div class="container mx-auto py-8">
        <h1 class="text-2xl font-bold mb-6">Utilisateur numéro {{ $user->id }}</h1>

        <div>
            <dl>
                <dt>Nom :</dt>
                <dd>{{ $user->name }}</dd>
                <dt>Email :</dt>
                <dd>{{ $user->email }}</dd>
                <dt>Rôle :</dt>
                <dd>{{ $user->role }}</dd>
            </dl>
        </div>
    </div>
</x-app-layout>
