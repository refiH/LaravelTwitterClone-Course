@props(['comment' => ''])

<div class="flex flex-col px-2">
  {{-- Fed-Comment-Person --}}
  <div class="w-full flex items-center gap-x-3">
    <div class="w-6 h-6 bg-gray-400 rounded-full"></div>
    <span class="text-sm font-bold">Bames Jond</span>
    <span class="text-xs ml-auto">{{ $comment->created_at }}</span>
  </div>

  {{-- Fed-Comment-Content --}}
  <div class="text-xs mt-4">
    {{ $comment->content }}
  </div>
</div>
