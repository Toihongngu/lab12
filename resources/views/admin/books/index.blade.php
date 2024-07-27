<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home book</title>
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
    {{-- <main class=""> --}}
    <div class="d-flex justify-content-center ">
        <a class="btn btn-primary my-4 fs-1" href="{{ route('admin.books.create') }}">them</a>
    </div>
    {{--     <div class="d-flex justify-content-center">

            <a class="btn btn-primary mx-4" data-bs-toggle="collapse" href="#collapseExample" role="button"
                aria-expanded="false" aria-controls="collapseExample">
                <h1>GIÁ CAO NHẤT</h1>
            </a>

            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample1"
                aria-expanded="false" aria-controls="collapseExample1">
                <h1>GIÁ THẤT NHẤT</h1>
            </button>
        </div>

        <div class="collapse " id="collapseExample">
            <div class="d-flex justify-content-center">
                <table class="table w-75">
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
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($highestPricedBooks as $index => $item)
                            <tr>
                                <th scope="row">{{ $index + 1 }}</th>
                                <td>{{ $item->title }}</td>
                                <td>
                                    <img src="{{ Storage::url($item->thumbnail) }}" alt="" width="50px"
                                        height="50px">
                                </td>
                                <td>{{ $item->author }}</td>
                                <td>{{ $item->publisher }}</td>
                                <td>{{ $item->publication }}</td>
                                <td>{{ $item->price }}</td>
                                <td>{{ $item->quantity }}</td>
                                <td>{{ $item->category_name }}</td>
                                <td> <a class="btn btn-success" href="{{ route('admin.books.show', $item->id) }}">
                                        xem
                                    </a>
                                    <a class="btn btn-warning"
                                        href="{{ route('admin.books.edit', $item->id) }}">sua</a>
                                    <form action="{{ route('admin.books.destroy', $item->id) }}" method="POST"
                                        style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Bạn có chắc chắn muốn xóa sách này không?')">Xóa</button>
                                    </form>

                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="collapse" id="collapseExample1">
            <div class="d-flex justify-content-center"> --}}

    @if (session('message'))
        {{ session('message')  }}
    @endif
    <table class="table  w-75">
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
            @foreach ($books as $index => $item)
                <tr>
                    <th scope="row">{{ $index + 1 }}</th>
                    <td>{{ $item->title }}</td>
                    <td>
                        <img src="{{ Storage::url($item->thumbnail) }}" alt="" width="100px" height="100px">
                    </td>
                    <td>{{ $item->author }}</td>
                    <td>{{ $item->publisher }}</td>
                    <td>{{ $item->publication }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>{{ $item->category_name }}</td>
                    <td> <a class="btn btn-success" href="{{ route('admin.books.show', $item->id) }}">
                            xem
                        </a>
                        <a class="btn btn-warning" href="{{ route('admin.books.edit', $item->id) }}">sua</a>
                        <form action="{{ route('admin.books.destroy', $item->id) }}" method="POST"
                            style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Bạn có chắc chắn muốn xóa sách này không?')">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- </div>
        </div>
        <br><br>



        <br>
        <hr><br>
        @foreach ($cate as $item)
            <tr>
                <a class="btn btn-success" href="{{ route('admin.books.findbycate', $item->id) }}">
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                </a>
            </tr>
        @endforeach
    </main> --}}
</body>

</html>
