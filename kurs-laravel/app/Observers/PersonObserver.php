<?php

namespace App\Observers;

use App\Models\Person;
use App\Models\UserCount;
use Illuminate\Support\Facades\Log;

class PersonObserver
{
    /**
     * Handle the Person "created" event.
     */
    public function created(Person $person): void
    {
        // if count null it doesn't work!!!!

//        $Count = UserCount::first();
//        if(empty($Count->count)) {
//            $Count->count = 1;
//        } else {
//            $Count->count++;
//        }
//        $Count->save();

    }

    /**
     * Handle the Person "updated" event.
     */
    public function updated(Person $person): void
    {

    }

    /**
     * Handle the Person "deleted" event.
     */
    public function deleted(Person $person): void
    {
        //
    }

    /**
     * Handle the Person "restored" event.
     */
    public function restored(Person $person): void
    {
        //
    }

    /**
     * Handle the Person "force deleted" event.
     */
    public function forceDeleted(Person $person): void
    {
        //
    }
}
