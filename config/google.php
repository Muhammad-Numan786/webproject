<?php

use Illuminate\Support\Facades\Facade;
return [



'client_id' => env('GOOGLE_CLIENT_ID', ''),
'client_secret' => env('GOOGLE_CLIENT_SECRET', ''),
'redirect_uri' => env('GOOGLE_REDIRECT', ''),
'scopes' => [\Google\Service\Sheets::DRIVE, \Google\Service\Sheets::SPREADSHEETS],
'access_type' => 'online',
'approval_prompt' => 'auto',  


'service' => [
    /*
    | Enable service account auth or not.
    */
    'enable' => env('GOOGLE_SERVICE_ENABLED', false),

    /*
     * Path to service account json file. You can also pass the credentials as an array
     * instead of a file path.
     */
    'file' => storage_path('credentials.json'),
],    

'config'=>[],

	];