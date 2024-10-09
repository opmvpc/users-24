<x-app-layout>
    <div class="container mx-auto py-8">

        <div class="flex justify-between items-baseline">
            <h1 class="text-2xl font-bold mb-6">Liste des Utilisateurs</h1>
            <div>
                <form action="{{ route('users.index') }}" method="GET">
                    <input type="search" name="search" value="{{ request()->query('search') }}" id="">
                    <button type="submit" class="bg-blue-500 py-1 px-4 rounded text-blue-50">Rechercher</button>
                </form>
            </div>
            <div>
                <a href="{{ route('users.create') }}">Ajouter</a>
            </div>
        </div>

        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">Nom</th>
                    <th class="py-2 px-4 border-b">Email</th>
                    <th class="py-2 px-4 border-b">Rôle</th>
                    <th class="py-2 px-4 border-b">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $user->name }}</td>
                        <td class="py-2 px-4 border-b">{{ $user->email }}</td>
                        <td class="py-2 px-4 border-b">{{ $user->role }}</td>
                        <td class="py-2 px-4 border-b">
                            <a href="{{ route('users.show', $user->id) }}" class="text-blue-500">Voir</a>
                            <a href="{{ route('users.edit', $user->id) }}" class="text-yellow-500 ml-2">Modifier</a>
                            <form action="{{ route('users.destroy', $user) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="text-red-500 ml-2" type="submit">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="py-2 px-4 border-b text-center text-gray-500">Pas de résultat pour
                            votre recherche
                            :'(</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div class="mt-6">
            {{ $users->links() }}
        </div>
    </div>
</x-app-layout>
