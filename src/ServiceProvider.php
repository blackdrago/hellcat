<?php
/**
 * Contains the HellcatServiceProvider class.
 *
 * @package Hellcat
 * @author  K. McCormick <kyliemccormick@gmail.com>
 */
namespace Hellcat;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Illuminate\Support\Facades\Log;

/**
 * The ServiceProvider for the Hellcat package.
 *
 * @see https://laravel.com/docs/5.6/providers Service Providers
 */
class ServiceProvider extends BaseServiceProvider
{
    /** @var string $sourceDir          The package's source code directory. */
    private $sourceDir = __DIR__;

    /**
     * Bootstrap services for Hellcat.
     */
    public function boot()
    {
        // various file paths
        $configPath = $this->getSourcePath(['config', 'hellcat.php']);
        $dataPath   = $this->getSourcePath(['database', 'migrations']);
        $langPath   = $this->getSourcePath(['resources', 'lang']);
        $viewPath   = $this->getSourcePath(['resources', 'views']);
        $publicPath = $this->getSourcePath(['public']);

        // database migrations, language strings, and views
        //$this->loadMigrationsFrom($dataPath);
        $this->loadTranslationsFrom($langPath, 'hellcat');
        $this->loadViewsFrom($viewPath, 'hellcat');

        // publishing values for customization
        $this->publishes([
            $langPath   => resource_path('lang/vendor/hellcat'),
            $viewPath   => resource_path('views/vendor/hellcat'),
            $publicPath => public_path('vendor/hellcat'),
        ], 'public');
        $this->publishes([
            $configPath => config_path('hellcat.php')
        ], 'config');
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
