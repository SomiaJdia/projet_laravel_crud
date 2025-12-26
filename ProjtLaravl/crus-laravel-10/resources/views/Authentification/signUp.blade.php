<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Sign Up - Magic Link</title>
    <script src="https://cdn.tailwindcss.com"></script>
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
                        <!-- Logo/Icon -->
                        <div class="flex justify-center mb-3 mt-2">
                            <div class="w-20 h-20 bg-gray-50 rounded-3xl flex items-center justify-center shadow-sm border border-gray-100">
                                <svg class="w-10 h-10 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                </svg>
                            </div>
                        </div>

                        <!-- Title -->
                        <div class="text-center mb-1">
                            <h1 class="text-xl font-bold text-gray-800 mb-1">Sign Up</h1>
                            <p class="text-xs text-gray-400">Create your account with magic link</p>
                        </div>

                        <!-- Fingerprint indicator -->
                        <div class="flex justify-center mb-4">
                            <div class="w-1.5 h-1.5 bg-gray-300 rounded-full"></div>
                        </div>

                        <!-- Form -->
                        <form action="/register" method="POST" class="space-y-2.5 flex-1">
                            @csrf
                            
                            <!-- Prénom -->
                            <div>
                                <input 
                                    type="text" 
                                    name="prenom" 
                                    id="prenom"
                                    value="{{ old('prenom') }}"
                                    placeholder="Prénom" 
                                    required
                                    class="w-full px-4 py-3 bg-white border border-gray-200 rounded-xl text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:border-purple-300 transition shadow-sm @error('prenom') border-red-500 @enderror"
                                />
                                @error('prenom')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <!-- Nom -->
                            <div>
                                <input 
                                    type="text" 
                                    name="name" 
                                    id="name"
                                    value="{{ old('name') }}"
                                    placeholder="Nom" 
                                    required
                                    class="w-full px-4 py-3 bg-white border border-gray-200 rounded-xl text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:border-purple-300 transition shadow-sm @error('nom') border-red-500 @enderror"
                                />
                                @error('nom')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <!-- CIN -->
                            <div>
                                <input 
                                    type="text" 
                                    name="cin" 
                                    id="cin"
                                    value="{{ old('cin') }}"
                                    placeholder="CIN" 
                                    required
                                    class="w-full px-4 py-3 bg-white border border-gray-200 rounded-xl text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:border-purple-300 transition shadow-sm @error('cin') border-red-500 @enderror"
                                />
                                @error('cin')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <!-- Email -->
                            <div>
                                <input 
                                    type="email" 
                                    name="email" 
                                    id="email"
                                    value="{{ old('email') }}"
                                    placeholder="Email" 
                                    required
                                    class="w-full px-4 py-3 bg-white border border-gray-200 rounded-xl text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:border-purple-300 transition shadow-sm @error('email') border-red-500 @enderror"
                                />
                                @error('email')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <!-- Password -->
                            <div>
                                <input 
                                    type="password" 
                                    name="password" 
                                    id="password"
                                    placeholder="Password" 
                                    required
                                    class="w-full px-4 py-3 bg-white border border-gray-200 rounded-xl text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:border-purple-300 transition shadow-sm @error('password') border-red-500 @enderror"
                                />
                                @error('password')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <!-- Confirm Password -->
                           

                            <!-- Submit Button -->
                            <button 
                                type="submit"
                                class="w-full py-3 text-white font-bold text-sm tracking-wide rounded-xl shadow-lg transition transform hover:scale-[1.02] active:scale-[0.98] mt-3"
                                style="background: linear-gradient(90deg, #a855f7 0%, #ec4899 100%);"
                            >
                                SIGN UP
                            </button>

                            <!-- Login link -->
                            <div class="text-center pt-1">
                                <a href="/login" class="text-xs text-gray-600 hover:text-purple-600 transition font-medium">
                                    Already have an account? →
                                </a>
                            </div>
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
                <h2 class="text-5xl font-bold leading-tight mb-2">Sign up with</h2>
                <h2 class="text-5xl font-bold leading-tight mb-4">magic link</h2>
            </div>
        </div>
    </div>

    @if(session('success'))
    <script>
        alert("{{ session('success') }}");
    </script>
    @endif
</body>
</html>