<?php

use Contao\System;
use Symfony\Component\HttpFoundation\Request;

$scopeMatcher = System::getContainer()->get('contao.routing.scope_matcher');
$currentRequest = System::getContainer()->get('request_stack')->getCurrentRequest() ?? Request::create('');
$isBackendRequest = $scopeMatcher->isBackendRequest($currentRequest);

if ($isBackendRequest) {
    $GLOBALS['TL_CSS'][] = 'bundles/forceyoutubenocookie/backend.js|static';
}
