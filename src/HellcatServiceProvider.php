<?php
/**
 * Contains the HellcatServiceProvider class.
 *
 * @package Hellcat
 * @author  K. McCormick <kyliemccormick@gmail.com>
 */
namespace Hellcat;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Log;

/**
 * HellcatServiceProvider.
 *
 * @see https://laravel.com/docs/5.6/providers Service Providers
 */
class HellcatServiceProvider extends ServiceProvider
{
    /** @var string $sourceDir          The package's source code directory. */
    private $sourceDir = __DIR__;

    /**
     * Bootstrap services for Hellcat.
     */
    public function boot()
    {
        //
    }

    /**
     * Register services for Hellcat.
     */
    public function register()
    {
        //
    }

    /**
     * Given the relative path, return the full source code path.
     *
     * @param  array  $relpath
     * @return string
     */
    public function getSourcePath($relpath)
    {
        array_unshift($relpath, $this->sourceDir);
        return join(\DIRECTORY_SEPARATOR, $relpath);
    }
}
