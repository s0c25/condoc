<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Inicio') }}
    </h2>
  </x-slot>
  @livewire('contact-form')
</x-app-layout>