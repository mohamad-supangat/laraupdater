<?php

namespace pcinaglia\laraupdater\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;
use Symfony\Component\Console\Input\InputArgument;

class CommandUpdate extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'laraupdater:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update your application using laraupdater console command.';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        return 0;
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [];
    }
}
