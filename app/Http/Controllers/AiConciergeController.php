<?php

namespace App\Http\Controllers;

use App\Services\VendorProductService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Throwable;

class AiConciergeController extends Controller
{
    public function __invoke(Request $request, VendorProductService $products)
    {
        $data = $request->validate(['need' => ['required', 'string', 'min:10', 'max:1500']]);
        if (! config('services.gemini.key')) {
            return response()->json(['message' => 'Our AI concierge is being connected. Please email sales2@mugdiinvestments.com and our team will help right away.'], 503);
        }try {
            $catalogue = collect($products->products())->take(120)->map(fn ($p) => "{$p['name']} (available: {$p['quantity']}): {$p['description']}")->implode("\n");
            $prompt = "You are Mugdi Investments LLC's concise business needs assistant in Oman. Qualify needs for corporate gifts, event management, or full-stack IT. Never promise price, delivery, stock reservation, or technical scope. Ask at most two useful questions, then recommend next steps. For gifts only mention catalogue products and say stock is subject to confirmation.\nCatalogue:\n{$catalogue}\nClient request:\n{$data['need']}";
            $url = 'https://generativelanguage.googleapis.com/v1beta/models/'.rawurlencode(config('services.gemini.model')).':generateContent';
            $r = Http::timeout(30)->post($url.'?key='.config('services.gemini.key'), ['contents' => [['parts' => [['text' => $prompt]]]], 'generationConfig' => ['temperature' => .35, 'maxOutputTokens' => 500]])->throw();
            $answer = data_get($r->json(), 'candidates.0.content.parts.0.text');
            abort_unless(is_string($answer) && $answer !== '', 502);

            return response()->json(['message' => $answer]);
        } catch (Throwable $e) {
            report($e);

            return response()->json(['message' => 'I could not complete that request just now. Please email sales2@mugdiinvestments.com for personal assistance.'], 503);
        }
    }
}
