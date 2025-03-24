@csrf
<form action="{{ route('register') }}" method="POST">
    @csrf
    <label for="name" class="form-label">Name</label>
    <input type="text" name="name" value="{{ old('name') }}"
        class="form-control @error('name') is-invalid @enderror" id="name">
    @error('name')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror

    <label for="email" class="form-label">E-mail</label>
    <input type="email" name="email" value="{{ old('email') }}"
        class="form-control @error('email') is-invalid @enderror" id="email">
    @error('email')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror

    <label for="password" class="form-label">Password</label>
    <input type="password" name="password" value="{{ old('password') }}"
        class="form-control @error('password') is-invalid @enderror" id="password">
    @error('password')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror

    <label for="password_confirmation" class="form-label">Password confirmation</label>
    <input type="password" name="password_confirmation" value="{{ old('password_confirmation') }}" class="form-control"
        id="password_confirmation">
    <button type="submit" class="btn btn-primary">Create</button>
</form>