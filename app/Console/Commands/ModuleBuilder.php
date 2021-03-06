<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ModuleBuilder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'module:build';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creating modules to manage the controller, models, and route files';

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
        $this->line("Some text");
        $this->info("Hey, watch this !");
        $this->comment("Just a comment passing by");
        $this->question("Why did you do that?");
        $this->error("Ops, that should not happen.");
    }
}
