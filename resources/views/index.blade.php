<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body class="antialiased">
    <a href="{{ route('form.create') }}" class="btn btn-primary">Add Employee Data</a>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Birthdate</th>
                <th>Action</th> 
            </tr>
        </thead>
        <tbody>
            @foreach($employees as $employee)
            <tr>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->phone_number }}</td>
                <td>{{ $employee->email }}</td>
                <td>{{ $employee->birthdate }}</td>
                <td>
                    <a href="{{ route('form.edit', $employee->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('form.destroy', $employee->id) }}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit">Delete</button>
                    </form>
                    
                </td>
            </tr>
            @endforeach
        </tbody>

</body>
</html>
