<x-layouts.app>
    <div class="card w-auto mx-auto shadow-lg p-3 mb-5 bg-body rounded">
        <div class="card-body">
            <div class="d-flex justify-content-between mb-3">
                <h4>Users List</h4>
                <a href="{{ route('user.add')}}" class="btn btn-success">+ เพิ่มบุคลากร</a>
            </div>
            <table class="table table-striped table-hover w-full">
                <thead class="bg-dark text-white text-center">
                    <tr>
                        {{-- <th class="border">
                            <input type="checkbox" class="form-check-input">
                        </th> --}}
                        <th class="border">#</th>
                        <th class="border">ชื่อผู้ใช้</th>
                        <th class="border">คำนำหน้า</th>
                        <th class="border">ชื่อ</th>
                        <th class="border">นามสกุล</th>
                        <th class="border">ระดับผู้ใช้</th>
                        <th class="border">อีเมล</th>
                        <th class="border">จัดการ</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $key => $user)
                    <tr>
                        <td class="text-center">{{ $key + 1 }}</td>
                        <td class="border">{{ $user->username }}</td>
                        <td class="border">{{ $user->prefix->name }}</td>
                        <td class="border">{{ $user->firstname }}</td>
                        <td class="border">{{ $user->lastname }}</td>
                        <td class="border text-center">{{ $user->user_type }}</td>
                        {{-- <td class="border text-center">
                            <form action="{{ route('user.update', $user) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <select name="user_type" class="form-select" onchange="this.form.submit()">
                                    @foreach($users as $user)
                                        <option value="{{ $user->id }}" {{ $user->user_id == $user->id ? 'selected' : '' }}>
                                            {{ $user->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </form>
                        </td> --}}
                        <td class="border">{{ $user->email }}</td>
                        <td class="text-center">
                            <button class="btn btn-warning">Edit</button>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                        {{-- <td class="text-center">
                            <a href="{{ route('users.edit', $user) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('users.destroy', $user) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td> --}}
                    </tr>
                    @endforeach

            </table>
        </div>
    </div>
</x-layouts.app>
