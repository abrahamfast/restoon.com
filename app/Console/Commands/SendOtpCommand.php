<?php

namespace App\Console\Commands;

use App\Services\OtpService;
use Illuminate\Console\Command;

class SendOtpCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'otp:send {receptor}';

    protected $otpService;

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'send a code verification';

    /**
     * Create a new command instance.
     *
     * @param OtpService $otpService
     */
    public function __construct(OtpService $otpService)
    {
        parent::__construct();
        $this->otpService = $otpService;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $receptor  = $this->argument('receptor');
        $this->otpService->setReceptor($receptor);
        $this->otpService->send();
    }
}
