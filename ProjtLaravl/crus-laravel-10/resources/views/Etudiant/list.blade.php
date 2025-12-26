<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Étudiants</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #7c3aed 0%, #a855f7 50%, #ec4899 100%);
            min-height: 100vh;
            overflow-x: hidden;
        }
    </style>
</head>
<body>
    <div class="min-h-screen p-8 relative overflow-hidden">
        <!-- Decorative circles -->
        <div class="absolute top-32 right-32 w-72 h-72 rounded-full" style="background: radial-gradient(circle, rgba(236,72,153,0.3) 0%, transparent 70%);"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] rounded-full" style="background: radial-gradient(circle, rgba(236,72,153,0.25) 0%, transparent 70%);"></div>

        <!-- Main Container -->
        <div class="relative z-10 max-w-6xl mx-auto">
            <!-- Header -->
            <div class="bg-white rounded-3xl shadow-2xl p-8 mb-6">
                <div class="flex items-center justify-between flex-wrap gap-4">
                    <div class="flex items-center gap-4">
                        <div class="w-16 h-16 rounded-2xl flex items-center justify-center shadow-lg" style="background: linear-gradient(90deg, #a855f7 0%, #ec4899 100%);">
                            <i class="fas fa-users text-white text-2xl"></i>
                        </div>
                        <div>
                            <h1 class="text-3xl font-bold text-gray-800">Liste des Étudiants</h1>
                            <p class="text-sm text-gray-400">Gérez tous vos étudiants</p>
                        </div>
                    </div>
                    <a href="/Ajouter" class="px-6 py-3 text-white font-bold text-sm tracking-wide rounded-xl shadow-lg transition transform hover:scale-105" style="background: linear-gradient(90deg, #a855f7 0%, #ec4899 100%);">
                        <i class="fas fa-plus-circle mr-2"></i>Ajouter Étudiant
                    </a>
                </div>
            </div>

            <!-- Table Container -->
            <div class="bg-white rounded-3xl shadow-2xl overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead style="background: linear-gradient(90deg, #a855f7 0%, #ec4899 100%);">
                            <tr>
                                <th class="px-6 py-4 text-left text-white font-semibold text-sm uppercase tracking-wider">
                                    <i class="fas fa-user mr-2"></i>Nom
                                </th>
                                <th class="px-6 py-4 text-left text-white font-semibold text-sm uppercase tracking-wider">
                                    <i class="fas fa-id-card mr-2"></i>Prénom
                                </th>
                                <th class="px-6 py-4 text-left text-white font-semibold text-sm uppercase tracking-wider">
                                    <i class="fas fa-envelope mr-2"></i>Email
                                </th>
                                <th class="px-6 py-4 text-center text-white font-semibold text-sm uppercase tracking-wider">
                                    <i class="fas fa-cog mr-2"></i>Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            @foreach($etudiants as $etudiant)
                            <tr class="hover:bg-purple-50 transition duration-200">
                                <td class="px-6 py-4 text-gray-700 font-medium">{{$etudiant->nom}}</td>
                                <td class="px-6 py-4 text-gray-700 font-medium">{{$etudiant->prenom}}</td>
                                <td class="px-6 py-4 text-gray-600">{{$etudiant->email}}</td>
                                <td class="px-6 py-4 text-center">
                                    <div class="flex justify-center gap-2">
                                        <a href="/Modifier/{{$etudiant->id}}" class="px-4 py-2 bg-yellow-400 text-white rounded-lg hover:bg-yellow-500 transition transform hover:scale-105 shadow-md">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="/Supprimer/{{$etudiant->id}}" method="POST" style="display: inline-block;">
                                            @csrf
                                            <button type="submit" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet étudiant ?')" class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition transform hover:scale-105 shadow-md">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Empty State -->
                @if(count($etudiants) == 0)
                <div class="text-center py-16">
                    <div class="w-20 h-20 mx-auto mb-4 rounded-full flex items-center justify-center" style="background: linear-gradient(90deg, #a855f7 0%, #ec4899 100%);">
                        <i class="fas fa-user-plus text-white text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-700 mb-2">Aucun étudiant</h3>
                    <p class="text-gray-500 mb-4">Commencez par ajouter votre premier étudiant</p>
                    <a href="/Ajouter" class="inline-block px-6 py-3 text-white font-bold text-sm rounded-xl shadow-lg transition transform hover:scale-105" style="background: linear-gradient(90deg, #a855f7 0%, #ec4899 100%);">
                        <i class="fas fa-plus-circle mr-2"></i>Ajouter Étudiant
                    </a>
                </div>
                @endif
            </div>

            <!-- Footer -->
            
        </div>
    </div>
</body>
</html>