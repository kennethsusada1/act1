<x-layout>
    <h1 class="text-primary mb-4">Edit or Update User Info</h1>

    <form action="{{ route('edit', $user->id) }}" method="POST" class="w-50">
        @csrf

        <!-- Username -->
        <div class="mb-3">
            <label for="name" class="form-label">Username</label>
            <input 
                type="text" 
                class="form-control @error('name') is-invalid @enderror"
                id="name" 
                name="name" 
                placeholder="Enter username" 
                value="{{ $user->name }}"
            >
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Email -->
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input 
                type="email" 
                class="form-control @error('email') is-invalid @enderror"
                id="email" 
                name="email" 
                placeholder="Enter email" 
                value="{{ $user->email }}"
            >
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Password -->
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input 
                type="password" 
                class="form-control @error('password') is-invalid @enderror"
                id="password" 
                name="password" 
                placeholder="Enter password"
            >
            @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary w-100">Save Changes</button>
    </form>
</x-layout>
