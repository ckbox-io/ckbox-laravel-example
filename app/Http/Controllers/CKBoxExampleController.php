<?php

namespace App\Http\Controllers;

use \Firebase\JWT\JWT;
use Illuminate\Http\Response;
use Illuminate\View\View;

class CKBoxExampleController extends Controller
{
    /**
     * Show the CKBox example.
     */
    public function show(string $example = null): View
    {
        if (in_array($example, ['ckeditor', 'modal', 'full-page'])) {
            return view('ckbox-example-' . $example);
        }

        return view('ckbox-example-list');
    }

    /**
     * Create CKBox JWT token.
     */
    public function token(): Response
    {
        $environmentId = env('CKBOX_ENVIRONMENT_ID');
        $accessKey = env('CKBOX_ACCESS_KEY');

        $payload = [
            'aud' => $environmentId,
            'iat' => time(),
            'sub' => 'unique-user-id', // Unique user ID in your application
            'auth' => [
                'ckbox' => [
                    'role' => 'superadmin',
                ]
            ]
        ];

        $jwtToken = JWT::encode($payload, $accessKey, 'HS256');

        return new Response($jwtToken);
    }
}
