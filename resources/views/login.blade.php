@extends("layouts.app")
@section("content")
    <h1 class="text-center text-3xl my-5">Login</h1> 
    <form method="POST" action="{{ route("login.submit") }}" class="block w-full">
        @csrf

        @error("email")
            <strong class="error">{{ $message }}</strong>
        @enderror
        <div class="container mx-auto my-3 grid grid-cols-[120px_auto] grid-rows-2 gap-y-3">
            <label for="email" class="text-xl text-center">Email</label>
            <input type="email" name="email" id="email" class="input me-2">

            <label for="password" class="text-xl text-center">Password</label>
            <input type="password" name="password" id="password" class="input me-2">
        </div>
        <button type="submit" class="mx-auto block btn">Login</button>
    </form>
@endsection