<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <table border="1px">
        <thead>
            <tr>
                <th>SN</th>
                <th>Title</th>
                <th>Description</th>
                <th>Image</th>
            </tr>
        </thead>
        @foreach ($admins as $admin)
            <tbody>
                <td> {{ $loop->index + 1 }}</td>
                <td>{{ $admin->title }}</td>
                <td>{{ $admin->description }}</td>
                <td> <img src="{{ asset('img/' . $admin->image_path) }}" alt=""></td>
            </tbody>
        @endforeach
    </table>
</body>

</html>
