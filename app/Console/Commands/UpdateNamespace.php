<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Finder\Finder;

class UpdateNamespace extends Command
{
    protected $signature = 'namespace:update';
    protected $description = 'Automatically updates namespaces based on folder structure';

    public function handle()
    {
        $baseDir = base_path('modules');
        $finder = new Finder();
        $finder->files()->in($baseDir)->name('*.php');

        foreach ($finder as $file) {
            $path = $file->getRealPath();
            $relativePath = str_replace(base_path(), '', $path);
            $namespace = str_replace(['/', '.php'], ['\\', ''], $relativePath);
            $namespace = preg_replace('/^modules\\\\/', 'Modules\\', $namespace);

            $contents = file_get_contents($path);
            $contents = preg_replace(
                '/^namespace .*;/m',
                "namespace {$namespace};",
                $contents
            );
            file_put_contents($path, $contents);
        }

        $this->info('Namespaces updated successfully!');
    }
}
