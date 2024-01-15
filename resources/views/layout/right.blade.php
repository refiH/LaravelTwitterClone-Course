<div class="sticky top-20 h-fit flex-1">
  {{-- Search Box --}}
  <form action="{{ route('dashboard') }}" method="GET"
    class="flex flex-col rounded-md border border-[rgba(0,0,0,0.5)] p-4">
    <input type="text" name="search" class="mb-2 rounded-md px-2 py-1" />
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
