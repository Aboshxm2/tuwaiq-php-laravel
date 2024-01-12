@extends('layouts.app')

@section("content")
<div class="container w-100 mx-auto my-2 p-3 border rounded-4 text-center">
    <div class="row">
        <form action="{{ route("save-smartphone") }}" method="post">
            @csrf
            <label for="name">Name:</label>
            <input type="text" name="name" id="name">
            <label for="price">Price:</label>
            <input type="number" name="price" id="price">
            <label for="color">Color:</label>
            <input type="text" name="color" id="color">
            <button type="submit">Submit</button>
        </form>
    </div>
    <div class="row mt-4">
        <table class="w-100">
            <tr class="border">
                <th class="border">ID</th>
                <th class="border">Name</th>
                <th class="border">Price</th>
                <th class="border">Color</th>
            </tr>
            @foreach($smartphones as $smartphone)
                <tr class="border">
                    <td class="border">{{ $smartphone["id"] }}</td>
                    <td class="border">{{ $smartphone["name"] }}</td>
                    <td class="border">{{ $smartphone["price"] }}</td>
                    <td class="border">{{ $smartphone["color"] }}</td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection
