<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use SergiX44\Nutgram\Nutgram;
use Illuminate\Http\Request;

class WebhookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function webhook(Nutgram $bot, Request $request)
    {
        return response()->json($request->all());
    }

    /**
     * Display a listing of the resource.
     */
    public function info()
    {
        return response()->json(
            json_decode(file_get_contents(env('TG_API') . env('TELEGRAM_TOKEN') . '/getWebhookInfo'), FALSE)
        );
    }
}
