@extends("layouts.app")

@section("content")
    <div class="container my-3 mx-auto border rounded-2 p-3">
        <form action="{{ route("update-item") }}" method="post">
            @csrf
            <input type="number" name="id" id="" hidden value="{{ $item->id }}">

            <div class="form-group my-3">
                <label for="name">Item Name:</label>
                <input class="form-control" type="text" name="name" id="name" value="{{ $item->name }}">
            </div>
            <div class="form-group my-3">
                <label for="price">Item Price:</label>
                <input class="form-control" type="number" name="price" id="price" value="{{ $item->price }}">
            </div>
            <div class="form-group my-3">
                <label for="qty">Item Quantity:</label>
                <input class="form-control" type="number" name="qty" id="qty" value="{{ $item->qty }}">
            </div>
            <div class="form-group my-3">
                <label for="color">Item Color:</label>
                <input class="form-control" type="text" name="color" id="color" value="{{ $item->color }}">
            </div>
            <div class="form-group my-3">
                <label for="itemGroupNo">Item Group:</label>
                <select class="form-control" name="itemGroupNo" id="itemGroupNo">
                    @foreach($itemGroups as $itemGroup)
                        <option @php echo($item->itemGroupNo === $itemGroup->id ? "selected": ""); @endphp value="{{ $itemGroup["id"] }}">{{ $itemGroup["name"] }}</option>
                    @endforeach
                </select>
            </div>

            <button class="w-100 btn btn-primary" type="submit">Submit</button>

        </form>
    </div>
@endsection
