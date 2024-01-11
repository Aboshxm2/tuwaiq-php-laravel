<div>
    <table style="width: 100%; border-collapse: collapse;margin-top: 20px;">
        <tr>
            <th style="border: 1px solid #dddddd;padding: 8px;background-color: #f2f2f2;text-align: center;">id</th>
            <th style="border: 1px solid #dddddd;padding: 8px;background-color: #f2f2f2;text-align: center;">name</th>
            <th style="border: 1px solid #dddddd;padding: 8px;background-color: #f2f2f2;text-align: center;">model</th>
            <th style="border: 1px solid #dddddd;padding: 8px;background-color: #f2f2f2; text-align: center;">price</th>
        </tr>
        @foreach($phones as $phone)
            @if($phone["price"] < 2500)
                <tr>
                    <td style="border: 1px solid #dddddd;padding: 8px;background-color: #f2f2f2;text-align: center;">{{ $phone["id"] }}</td>
                    <td style="border: 1px solid #dddddd;padding: 8px;background-color: #f2f2f2;text-align: center;">{{ $phone["name"] }}</td>
                    <td style="border: 1px solid #dddddd;padding: 8px;background-color: #f2f2f2;text-align: center;">{{ $phone["model"] }}</td>
                    <td style="border: 1px solid #dddddd;padding: 8px;background-color: #f2f2f2;text-align: center;">{{ $phone["price"] }}</td>
                </tr>
            @endif
        @endforeach
    </table>
</div>
