<?php

namespace App\Jobs;

use App\Models\Person;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class addNumbers implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $quantiry;
    protected $first;

    /**
     * Create a new job instance.
     */
    public function __construct($first,$quantity)
    {
        $this->first = $first;
        $this->quantity = $quantity;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        // doesn't work if user isn't 1000
        // doesn't work if directory haven't permissions -R 777
        $str = '';
//        Log::info('ffffffffffffffffffffffffffffffffffffff');
        $array = array_fill(1,500,'text');
        foreach ($array as $key=>$val){
            $str .= $array[$key];
        }


//        sleep(5);
//        Storage::disk('public')->put('file3.txt', $str);

//        Log::info('The work is done');

        // don't work in one task with sleep() method
        try {
            $Person = new Person();
            $Person->name = 'asdfdf';
            $Person->save();
        } catch (\Exception $e) {
            $this->failed($e);
        }


    }

    // use failed method for catch exception
    public function failed(\Exception $exception)
    {
        log::info('This queue failed');
//        $exception->getMessage();
        // etc...
    }
}
