@extends('layout.main')

@section('content')
  <div class="flex w-full gap-x-4">
    {{-- Left --}}
    @include('layout.left')

    {{-- Main --}}
    <div class="h-fit flex-[2_2_0%]">
      {{-- Alert --}}
      <x-alert />

      {{-- Fed Form --}}
      <x-submit-fed />

      {{-- Divider --}}
      <span class="w-full flex border border-[rgba(0,0,0,0.25)] my-4"></span>

      {{-- Fed --}}
      <div class="flex flex-col gap-y-4">
        @foreach ($feds as $fed)
          <x-fed :data="$fed" />
        @endforeach

        {{-- Pagination --}}
        {{ $feds->links('pagination::tailwind') }}
      </div>
    </div>

    {{-- Right --}}
    @include('layout.right')
  </div>
@endsection
