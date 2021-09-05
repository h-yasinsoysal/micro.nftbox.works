<?php return array (
  'debug' => false,
  'url' => 'https://micro.nftbox.works/',
  'timezone' => 'UTC',
  'locale' => 'tr_TR',
  'fallback_locale' => 'en',
  'key' => 'base64:d1RrZlY3SWF2SHN3bEpORDBjZHRYY0J6ZGpWWE9HODU=',
  'cipher' => 'AES-256-CBC',
  'log' => 'daily',
  'providers' => 
  array (
    0 => 'MicroweberPackages\\App\\Providers\\AppServiceProvider',
    1 => 'MicroweberPackages\\App\\Providers\\EventServiceProvider',
    2 => 'MicroweberPackages\\App\\Providers\\RouteServiceProvider',
  ),
  'manifest' => storage_path().DIRECTORY_SEPARATOR.'framework',
);