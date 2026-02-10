<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use App\Models\ProjectCategory;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index(): Response
    {
        $today = now()->toDateString();
        $urls = [
            ['loc' => url('/'), 'lastmod' => $today, 'priority' => '1.0', 'changefreq' => 'weekly'],
            ['loc' => route('about.index'), 'lastmod' => $today, 'priority' => '0.8', 'changefreq' => 'monthly'],
            ['loc' => route('services.index'), 'lastmod' => $today, 'priority' => '0.8', 'changefreq' => 'monthly'],
            ['loc' => route('projects.index'), 'lastmod' => $today, 'priority' => '0.8', 'changefreq' => 'weekly'],
            ['loc' => route('products.index'), 'lastmod' => $today, 'priority' => '0.8', 'changefreq' => 'weekly'],
            ['loc' => route('contact.index'), 'lastmod' => $today, 'priority' => '0.7', 'changefreq' => 'monthly'],
        ];

        $productCategories = ProductCategory::query()->select(['slug', 'updated_at'])->get();
        foreach ($productCategories as $category) {
            $urls[] = [
                'loc' => route('product-categories.show', ['product_category' => $category->slug]),
                'lastmod' => optional($category->updated_at)->toDateString(),
                'priority' => '0.6',
                'changefreq' => 'monthly',
            ];
        }

        $projectCategories = ProjectCategory::query()->select(['slug', 'updated_at'])->get();
        foreach ($projectCategories as $category) {
            $urls[] = [
                'loc' => route('project-categories.show', ['project_category' => $category->slug]),
                'lastmod' => optional($category->updated_at)->toDateString(),
                'priority' => '0.6',
                'changefreq' => 'monthly',
            ];
        }

        $xml = $this->buildXml($urls);

        $lastModified = collect([
            ProductCategory::query()->max('updated_at'),
            ProjectCategory::query()->max('updated_at'),
        ])->filter()->map(function ($value) {
            return \Illuminate\Support\Carbon::parse($value);
        })->max() ?? now();

        $response = response($xml, 200)->header('Content-Type', 'application/xml');
        $response->headers->set('Cache-Control', 'public, max-age=3600');
        $response->setEtag('"' . sha1($xml) . '"');
        $response->setLastModified($lastModified);

        return $response;
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
            if (!empty($url['changefreq'])) {
                $lines[] = '    <changefreq>' . $url['changefreq'] . '</changefreq>';
            }
            $lines[] = '  </url>';
        }

        $lines[] = '</urlset>';

        return implode("\n", $lines);
    }
}
