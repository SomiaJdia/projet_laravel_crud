<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Étudiant</title>
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
    <div class="min-h-screen flex items-center justify-center p-4 relative overflow-hidden">
        <!-- Decorative circles -->
        <div class="absolute top-32 right-32 w-72 h-72 rounded-full" style="background: radial-gradient(circle, rgba(236,72,153,0.3) 0%, transparent 70%);"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] rounded-full" style="background: radial-gradient(circle, rgba(236,72,153,0.25) 0%, transparent 70%);"></div>

        <!-- Phone Container -->
        <div class="relative z-10 flex items-center gap-16">
            <!-- Phone mockup -->
            <div class="w-[300px] h-[620px] rounded-[3rem] shadow-2xl p-2 relative" style="background: linear-gradient(145deg, #f5f5f5 0%, #e8e8e8 100%);">
                <!-- Boutons volume sur le côté gauche -->
                <div class="absolute left-0 top-28 w-0.5 h-8 bg-gray-400 rounded-r-sm"></div>
                <div class="absolute left-0 top-40 w-0.5 h-10 bg-gray-400 rounded-r-sm"></div>
                
                <!-- Bouton power sur le côté droit -->
                <div class="absolute right-0 top-36 w-0.5 h-12 bg-gray-400 rounded-l-sm"></div>
                
                <!-- Screen -->
                <div class="w-full h-full bg-white rounded-[2.8rem] overflow-hidden relative shadow-inner">
                    <!-- Purple accent corner -->
                    <div class="absolute top-0 right-0 w-28 h-36 z-0" style="background: linear-gradient(to bottom left, #a855f7 0%, rgba(168,85,247,0.3) 60%, transparent 100%); border-bottom-left-radius: 100px;"></div>

                    <!-- Content -->
                    <div class="relative z-10 h-full flex flex-col px-7 py-8">
                        <!-- Back Button -->
                        <a href="/list" class="text-purple-600 text-sm font-medium mb-2 flex items-center hover:text-purple-700 transition">
                            <i class="fas fa-arrow-left mr-2"></i>Retour
                        </a>

                        <!-- Logo/Icon -->
                        <div class="flex justify-center mb-3">
                            <div class="w-20 h-20 bg-gray-50 rounded-3xl flex items-center justify-center shadow-sm border border-gray-100">
                                <i class="fas fa-user-graduate text-gray-300 text-3xl"></i>
                            </div>
                        </div>

                        <!-- Title -->
                        <div class="text-center mb-1">
                            <h1 class="text-xl font-bold text-gray-800 mb-1">Ajouter Étudiant</h1>
                            <p class="text-xs text-gray-400">Remplissez les informations</p>
                        </div>

                        <!-- Fingerprint indicator -->
                        <div class="flex justify-center mb-4">
                            <div class="w-1.5 h-1.5 bg-gray-300 rounded-full"></div>
                        </div>

                        <!-- Form -->
                        <form action="/Ajouter/trait" method="POST" class="space-y-2.5 flex-1">
                            @csrf
                            
                            <!-- Nom -->
                            <div>
                                <input 
                                    type="text" 
                                    name="nom" 
                                    id="nom"
                                    placeholder="Nom" 
                                    required
                                    class="w-full px-4 py-3 bg-white border border-gray-200 rounded-xl text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:border-purple-300 transition shadow-sm"
                                />
                            </div>
                            
                            <!-- Prénom -->
                            <div>
                                <input 
                                    type="text" 
                                    name="prenom" 
                                    id="prenom"
                                    placeholder="Prénom" 
                                    required
                                    class="w-full px-4 py-3 bg-white border border-gray-200 rounded-xl text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:border-purple-300 transition shadow-sm"
                                />
                            </div>
                            
                            <!-- Email -->
                            <div>
                                <input 
                                    type="email" 
                                    name="email" 
                                    id="email"
                                    placeholder="Email" 
                                    required
                                    class="w-full px-4 py-3 bg-white border border-gray-200 rounded-xl text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:border-purple-300 transition shadow-sm"
                                />
                            </div>

                            <!-- Submit Button -->
                            <button 
                                type="submit"
                                class="w-full py-3 text-white font-bold text-sm tracking-wide rounded-xl shadow-lg transition transform hover:scale-[1.02] active:scale-[0.98] mt-3"
                                style="background: linear-gradient(90deg, #a855f7 0%, #ec4899 100%);"
                            >
                                <i class="fas fa-plus-circle mr-2"></i>AJOUTER
                            </button>
                        </form>

                        <!-- Bottom wave decoration -->
                        <div class="absolute bottom-0 left-0 right-0 h-28 pointer-events-none">
                            <svg viewBox="0 0 300 120" class="w-full h-full" preserveAspectRatio="none">
                                <path 
                                    d="M0,60 Q75,30 150,60 T300,60 L300,120 L0,120 Z" 
                                    fill="url(#waveGradient)" 
                                    opacity="0.5"
                                />
                                <defs>
                                    <linearGradient id="waveGradient" x1="0%" y1="0%" x2="100%" y2="0%">
                                        <stop offset="0%" style="stop-color: #a855f7"/>
                                        <stop offset="100%" style="stop-color: #ec4899"/>
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Side Text -->
            <div class="text-white">
                <h2 class="text-5xl font-bold leading-tight mb-2">Ajouter un</h2>
                <h2 class="text-5xl font-bold leading-tight mb-4">étudiant</h2>
            </div>
        </div>
    </div>

    @if(session('status'))
    <script>
        alert("{{ session('status') }}");
    </script>
    @endif
</body>
</html>