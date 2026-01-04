<!DOCTYPE html>
<html>
<head>
    <title>Users PDF</title>
</head>
<body>
    <h2>User List</h2>
    <table border="1" cellpadding="5">
        <tr>
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
        </tr>
        {{-- For Excel export, ensure the first row contains these column names as headers --}}
        @foreach($users as $user)
        <tr>
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
                    {{ $user->payment_screenshot }}
                @else
                    N/A
                @endif
            </td>
            <td>{{ $user->created_at }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
