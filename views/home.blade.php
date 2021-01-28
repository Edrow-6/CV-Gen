@extends('layouts.app', ['title' =>'Acceuil', 'body_class' => 'home-page'])

@section('head-content')
<main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
    <div class="sm:text-center lg:text-left">
      <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
        <span class="block xl:inline">Projet de générateur</span>
        <span class="block text-blue-600 xl:inline">de CV en ligne</span>
      </h1>
      <p class="mt-3 text-base text-red-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
        Projet en cours de développement !
      </p>
      <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
        <div class="rounded-md shadow">
          <a href="/login" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 md:py-4 md:text-lg md:px-10">
            Commencer
          </a>
        </div>
        <div class="mt-3 sm:mt-0 sm:ml-3">
          <a href="https://github.com/Edrow-6/CV-Gen" target="_blank" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-blue-700 bg-blue-100 hover:bg-blue-200 md:py-4 md:text-lg md:px-10">
            Github
          </a>
        </div>
      </div>
    </div>
  </main>
@endsection

@section('main-content')
<div class="py-12 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="lg:text-center">
        <h2 class="text-base text-blue-600 font-semibold tracking-wide uppercase">Statistiques</h2>
        <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
          Quelques Chiffres
        </p>
        <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
            Les statistiques ci-dessous sont basées sur le nombre d'utilisateurs et le nombre de curriculum vitae présents dans notre base de données.
        </p>
      </div>
  
      <div class="mt-10">
        <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-3 md:gap-x-8 md:gap-y-10">
          <div class="flex">
            <div class="flex-shrink-0">
              <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white">
                <!-- Heroicon name: globe-alt -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                </svg>
              </div>
            </div>
            <div class="ml-4">
              <dt class="text-lg leading-6 font-medium text-gray-900">
                Membres Inscrits
              </dt>
              <dd class="mt-2 text-base text-gray-500 text-3xl">
                N/A
              </dd>
            </div>
          </div>
  
          <div class="flex">
            <div class="flex-shrink-0">
              <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white">
                <!-- Heroicon name: scale -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                </svg>
              </div>
            </div>
            <div class="ml-4">
              <dt class="text-lg leading-6 font-medium text-gray-900">
                CV Générés
              </dt>
              <dd class="mt-2 text-base text-gray-500 text-3xl">
                N/A
              </dd>
            </div>
          </div>
  
          <div class="flex">
            <div class="flex-shrink-0">
              <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white">
                <!-- Heroicon name: lightning-bolt -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                </svg>
              </div>
            </div>
            <div class="ml-4">
              <dt class="text-lg leading-6 font-medium text-gray-900">
                Date & Heure
              </dt>
              <dd class="mt-2 text-base text-gray-500 text-3xl">
                <?php print date("d/m/Y H:i"); ?>
              </dd>
            </div>
          </div>
        </dl>
      </div>
    </div>
  </div>
  <div class="bg-gray-200">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
      <h2 class="font-extrabold tracking-tight text-gray-900 sm:text-4xl">
        <span class="block text-3xl">Ce projet est Open Source</span>
        <span class="text-sm block text-blue-600">Basé sur un Mini Framework crée par notre équipe.</span>
      </h2>
      <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
        <div class="ml-3 inline-flex rounded-md shadow">
          <a href="/more" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-blue-600 bg-white hover:bg-blue-50">
            En savoir plus
          </a>
        </div>
      </div>
    </div>
  </div>
@endsection