@props(['data' => ''])

<div class="p-4 rounded-md border border-[rgba(0,0,0,0.25)]">
  {{-- Fed-Person --}}
  <div class="w-full flex items-center gap-x-3">
    <div class="w-8 h-8 bg-gray-400 rounded-full"></div>
    <span class="font-bold">James Bond</span>
  </div>

  {{-- Fed-Content --}}
  <div class="text-sm mt-4">
    {{ $data->content }}
  </div>

  {{-- Fed-Stats --}}
  <div class="flex justify-between text-xs font-semibold mt-2">
    <div>{{ $data->likes }}</div>
    <div>{{ $data->created_at }}</div>
  </div>

  {{-- Fed-Comment-Form --}}
  <form class="mt-6">
    <textarea name="comment" rows="1" class="w-full px-3 py-2 border border-[rgba(0,0,0,0.5)] rounded-md text-sm"></textarea>
    <x-button type="submit" class="w-fit rounded-md text-sm mt-2">Post Comment</x-button>
  </form>

  {{-- Divider --}}
  <span class="w-full flex border border-[rgba(0,0,0,0.25)] my-4"></span>

  {{-- Fed-Comment --}}
  <x-fed-comment />
</div>
