<form action="{{ route('fed.create') }}" method="POST" class="flex flex-col gap-y-1 mt-4">
  @csrf
  <span class="text-xl font-semibold">
    Share your feds
  </span>
  <textarea name="content" rows="3" class="px-3 py-2 border border-[rgba(0,0,0,0.5)] rounded-md text-sm"></textarea>
  <x-button type="submit" class="w-fit rounded-md">Share</x-button>
</form>