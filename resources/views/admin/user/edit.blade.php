<x-admin>
    @section('title', 'Edit User')
    {{-- Show dashboard menu only for admin --}}
    @if(auth()->user() && auth()->user()->hasRole('admin'))
        <div class="mb-3">
            <a href="{{ route('admin.dashboard') }}" class="btn btn-info">Dashboard</a>
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edit User</h3>
            <div class="card-tools"><a href="{{ route('admin.user.index') }}" class="btn btn-sm btn-dark">Back</a></div>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.user.update',$user) }}" method="POST">
                @method('PUT')
                @csrf
                <input type="hidden" name="id" value="{{ $user->id }}">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="name" class="form-label">Name:*</label>
                            <input type="text" class="form-control" name="name" required
                                value="{{ $user->name }}">
                                <x-error>name</x-error>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="Email" class="form-label">Email:*</label>
                            <input type="email" class="form-control" name="email" required
                                value="{{ $user->email }}">
                                <x-error>email</x-error>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="role" class="form-label">Role:*</label>
                            <select name="role" id="role" class="form-control" required >
                                <option value="" selected disabled>selecte the role</option>
                                @foreach ($roles as $role)
                                    <option value="{{ $role->name }}"
                                        {{ $user->roles[0]['name'] === $role->name ? 'selected' : '' }}>{{ $role->name }}</option>
                                @endforeach
                            </select>
                            <x-error>role</x-error>
                        </div>
                    </div>

                    <div class="col-lg-6">
                    <div class="form-group">
                        
                        <label for="status" class="form-label">Status:</label>
                        <select name="status" id="status" class="form-control">
                            <option value="1" {{ $user->status == 1 ? 'selected' : '' }}>Verification Pending</option>
                            <option value="2" {{ $user->status == 2 ? 'selected' : '' }}>Approved</option>
                            <option value="3" {{ $user->status == 3 ? 'selected' : '' }}>Rejected</option>
                            <option value="4" {{ $user->status == 4 ? 'selected' : '' }}>Selected</option>
                        </select>
                        <x-error>status</x-error>
                    </div>
                </div>

                    <div class="col-lg-12">
                        <div class="float-right">
                            <button class="btn btn-primary" type="submit">Save</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-admin>
