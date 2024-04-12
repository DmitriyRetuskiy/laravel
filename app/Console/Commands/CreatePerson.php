<?php

namespace App\Console\Commands;

use App\Models\Person;
use Illuminate\Console\Command;

class CreatePerson extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:CreatePerson';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $input = fopen('php://stdin','r');

        while(true){
            $line = trim(fgets($input));
            if(empty($line))continue;
            $this->add($line);

        }

    }

    public function add($line):void
    {

       $idUser = Person::query()->firstOrCreate([
           'name' => $line
       ]);

       echo $idUser . "\n\n";
    }
}
