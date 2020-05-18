<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Modules\Country\Entities\QuocGia;
use Modules\Country\Entities\Country;
class GenerateCountries extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:countries';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate Countries';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        foreach(Quocgia::all() as $quocgia){
            $country = Country::create([
                'country_code'=> $quocgia->country_code,
                'country_name' => $quocgia->country_name,
            ]);
        }   
    }
}
