<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use RuntimeException;

class VendorProductService
{
    public function products(): array
    {
        if (! config('services.vendor.username') || ! config('services.vendor.password')) {
            throw new RuntimeException('Catalogue connection pending.');
        }

return Cache::remember('vendor-products', now()->addMinutes(2), fn () => collect(Http::acceptJson()->withBasicAuth(config('services.vendor.username'), config('services.vendor.password'))->timeout(20)->retry(2, 250)->get(config('services.vendor.url'))->throw()->json())->filter(fn ($p) => is_array($p))->map(fn ($p) => ['id' => (int) ($p['id'] ?? 0), 'name' => strip_tags((string) ($p['name'] ?? 'Corporate gift')), 'description' => strip_tags((string) ($p['description'] ?? $p['full_description'] ?? '')), 'quantity' => max(0, (int) ($p['stock_quantity'] ?? 0)), 'categories' => array_values(array_filter(array_map('strip_tags', (array) ($p['categories'] ?? [])))), 'image' => filter_var($p['images'][0] ?? null, FILTER_VALIDATE_URL) ?: null])->filter(fn ($p) => $p['id'] && $p['image'])->values()->all());
    }
}
