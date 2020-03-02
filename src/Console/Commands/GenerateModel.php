<?php

namespace Cris\Modelhelpers\Console\Commands;

use Illuminate\Console\Command;

class GenerateModel extends Command
{

    protected $signature = "create:model {name} {traits}";

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $params = explode(",", $this->argument('traits'));
    }
}
