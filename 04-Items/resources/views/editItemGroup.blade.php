@extends("layouts.app")

@section("content")
<div class="container my-3 mx-auto border rounded-2 p-3">
    <form action="{{ route("update-item-group") }}" method="post">
        @csrf
        <input type="number" name="id" id="" hidden value="{{ $itemGroup->id }}">

        <div class="form-group my-3">
            <label for="name">Item Group Name:</label>
            <input class="form-control" type="text" name="name" id="name" value="{{ $itemGroup->name }}">
        </div>
        <button class="w-100 btn btn-primary" type="submit">Submit</button>

    </form>
</div>
@endsection
