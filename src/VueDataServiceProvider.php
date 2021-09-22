<?php

namespace Exolnet\VueData;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class VueDataServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(): void
    {
        Blade::directive('vue', function ($expression) {
            return "<?php \Exolnet\VueData\Facades\Vue::put($expression); ?>";
        });

        $this->loadViewsFrom($this->getProjectPath('resources/views'), 'vue-data');

        if ($this->app->runningInConsole()) {
            $this->offerPublishing();
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->singleton('vue', function () {
            return collect();
        });
    }

    /**
     * @return void
     */
    protected function offerPublishing(): void
    {
        $this->publishes([
            $this->getProjectPath('resources/views') => resource_path('views/vendor/vue-data'),
        ], 'vue-data-views');
    }

    /**
     * @param string $path
     * @return string
     */
    protected function getProjectPath(string $path): string
    {
        return __DIR__ . str_replace('/', DIRECTORY_SEPARATOR, '/../' . $path);
    }
}
