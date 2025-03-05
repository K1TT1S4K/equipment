<x-layouts.app>
    <div class="card w-auto mx-auto shadow-lg p-3 mb-5 bg-body rounded border border-dark">
        <div class="card-body">
            <h4>Add New User</h4>
            <form action="{{ route('user.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="mb-3 col-6">
                        <label class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" required>
                    </div>
                    <div class="mb-3 col-6">
                        <label class="form-label">Prefix</label>
                        <select name="prefix" class="form-control" required>
                            <option value="">-- เลือกคำนำหน้า --</option>
                            @foreach($prefixes as $prefix)
                                <option value="{{ $prefix->id }}">{{ $prefix->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-6">
                        <label class="form-label">First Name</label>
                        <input type="text" name="firstname" class="form-control" required>
                    </div>
                    <div class="mb-3 col-6">
                        <label class="form-label">Last Name</label>
                        <input type="text" name="lastname" class="form-control" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{ route('user') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</x-layouts.app>
