@extends("layouts.app")
@section("content")
    <form method="POST" action="{{ route("sprites.store") }}">
        @csrf

        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" required maxlength="255">
            @error("name")
                <strong>{{ $message }}</strong>
            @enderror
        </div>
        <div>
            <label for="width">Width</label>
            <input type="number" name="width" id="width" required>
            @error("width")
                <strong>{{ $message }}</strong>
            @enderror
        </div>
        <div>
            <label for="height">Height</label>
            <input type="number" name="height" id="height" required>
            @error("height")
                <strong>{{ $message }}</strong>
            @enderror
        </div>
        <button type="submit" class="btn">Submit</button>
    </form> 
@endsection