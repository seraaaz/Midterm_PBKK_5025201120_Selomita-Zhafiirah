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
                <th>Item Type</th>
                <th>Item Description</th>
                <th>Item Defect</th>
                <th>Item Amount</th>
                <th>Item Image</th> 
                <th>Item Type</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($inventories as $inventory)
            <tr>
                <td>{{ $inventory->item_type }}</td>
                <td>{{ $inventory->item_description}}</td>
                <td>{{ $inventory->item_defect }}</td>
                <td>{{ $inventory->item_amount }}</td>
                <td>{{ $inventory->item_image }}</td>
                <td>{{ $inventory->item_type }}</td>
                <td>
                    <a href="{{ route('form.edit', $inventory->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('form.destroy', $inventory->id) }}" method="post">
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
