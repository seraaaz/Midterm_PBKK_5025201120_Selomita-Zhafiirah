<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body class="antialiased">
    <h1>Inventory Form</h1>

    @if (isset($inventory))
    <form action="{{ route('form.update', ['form' => $inventory->id]) }}" enctype="multipart/form-data" method="POST" class="d-flex flex-column gap-3">
        @method('PUT')
        @csrf
        <input type="text" name="item_description" placeholder="" value="{{$inventory->item_description}}" required />
        <input type="text" name="item_defect" placeholder="" value="{{$inventory->item_defect}}" required />
        <input type="number" name="item_amount" placeholder="" value="{{$inventory->item_amount}}" required />
        <input type="file" name="item_image" placeholder="Image" value="{{$inventory->item_image}}" required />
        {{-- DROPDOWN: --}}
        <select required name="item_type">
            <option value="Computers" {{$inventory->item_type === "Computers"?"selected":""}}>Computers</option>
            <option value="Networking Equipment" {{$inventory->item_type === "Networking Equipment"?"selected":""}}>Networking Equipment</option>
            <option value="Storage Devices" {{$inventory->item_type === "Storage Devices"?"selected":""}}>Storage Devices</option>
            <option value="Accessories" {{$inventory->item_type === "Accessories"?"selected":""}}>Accessories</option>
            <option value="Softwares" {{$inventory->item_type === "Softwares"?"selected":""}}>Softwares</option>
            <option value="Server Equipments" {{$inventory->item_type === "Server Equipments"?"selected":""}}>Server Equipments</option>
            <option value="Audio Visual Equipments" {{$inventory->item_type === "Audio Visual Equipments"?"selected":""}}>Audio Visual Equipments</option>
            <option value="Cables and Adapters" {{$inventory->item_type === "Cables and Adapters"?"selected":""}}>Cables and Adapters</option>
            <option value="Others" {{$inventory->item_type === "Others"?"selected":""}}>Others</option>
        </select>
        <button type="submit">Save</button>
    </form>
    @else
    <form action="{{ route('form.store') }}" method="post" enctype="multipart/form-data" class="d-flex flex-column gap-3">
        @csrf
        <input type="text" name="item_description" placeholder="" required />
        <input type="text" name="item_defect" placeholder="" required />
        <input type="number" name="item_amount" placeholder="" required />
        <input type="file" name="item_image" placeholder="" required />
        {{-- DROPDOWN: --}}
        <select required>
            <option value="Computers">Computers</option>
            <option value="Networking Equipment">Networking Equipment</option>
            <option value="Storage Devices">Storage Devices</option>
            <option value="Accessories">Accessories</option>
            <option value="Softwares">Softwares</option>
            <option value="Server Equipments">Server Equipments</option>
            <option value="Audio Visual Equipments">Audio Visual Equipments</option>
            <option value="Cables and Adapters">Cables and Adapters</option>
            <option value="Others">Others</option>
        </select>
        <button type="submit">Submit</button>
    </form>
    @endif

</body>

</html>