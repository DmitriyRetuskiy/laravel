<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Models\Person;
use App\Models\UserCount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Sleep;
use Illuminate\Support\Str;
use Nette\Utils\Random;
use PhpOffice\PhpWord\TemplateProcessor;
use App\Jobs\addNumbers;

class UserController extends Controller
{
    public  function index(Request $request)
    {
//       pagination withou laravel methods
        $person = new Person();
        $person->name =  md5(uniqid(rand(1,3), true));
        $person->sername =  md5(uniqid(rand(1,3), true));
        $person->phone = rand(11111111,9999999);
        $person->save();

//        // skip take pagination
//        // How rows we show
//        $take = 1;
//        $skip = $request->page*$take;
//        $count = Person::Count();
//        // get only specify
//        $personsSkip = Person::query()
//            ->select('id','name')
//            ->skip($skip)
//            ->take($take)
//            ->get()
//            ->toArray();

        $take = 1;
        $count = Person::Count();
        $skip = $request->page*$take;

        $personsSkip = Person::query()
          ->select('id','name')->paginate(5);


        return view('home', ['persons' => $personsSkip,
            'count' => $count,
            'take' => $take]);
    }

    public function mailForm()
    {
        echo 'mailForm';
        die;
//        return view('layout.layout');
    }

    public function falconTemplate()
    {
        return view('layout.layout');
    }

    public function mail(Request $requset)
    {
        $body = "<p>Имя: Дмитрий  </p>"; //{$requset->name}
        $body .= "<p>Сообщение: Привет из Ларавел</p>";
        Mail::to('reutskiy-dmitriy@mail.ru')
            ->send(new TestMail($body));

            var_dump($requset->all());
//            die();
            return 'письмо отправлено';
    }

    public function firstOrCreate()
    {
        $res = Person::query()->firstOrCreate([
            'name' => 'Иван',
            'sername' => 'Алксандрович'
        ]);

        echo '<pre>';
        print_r($res);
        echo '</pre>';
        die();
    }

    public function redisShow()
    {
//        Redis::set('color','Green','EX',15);
        $color = Redis::get('color');

        echo \App\Http\Middleware\Person::$dir . '<br />';

        var_dump($color);
        die();
    }

    //run queue in laravel
    public function addNumbers() {
    // method for jobs
        dispatch(new addNumbers(1, 1500));
        return 'This is method from jobs';

    }

    public function checkFile(){
        return view('addNumbers');
    }


}

