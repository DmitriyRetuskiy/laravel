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

    <a href="{{route('post.show', ['post' => 1])}}"> Пост 1 </a> &nbsp; <a href="{{route('post.edit', ['post' => 1])}}"> Редактировать </a> <br />
    <a href="{{route('post.show', ['post' => 2])}}"> Пост 2 </a> &nbsp; <a href="{{route('post.edit', ['post' => 2])}}"> Редактировать </a>  <br />
    <a href="{{route('post.show', ['post' => 3])}}"> Пост 3 </a> &nbsp; <a href="{{route('post.edit', ['post' => 3])}}"> Редактировать </a> <br />

    <a href="{{route('post.create')}}" >Создать</a>
</body>
</html>
