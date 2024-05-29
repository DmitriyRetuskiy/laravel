<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
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

        Storage::disk('public')->delete('file3.txt');
        $array = array_fill(1,1500,'text');
        $i=0;
        $str = '';
        foreach($array as $val) {
            $array[$i] = $val . '_' . $i;
            $i++;
            sleep(1000);
            $str .= $array[$i];
        }
        Storage::disk('public')->put('file3.txt', $str);

    }
}
