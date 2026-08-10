@props(['title'=> ''])

<x-base-layout>
  @include('layouts.partials.header')

  {{ $slot }}
  <footer>
    @section('footerLinks')
      <a href ="#">1</a>
      <a href ="#">2</a>
  </footer>
</x-base-layout>