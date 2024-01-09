@extends('layout.main')

@section('content')
  <div class="flex w-full gap-x-4">
    {{-- Left --}}
    <div class="sticky top-20 flex h-fit flex-1 flex-col overflow-hidden text-sm">
      <div class="flex flex-col overflow-hidden rounded-t-md border border-[rgba(0,0,0,0.5)]">
        <button class="py-3 pl-5 text-left hover:bg-slate-300">Home</button>
        <button class="py-3 pl-5 text-left hover:bg-slate-300">Explore</button>
        <button class="py-3 pl-5 text-left hover:bg-slate-300">Feed</button>
        <button class="py-3 pl-5 text-left hover:bg-slate-300">Terms</button>
        <button class="py-3 pl-5 text-left hover:bg-slate-300">Support</button>
        <button class="py-3 pl-5 text-left hover:bg-slate-300">Settings</button>
      </div>
      <button class="rounded-b-md bg-slate-700 py-3 text-center font-bold text-white hover:bg-slate-800">
        Profile</button>
    </div>

    {{-- Main --}}
    <div class="h-fit flex-[2_2_0%]">
      {{-- Alert --}}
      <x-alert message="Fed created succesfully" />

      {{-- Fed Form --}}
      <x-submit-fed />

      {{-- Divider --}}
      <span class="w-full flex border border-[rgba(0,0,0,0.25)] my-4"></span>

      {{-- Fed --}}
      <div class="flex flex-col gap-y-4">
        @foreach ($feds as $fed)
          <x-fed :data="$fed" />
        @endforeach
      </div>
    </div>

    {{-- Right --}}
    <div class="sticky top-20 h-fit flex-1">
      {{-- Search Box --}}
      <form class="flex flex-col rounded-md border border-[rgba(0,0,0,0.5)] px-4 py-2">
        <input type="text" name="search" class="my-2 rounded-md px-2 py-1" />
        <x-button type="submit" class="w-fit rounded-md">Search</x-button>
      </form>

      {{-- Recommended People --}}
      <div class="mt-2 flex flex-col rounded-md border border-[rgba(0,0,0,0.5)] px-4 py-2">
        <h3 class="text-lg font-bold">Who to follow</h3>

        <div class="mt-4 flex flex-col gap-2">
          @for ($i = 0; $i < 5; $i++)
            <div class="flex cursor-pointer items-center justify-between">
              <div>
                <h4 class="text-sm font-bold">James Bond</h4>
                <p class="text-xs">@jamesbond</p>
              </div>
              <x-button class="rounded px-3 py-0">+</x-button>
            </div>
          @endfor
          <button class="mx-auto mt-2 text-sm hover:underline">Show More</button>
        </div>
      </div>
    </div>
  </div>
@endsection
