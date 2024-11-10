@extends('Layout.Layout')

@section('title','Login')


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-8 col-lg-6">
            <form class="form mt-5" action=" {{ route('login') }} " method="post">
                @csrf
                <h3 class="text-center text-dark">login</h3>
                <div class="form-group mt-3">
                    <label for="email" class="text-dark">Email:</label><br>
                    <input type="email" name="email" id="email" class="form-control">
                    @error('email')
                        <span class="d-block fs-6 text-danger mt-2 mb-2"> {{ $message }} </span>
                    @enderror
                </div>
                <div class="form-group mt-3">
                    <label for="password" class="text-dark">Password:</label><br>
                    <input type="password" name="password" id="password" class="form-control">
                    @error('password')
                        <span class="d-block fs-6 text-danger mt-2 mb-2"> {{ $message }} </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="remember-me" class="text-dark"></label><br>
                    <input type="submit" name="submit" class="btn btn-dark btn-md " value="Login">
                </div>
                <div class="text-right mt-2">
                    <a href="/login" class="text-dark">Reister here</a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection