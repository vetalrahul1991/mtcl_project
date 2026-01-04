<x-admin>
    @section('title', 'Users')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">User Table</h3>
            <!-- <div class="card-tools"><a href="{{ route('admin.user.create') }}" class="btn btn-sm btn-primary">Add</a></div> -->
            <div class="card-tools"><a href="{{ route('admin.exportUsers') }}" class="btn btn-sm btn-primary">Export Excel</a></div>
            <div class="card-tools">  <a href="{{ route('admin.exportPdf') }}" class="btn btn-sm btn-primary">Export PDF</a></div>
        </div>
        <div class="card-body">
            <table class="table table-striped" id="userTable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Surname</th>
                        <th>Mobile</th>
                        <th>DOB</th>
                        <th>District</th>
                        <th>City</th>
                        <th>Zone</th>
                        <th>Playing Role</th>
                        <th>Batting Handedness</th>
                        <th>Bowling Style</th>
                        <th>Batting Order</th>
                        <th>Email</th>
                        <th>Payment Screenshot</th>
                        <th>Created</th>
                        <th>Action</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->first_name }}</td>
                            <td>{{ $user->middle_name }}</td>
                            <td>{{ $user->surname }}</td>
                            <td>{{ $user->mobile_number }}</td>
                            <td>{{ $user->date_of_birth }}</td>
                            <td>{{ $user->district }}</td>
                            <td>{{ $user->city }}</td>
                            <td>{{ $user->zone }}</td>
                            <td>{{ $user->playing_role }}</td>
                            <td>{{ $user->batting_handedness }}</td>
                            <td>{{ $user->preferred_bowling_style }}</td>
                            <td>{{ $user->preferred_batting_order }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                @if($user->payment_screenshot)
                                    <a href="{{ asset('storage/' . $user->payment_screenshot) }}" target="_blank">
                                        <img src="{{ asset('storage/' . $user->payment_screenshot) }}" alt="Payment Screenshot" style="max-width:60px;max-height:60px;border-radius:4px;border:1px solid #ccc;">
                                    </a>
                                @else
                                    N/A
                                @endif
                            </td>
                            <td>{{ $user->created_at }}</td>
                            <td>
                                <a href="{{ route('admin.user.edit', encrypt($user->id)) }}"
                                    class="btn btn-sm btn-primary">Edit</a>
                            </td>
                            <td>
                                <form action="{{ route('admin.user.destroy', encrypt($user->id)) }}" method="POST"
                                    onsubmit="return confirm('Are sure want to delete?')">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @section('js')
        <script>
            $(function() {
                $('#userTable').DataTable({
                    "paging": true,
                    "searching": true,
                    "ordering": true,
                    "responsive": true,
                });
            });
        </script>
    @endsection
</x-admin>
