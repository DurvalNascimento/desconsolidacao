<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;
use Mail;
use App\Http\Controllers\MailController;

class previsaodechegada extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:emailprevisaodechegada';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'enviar previsao de chegada';

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
         MailController::previsaodechegada();
        

    }
}
