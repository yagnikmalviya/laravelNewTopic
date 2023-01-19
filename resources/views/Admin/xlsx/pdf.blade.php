
<!DOCTYPE html>
<html>
<head>
    <title>PDF</title>
    <style>
        table{
            width: 100%
        }
    </style>
</head>
<body>
<h1 style="text-align: center;">Xlsx Table Data</h1>
<table border>
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile No.</th>
            <th>City</th>
            <th>District</th>
            <th>taluka</th>
            <th>Address</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($datas as $data)
            <tr>
                <td>{{$data['id']}}</td>
                <td>{{$data['name']}}</td>
                <td>{{$data['email']}}</td>
                <td>{{$data['mobile']}}</td>
                <td>{{$data['city']}}</td>
                <td>{{$data['district']}}</td>
                <td>{{$data['taluka']}}</td>
                <td>{{$data['address']}}</td>
            </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>
