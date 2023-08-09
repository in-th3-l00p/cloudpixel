@extends("layouts.app")
@section("content")
    <h1 class="text-center text-3xl my-5">Register</h1> 
    <form method="POST" action="{{ route("register.submit") }}" class="block w-full">
        @csrf

        @foreach ($errors->all() as $error)
            <strong class="error">{{$error}}</strong> 
        @endforeach
        <div class="container mx-auto my-3 grid grid-cols-[120px_auto] grid-rows-3 gap-y-3">
            <label for="name" class="text-xl text-center">Username</label>
            <input class="input me-2" type="text" name="name" id="name" required>

            <label for="email" class="text-xl text-center">Email</label>
            <input class="input me-2" type="email" name="email" id="email" required>

            <label for="password" class="text-xl text-center">Password</label>
            <input class="input me-2" type="password" name="password" id="password" required>
        </div>
        <button type="submit" class="btn block mx-auto">Submit</button>
    </form>
@endsection