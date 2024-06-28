<?php

namespace SocialiteProviders\Ebay;

use SocialiteProviders\Manager\SocialiteWasCalled;

class EbayExtendSocialite
{
    public function handle(SocialiteWasCalled $socialiteWasCalled): void
    {
        $socialiteWasCalled->extendSocialite('ebay', Provider::class);
    }
}
