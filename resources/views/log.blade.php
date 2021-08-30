<h1>Employee report</h1>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<table class="table table-striped">
    <thead>
        <tr>
            <th>Full Name</th>
            <th>First in</th>
            <th>Last out</th>
            <th>Total working hours</th>
        </tr>
    </thead>
    <tbody>
        @foreach($logs as $log)
        <tr>
            <td>{{ $log->user->fname }} {{ $log->user->lname }}</td>
            <td>{{ $log->created_at }}</td>
            <td>{{ $log->updated_at }}</td>
            <td>{!! $log->updated_at->diffInHours($log->created_at) !!}</td>
        </tr>
        @endforeach
    </tbody>
</table>