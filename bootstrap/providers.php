<?php

$providers = [
    App\Providers\AppServiceProvider::class,
    App\Providers\FortifyServiceProvider::class,
    App\Providers\JetstreamServiceProvider::class,
    Cog\Laravel\Ban\Providers\BanServiceProvider::class,
    Vinkas\Discourse\ServiceProvider::class,
    Vinkas\Cda\Server\CdaServiceProvider::class,
];

if (app()->isLocal()) {
    $providers[] = Laravel\Telescope\TelescopeServiceProvider::class;
    $providers[] = App\Providers\TelescopeServiceProvider::class;
}

return $providers;
