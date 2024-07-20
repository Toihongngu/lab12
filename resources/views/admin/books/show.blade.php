<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

</head>

<body>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">title</th>
                <th scope="col">thumbnail</th>
                <th scope="col">author</th>
                <th scope="col">publisher</th>
                <th scope="col">publication</th>
                <th scope="col">price</th>
                <th scope="col">quantity</th>
                <th scope="col">category_name</th>
                <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <th scope="row">{{ $books->id }}</th>
                <td>{{ $books->title }}</td>
                <td>
                    <img src="{{ Storage::url($books->thumbnail) }}" alt="" width="50px"
                        height="50px">
                </td>
                <td>{{ $books->author }}</td>
                <td>{{ $books->publisher }}</td>
                <td>{{ $books->publication }}</td>
                <td>{{ $books->price }}</td>
                <td>{{ $books->quantity }}</td>
                <td>{{ $books->category_name }}</td>
            </tr>

        </tbody>
    </table>

</body>

</html>
