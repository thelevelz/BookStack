<?php

use BookStack\Facades\Theme;
use BookStack\Theming\ThemeEvents;
use SocialiteProviders\Azure\AzureExtendSocialite;
use SocialiteProviders\Manager\SocialiteWasCalled;
use SocialiteProviders\Azure\Provider;

class AzureLevelZExtendSocialite
{
    /**
     * Register the provider.
     *
     * @param SocialiteWasCalled $socialiteWasCalled
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('azure_lvlz', Provider::class);
    }
}


// Adds a `/info` public URL endpoint that emits php debug details
Theme::listen(ThemeEvents::APP_BOOT, function() {

    // Update current driver name
    Theme::addSocialDriver('azure', [
        'name' => 'Microsoft Azure (Skiplino)',
        'client_id'     => env('AZURE_APP_ID', false),
        'client_secret' => env('AZURE_APP_SECRET', false),
        'tenant'        => env('AZURE_TENANT', false),
        'redirect'      => env('APP_URL') . '/login/service/azure/callback',
        'auto_register' => env('AZURE_AUTO_REGISTER', false),
        'auto_confirm'  => env('AZURE_AUTO_CONFIRM_EMAIL', false),
    ], AzureExtendSocialite::class.'@handle');

    // Add new driver for Level Z
    Theme::addSocialDriver('azure_lvlz', [
        'name' => 'Microsoft Azure (Level Z)',
        'client_id'     => env('AZURE_LVLZ_APP_ID', false),
        'client_secret' => env('AZURE_LVLZ_APP_SECRET', false),
        'tenant'        => env('AZURE_LVLZ_TENANT', false),
        'redirect'      => env('APP_URL') . '/login/service/azure_lvlz/callback',
        'auto_register' => env('AZURE_LVLZ_AUTO_REGISTER', false),
        'auto_confirm'  => env('AZURE_LVLZ_AUTO_CONFIRM_EMAIL', false),
    ], AzureLevelZExtendSocialite::class.'@handle');
});