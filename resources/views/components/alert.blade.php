@if (session()->has('success'))
  <div class="flex justify-between p-4 mb-4 text-sm rounded-md bg-green-200 border-2 border-green-400" role="alert">
    <span>{{ session('success') }}</span>
    <button type="button" data-bs-dismiss="alert" class="font-bold">X</button>
  </div>
@endif
