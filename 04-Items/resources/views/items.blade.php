@extends("layouts.app")

@section("content")
    <div class="container">
        <div class="my-3 mx-auto border rounded-2 p-3">
            <form action="{{ route("add-item") }}" method="post">
                @csrf

                <div class="form-group my-3">
                    <label for="name">Item Name:</label>
                    <input class="form-control" type="text" name="name" id="name">
                </div>
                <div class="form-group my-3">
                    <label for="price">Item Price:</label>
                    <input class="form-control" type="number" name="price" id="price">
                </div>
                <div class="form-group my-3">
                    <label for="qty">Item Quantity:</label>
                    <input class="form-control" type="number" name="qty" id="qty">
                </div>
                <div class="form-group my-3">
                    <label for="color">Item Color:</label>
                    <input class="form-control" type="text" name="color" id="color">
                </div>
                <div class="form-group my-3">
                    <label for="itemGroupNo">Item Group:</label>
                    <select class="form-control" name="itemGroupNo" id="itemGroupNo">
                        @foreach($itemGroups as $itemGroup)
                            <option value="{{ $itemGroup["id"] }}">{{ $itemGroup["name"] }}</option>
                        @endforeach
                    </select>
                </div>

                <button class="w-100 btn btn-primary" type="submit">Submit</button>
            </form>
        </div>
        <div>
            <table class="my-3 table table-bordered mx-auto text-center">
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>price</th>
                    <th>quantity</th>
                    <th>color</th>
                    <th>group</th>
                    <th>Action</th>
                </tr>
                @foreach($items as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->qty }}</td>
                        <td>{{ $item->color }}</td>
                        <td>{{ $item->group}}</td>
                        <td>
                            <a href="{{ route("edit-item", $item->id) }}"><i class="bi bi-pencil"></i></a>
                            <a href="{{ route("delete-item", $item->id) }}"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
