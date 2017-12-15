<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use MatthiasMullie\Minify;

class minifyAssets extends Command {

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'assets:minify';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This will minify all the base assets ';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle() {
        $files = ['css' => [
                base_path('public/resources/theme/css/font-awesome.min.css'),
                base_path('public/css/styles-merged.css'),
                base_path('public/css/style.min.css'),
                base_path('public/css/custom.css'),
                base_path('public/css/bootstrap-datetimepicker.min.css'),
            ], 'js' => [
                base_path('public/js/scripts.min.js'),
                base_path('public/js/main.min.js'),
                base_path('public/js/bootstrap-datetimepicker.min.js'),
                base_path('public/js/custom.js'),
        ]];

        $minifier = ['css' => new Minify\CSS(), 'js' => new Minify\JS()];
        foreach ($files as $key => $values) {
            foreach ($values as $lib) {
                if (!file_exists($lib)) {
                    $this->error('File does not exist: ' . $lib);
                }

                $minifier[$key]->add($lib);
            }
        }

        $minifier['css']->minify(public_path("resources/libs/vendors/vendors.min.css"));
        $minifier['js']->minify(public_path("resources/libs/vendors/vendors.min.js"));
    }

}
