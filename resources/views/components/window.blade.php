@vite(["resources/ts/window.ts"])
<div 
    class="absolute bg-zinc-950 border-2 border-zinc-800"
    style="
        width: {{ $width }}px;
        height: {{ $height }}px;
        top: {{ $y }}px;
        left: {{ $x }}px;
    "
>
    <span 
        draggable="{{ $draggable ? "true" : "false" }}" 
        @if ($draggable) ondrag="onWindowDrag" @endif
        @class([
            "w-full", "h-8", "block", 
            "bg-zinc-900", "border-2", "border-zinc-800", 
            "select-none", "hover:cursor-pointer" => $draggable
        ])
    >
        <h3 class="my-auto ms-2">{{ $title }}</h3>
    </span>
    {{ $slot }}
</div>