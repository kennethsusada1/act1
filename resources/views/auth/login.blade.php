<x-layout>
      <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="col-12">
            <label for="email" class="form-label fw-bold">Email Address</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" placeholder="Enter your email" required>
            @error('email')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="col-12">
            <label for="password" class="form-label fw-bold">Password</label>
            <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter your password" required>
            @error('password')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="col-12">
            <div class="form-check">
              <input type="checkbox" id="remember" name="remember" class="form-check-input">
              <label for="remember" class="form-check-label">Remember Me</label>
            </div>
          </div>

          <div class="col-12">
            <button type="submit" class="btn btn-primary w-100 py-2">Login</button>
          </div>
      </form>
      <a href="{{ route('register.form') }}">Create Account</a>
    </div>
  </div>
</div>
</x-layout>