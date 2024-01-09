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
      <div class="flex justify-between p-4 text-sm rounded-md border border-[rgba(0,0,0,0.5)]">
        Fed created succesfully.
        <button class="font-bold">X</button>
      </div>

      {{-- Fed Form --}}
      <form class="flex flex-col gap-y-1 mt-4">
        <span class="text-xl font-semibold">
          Share your feds
        </span>
        <textarea name="share" rows="3" class="px-3 py-2 border border-[rgba(0,0,0,0.5)] rounded-md text-sm"></textarea>
        <x-button type="submit" class="w-fit rounded-md">Share</x-button>
      </form>

      {{-- Divider --}}
      <span class="w-full flex border border-[rgba(0,0,0,0.25)] my-4"></span>

      {{-- Fed --}}
      <div class="flex flex-col p-4 rounded-md border border-[rgba(0,0,0,1)]">
        {{-- Fed-Person --}}
        <div class="w-full flex items-center gap-x-3">
          <div class="w-8 h-8 bg-gray-400 rounded-full"></div>
          <span class="font-bold">James Bond</span>
        </div>

        {{-- Fed-Content --}}
        <div class="text-sm mt-4">
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque similique tempora fugiat corporis enim
          aspernatur sequi et consequuntur exercitationem. Magni repellendus id expedita. Harum veniam culpa officiis ipsa
          iusto in!
        </div>

        {{-- Fed-Stats --}}
        <div class="flex justify-between text-xs font-semibold mt-2">
          <div>100</div>
          <div>9/1/2024</div>
        </div>

        {{-- Fed-Comment-Form --}}
        <form class="mt-6">
          <textarea name="comment" rows="1" class="w-full px-3 py-2 border border-[rgba(0,0,0,0.5)] rounded-md text-sm"></textarea>
          <x-button type="submit" class="w-fit rounded-md text-sm">Post Comment</x-button>
        </form>

        {{-- Divider --}}
        <span class="w-full flex border border-[rgba(0,0,0,0.25)] my-4"></span>

        {{-- Fed-Comment --}}
        <div class="flex flex-col pl-4">
          {{-- Fed-Comment-Person --}}
          <div class="w-full flex items-center gap-x-3">
            <div class="w-6 h-6 bg-gray-400 rounded-full"></div>
            <span class="text-sm font-bold">Bames Jond</span>
            <span class="text-xs ml-auto">3 hours ago</span>
          </div>

          {{-- Fed-Comment-Content --}}
          <div class="text-xs mt-4">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque similique tempora fugiat corporis enim
            aspernatur sequi et consequuntur exercitationem. Magni repellendus id expedita. Harum veniam culpa officiis
            ipsa
            iusto in!
          </div>
        </div>
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
