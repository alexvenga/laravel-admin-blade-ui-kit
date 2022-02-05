<?php

namespace AlexVenga\LaravelAdminBladeUIKit;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelAdminBladeUIKitServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-admin-blade-ui-kit')
            ->hasConfigFile()
            ->hasViews();
            //->hasCommand(LaravelAdminBladeUIKitCommand::class);
    }
}
