@if($role == 'admin' || $role == 'user')
    <h1>Welcome {{ $role }} Dashboard</h1>
@else
    <h1>Access Denied</h1>
@endif