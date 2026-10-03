<?php

namespace App\Http\Controllers;

use App\Services\WebsiteChat;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function __invoke(Request $request, WebsiteChat $chat): JsonResponse
    {
        $data = $request->validate(['message' => ['required', 'string', 'max:500']]);
        return response()->json($chat->answer($data['message']));
    }
}
