@extends("layouts.app")
@section("content")
    <a href="{{ route("sprites.create") }}"><button class="btn">+</button></a>

    <div class="w-full flex flex-col gap-3 items-center">
        @forelse ($sprites as $sprite)
            <a href="{{ route("sprites.show", ["sprite" => $sprite]) }}">
                <div class="text-center w-80 max-w-md select-none rounded-md 
                    p-3 bg-gray-100 hover:bg-gray-300
                    dark:bg-slate-800 dark:hover:bg-slate-900">
                    <h2 class="text-xl pb-2 mb-2 border-b-2 border-b-gray-800 dark:border-b-slate-50">{{ $sprite->name }}</h2>
                    <p>{{ $sprite->width }} x {{ $sprite->height }}</p>
                    <p>Updated at: {{ $sprite->updated_at }}</p>
                    <p>Created at: {{ $sprite->created_at }}</p>
                </div> 
            </a> 
        @empty
            <p>no sprites</p> 
        @endforelse 
    </div>

    <span class="flex justify-start py-3">
        {{ $sprites->links() }}
    </span>
@endsection