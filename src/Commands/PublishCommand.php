<?php

namespace Hup234design\Hup234FilamentEnquiries\Commands;

use Illuminate\Console\Command;

class PublishCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hup234-filament-enquiries:publish {--force : Overwrite any existing files}';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'PublishCommand all HUP234 Filament Enquiries components and resources';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        // publish Filament Enquiries files
        $this->callSilent('vendor:publish', ['--tag' => 'hup234-filament-enquiries-config', '--force' => $this->option('force') ?? false]);
        $this->callSilent('vendor:publish', ['--tag' => 'hup234-filament-enquiries-migrations', '--force' => $this->option('force') ?? false]);
        $this->callSilent('vendor:publish', ['--tag' => 'hup234-filament-enquiries-views', '--force' => $this->option('force') ?? false]);

        //$this->callSilent('vendor:publish', ['--tag' => 'hup234-cms-translations', '--force' => $this->option('force') ?? false]);
        //$this->callSilent('vendor:publish', ['--tag' => 'hup234-cms-seeder', '--force' => $this->option('force') ?? false]);
        //$this->callSilent('vendor:publish', ['--tag' => 'hup234-cms-factories', '--force' => $this->option('force') ?? false]);

        $this->output->success('HUP234 Filament Enquiries has been Published successfully');
    }
}