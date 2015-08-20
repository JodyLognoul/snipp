<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Snippet;

class algolia extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'algolia:reindex';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Re-index the algolia current index.';

    /**
     * @var Snippet
     */
    protected $snippet;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(Snippet $snippet)
    {
        $this->snippet = $snippet;
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->snippet->reindex();
    }
}
