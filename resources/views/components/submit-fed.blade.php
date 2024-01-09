<form action="{{ route('feds.store') }}" method="POST" class="flex flex-col gap-y-1">
  @csrf
  <span class="text-xl font-semibold">
    Share your feds
  </span>
  <textarea name="content" rows="3" class="px-3 py-2 border border-[rgba(0,0,0,0.5)] rounded-md text-sm"></textarea>

  @error('content')
    <span class="text-xs text-red-500"> {{ $message }} </span>
  @enderror

  <x-button type="submit" class="w-fit rounded-md mt-2">Share</x-button>
</form>
