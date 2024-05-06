<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form
        @if(isset($type))
            action="{{route('post.update',['post' => $id])}}"
            method="POST"
        @else
            action="{{route('post.store')}}"
            method="POST"
        @endif

    >
        @if(isset($type))
            @method('PUT')
        @endif

        @csrf
        <input type="text" name="name" />
        <input type="text" name="text" />
        <input type="submit" value="ok" />

    </form>
</body>
</html>
