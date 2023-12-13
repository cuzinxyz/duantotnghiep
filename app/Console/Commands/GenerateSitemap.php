<?php

namespace App\Console\Commands;

use App\Models\Car;
use App\Models\News;
use App\Models\Brand;
use App\Models\Salon;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Illuminate\Console\Command;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:sitemap';
    protected $description = 'Generate sitemap for the website';


    /**
     * Execute the console command.
     */
    public function handle()
    {
        $sitemap = Sitemap::create()
            ->add(Url::create('/'))
            ->add(Url::create('/oto'))
            ->add(Url::create('/tin-mua-xe'))
            ->add(Url::create('/login'))
            ->add(Url::create('/register'))
            ->add(Url::create('/password/reset'));

        Car::all()->each(function (Car $item) use ($sitemap) {
            $sitemap->add(Url::create("/oto/{$item->slug}"));
        });

        Brand::all()->each(function (Brand $item) use ($sitemap) {
            $sitemap->add(Url::create("/hang-xe/{$item->brand_name}"));
        });

        Salon::all()->each(function (Salon $item) use ($sitemap) {
            $sitemap->add(Url::create("/salon/{$item->slug}"));
        });

        News::all()->each(function (News $item) use ($sitemap) {
            $sitemap->add(Url::create("/bai-viet/{$item->slug}"));
        });

        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Generate sitemap successfully!');
    }
}
