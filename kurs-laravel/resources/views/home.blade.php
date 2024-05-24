<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('/css/style.css')}}" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

            <p class="my-welcome"> Привет это шаблон </p>

            @if(!empty($persons))
                    @foreach($persons as $person)
                        {{$person['id']}} &nbsp; &nbsp; {{$person['name']}} <br >
                    @endforeach
                        <br />

                    {{$urls = $count/$take}}
                @for($i=0;$i<$urls;$i++)
                    <a href="/?page={{$i}}"> {{$i}}</a>
                @endfor
            @endif

            <div class="desc-left" style="width:300px">
{{--                {{$persons->appends(['text'=>request()->text])->links(--}}
{{--    'vendor.pagination.bootstrap-4'--}}
)}}

{{--                {{$persons->links('vendor')}}--}}
            </div>





        <button onclick="send()">
            as
        </button>

    <script>
        function send(){
            alert('hi');
        }
    </script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
