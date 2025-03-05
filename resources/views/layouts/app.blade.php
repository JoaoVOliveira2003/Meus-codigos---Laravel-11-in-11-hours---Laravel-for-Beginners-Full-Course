@props(['title' => '', 'bodyClass' => null, 'footerLinks' => ''])

<x-base-layout :title="$title" :bodyClass="$bodyClass">
  {{-- Header --}}
  <x-layouts.header />

  {{-- Content (o slot será renderizado aqui) --}}
  {{$slot}}

</x-base-layout>
