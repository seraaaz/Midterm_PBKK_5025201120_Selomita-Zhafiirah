<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body class="antialiased">
    <h1>Employee Form</h1>

    @if (isset($employee))
    <form action="{{ route('form.update', ['form' => $employee->id]) }}"  enctype="multipart/form-data" method="POST" class="d-flex flex-column gap-3">
        @method('PUT')
        @csrf
        <input type="text" name="name" placeholder="Name" value="{{$employee->name}}" required/>
        <input type="text" name="phone_number" placeholder="Phone Number" value="{{$employee->phone_number}}"required/>
        <input type="email" name="email" placeholder="Email" value="{{$employee->email}}" required/>
        <input type="date" name="birthdate" placeholder="Birthdate" value="{{$employee->birthdate}}" required/>
        <button type="submit">Save</button>
    </form> 
    @else
    <form action="{{ route('form.store') }}" method="post" enctype="multipart/form-data" class="d-flex flex-column gap-3">
        @csrf
        <input type="text" name="name" placeholder="Name" required/>
        <input type="text" name="phone_number" placeholder="Phone Number" required/>
        <input type="email" name="email" placeholder="Email" required/>
        <input type="date" name="birthdate" placeholder="Birthdate" required/>
        <button type="submit">Submit</button>
    </form>
    @endif
    
</body>
</html>