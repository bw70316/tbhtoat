<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ScrapeHockey extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'scrape:nhl';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'NHL Scores Scraper';

    protected $collections = [
        'animation',
        'disney'
    ];

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
        //
        foreach($scores as $score) {
            $this->scrape($score);
        }
    }
}
