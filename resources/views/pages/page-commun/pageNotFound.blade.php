@extends('layouts.website.layout-website')
@section('content')
<div class="min-h-screen bg-green-50 dark:bg-[#111827
] flex flex-col items-center justify-center px-4">
    <img src="https://cdn-icons-png.flaticon.com/512/2748/2748558.png"
         alt="Page non trouvée"
         class="w-48 h-48 mb-6 animate-bounce" />

    <h1 class="text-6xl font-extrabold text-green-600 dark:text-green-400">404</h1>
    <p class="text-2xl font-semibold text-green-700 dark:text-green-300 mt-4">Page non trouvée</p>
    <p class="mt-2 text-gray-600 dark:text-gray-300 text-center max-w-md">
        Désolé, la page que vous cherchez semble introuvable ou n'existe plus.
    </p>

    <a href="/"
       class="mt-6 px-6 py-3 bg-green-600 dark:bg-green-500 text-white font-medium text-lg rounded-lg hover:bg-green-700 dark:hover:bg-green-600 transition shadow">
        Retour à l'accueil
    </a>
</div>

@endsection