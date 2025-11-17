<x-layout>
    <div class="container mt-4">

        <h1 class="mb-4">List of Users</h1>

        <div class="row">
            @foreach($users as $user)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-body">

                            <h5 class="card-title">{{ $user->name }}</h5>
                            <p class="card-text"><strong>Email:</strong> {{ $user->email }}</p>

                        </div>

                        <div class="card-footer bg-transparent d-flex justify-content-between">

                            {{-- Edit Button --}}
                            <a href="{{ route('edit.show', $user->id) }}" class="btn btn-primary btn-sm">
                                Edit
                            </a>

                            {{-- Delete Form --}}
                            <form action="{{ route('delete', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" type="submit">
                                    Delete
                                </button>
                            </form>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</x-layout>
