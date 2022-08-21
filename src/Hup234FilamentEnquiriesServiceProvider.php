<?php

namespace Hup234design\Hup234FilamentEnquiries;

use Filament\PluginServiceProvider;
use Hup234design\Hup234FilamentEnquiries\Commands\PublishCommand;
use Spatie\LaravelPackageTools\Package;

class Hup234FilamentEnquiriesServiceProvider extends PluginServiceProvider
{
    public static string $name = 'hup234-cms';

    public function configurePackage(Package $package): void
    {
        parent::configurePackage($package);
        $package
            ->hasConfigFile()
            ->hasMigrations(['create_enquiries_table'])
            ->hasRoute('web')
            ->hasCommand(PublishCommand::class)
            ->hasViews();
    }
}