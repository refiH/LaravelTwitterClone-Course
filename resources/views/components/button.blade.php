@props(['type' => ''])

<button {{ $attributes->class(['bg-slate-800 px-5 py-1 font-bold text-white hover:bg-slate-900 active:bg-slate-950']) }}
  {{ $attributes->merge(['type' => $type]) }}>
  {{ $slot }}
</button>
