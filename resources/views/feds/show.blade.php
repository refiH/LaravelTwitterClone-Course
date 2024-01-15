@extends('layout.main')

@section('content')
  <div class="flex w-full gap-x-4">
    {{-- Left --}}
    @include('layout.left')

    {{-- Main --}}
    <div class="h-fit flex-[2_2_0%]">
      {{-- Fed --}}
      <div class="flex flex-col gap-y-4">
        <x-fed :data="$fed" />
      </div>
    </div>

    {{-- Right --}}
    @include('layout.right')
  </div>
@endsection
