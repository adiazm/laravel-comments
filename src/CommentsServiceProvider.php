<?php

namespace Admsys\Comments;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class CommentsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-comments')
            ->hasConfigFile()
            // ->hasViews()
            ->hasMigration('create_comments_table');
        // ->hasCommand(CommentsCommand::class)
    }
}
