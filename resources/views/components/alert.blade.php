@props(['message' => ''])

<div class="flex justify-between p-4 text-sm rounded-md bg-green-200" role="alert">
  <span>{{ $message }}</span>
  <button type="button" data-bs-dismiss="alert" class="font-bold">X</button>
</div>
