<?php

namespace App\Console\Commands;

use App\Enums\ConfigKey;
use App\Services\UpgradeService;
use App\Utils;
use Illuminate\Console\Command;

class Upgrade extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'lsky:upgrade';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Upgrade Lsky Pro.';

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
     * @return int
     */
    public function handle(): int
    {
        return (new UpgradeService(Utils::config(ConfigKey::AppVersion)))->upgrade() ? 0 : 1;
    }
}
