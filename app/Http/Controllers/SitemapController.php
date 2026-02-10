<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use App\Models\ProjectCategory;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index(): Response
    {
        $urls = [
            ['loc' => url('/'), 'lastmod' => now()->toDateString(), 'priority' => '1.0'],
            ['loc' => route('about.index'), 'lastmod' => now()->toDateString(), 'priority' => '0.8'],
            ['loc' => route('services.index'), 'lastmod' => now()->toDateString(), 'priority' => '0.8'],
            ['loc' => route('projects.index'), 'lastmod' => now()->toDateString(), 'priority' => '0.8'],
            ['loc' => route('products.index'), 'lastmod' => now()->toDateString(), 'priority' => '0.8'],
            ['loc' => route('contact.index'), 'lastmod' => now()->toDateString(), 'priority' => '0.7'],
        ];

        $productCategories = ProductCategory::query()->select(['slug', 'updated_at'])->get();
        foreach ($productCategories as $category) {
            $urls[] = [
                'loc' => route('product-categories.show', ['product_category' => $category->slug]),
                'lastmod' => optional($category->updated_at)->toDateString(),
                'priority' => '0.6',
            ];
        }

        $projectCategories = ProjectCategory::query()->select(['slug', 'updated_at'])->get();
        foreach ($projectCategories as $category) {
            $urls[] = [
                'loc' => route('project-categories.show', ['project_category' => $category->slug]),
                'lastmod' => optional($category->updated_at)->toDateString(),
                'priority' => '0.6',
            ];
        }

        $xml = $this->buildXml($urls);

        return response($xml, 200)->header('Content-Type', 'application/xml');
    }

    private function buildXml(array $urls): string
    {
        $lines = [
            '<?xml version="1.0" encoding="UTF-8"?>',
            '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">',
        ];

        foreach ($urls as $url) {
            $loc = htmlspecialchars($url['loc'], ENT_XML1);
            $lines[] = '  <url>';
            $lines[] = '    <loc>' . $loc . '</loc>';
            if (!empty($url['lastmod'])) {
                $lines[] = '    <lastmod>' . $url['lastmod'] . '</lastmod>';
            }
            if (!empty($url['priority'])) {
                $lines[] = '    <priority>' . $url['priority'] . '</priority>';
            }
            $lines[] = '  </url>';
        }

        $lines[] = '</urlset>';

        return implode("\n", $lines);
    }
}
