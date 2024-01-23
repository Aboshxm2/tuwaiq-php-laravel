@extends("layouts.app")

@section("content")
    <div class="container">
        <div class="my-3 mx-auto border rounded-2 p-3">
            <form action="{{ route("add-item-group") }}" method="post">
                @csrf
                <div class="form-group my-3">
                    <label for="name">Item Group Name:</label>
                    <input class="form-control" type="text" name="name" id="name">
                </div>
                <button class="w-100 btn btn-primary" type="submit">Submit</button>
            </form>
        </div>
        <div>
            <table class="my-3 table table-bordered mx-auto text-center">
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>Action</th>
                </tr>
                @foreach($itemGroups as $itemGroup)
                    <tr>
                        <td>{{ $itemGroup->id }}</td>
                        <td>{{ $itemGroup->name }}</td>
                        <td>
                            <a href="{{ route("edit-item-group", $itemGroup->id) }}"><i class="bi bi-pencil"></i></a>
                            <a href="{{ route("delete-item-group", $itemGroup->id) }}"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
