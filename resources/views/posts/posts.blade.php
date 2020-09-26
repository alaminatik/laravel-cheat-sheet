
@php
// echo '<pre>';
// print_r($posts->toArray());
// print_r($first_post->toArray());
// exit;
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
</head>
<body>
    <h1>Posts List</h1>
    <table border='1'>
        <thead>
            <tr>
                <td>Category</td>
                <td>Author</td>
                <td>Slage</td>
                <td>Title</td>
                <td>Body</td>
            </tr>
        </thead>

        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->category }}</td>
                    <td>{{ $post->author }}</td>
                    <td>{{ $post->slag }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->body }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>