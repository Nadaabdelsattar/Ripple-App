@auth()
<h4> Feel free to share your Thoughts </h4>
    <div class="row">
        <form action="{{ route('Thoughts.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <textarea name="content" class="form-control" id="content" rows="3"></textarea>
            </div>

            @error('content')
                <span class="d-block fs-6 text-danger mt-2 mb-2"> {{ $message }} </span>
            @enderror

            <div class="">
                <button type="submit" class="btn btn-dark"> Share </button>
            </div>
        </form>
    </div>
@endauth
@guest()
    <h4> Login to share your Thoughts </h4>
@endguest

