<?php

namespace App\Http\Controllers;


use Carbon\Carbon;

use App\Models\Category;
use Spatie\Sitemap\Sitemap;

use Illuminate\Http\Request;
use Spatie\Sitemap\Tags\Url;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\News;
use Illuminate\Support\Facades\File;

class SEOController extends Controller
{
    public function sitemap()
    {
        $category    = Category::select('slugs','name')->get();
        $blog      = Blog::select('slugs')->get();
        $news       = News::select('slugs')->get();

        $sitemap = Sitemap::create();
        $sitemap->add(Url::create('/')
            ->setLastModificationDate(Carbon::now())
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
            ->setPriority(0.1))
            ->add(Url::create('/about')
                ->setLastModificationDate(Carbon::now())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                ->setPriority(0.1))
            ->add(Url::create('/contact')
                ->setLastModificationDate(Carbon::now())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                ->setPriority(0.1))
            ->add(Url::create('/privacypolicy')
                ->setLastModificationDate(Carbon::now())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                ->setPriority(0.1));

        //Dynamic category
        foreach ($category as $cat) {
            $sitemap->add(Url::create('/category/'. $cat->name.'/blogs/'. $cat->slugs)
                ->setLastModificationDate(Carbon::now())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                ->setPriority(0.1));
        }
        //Dynamic Service
        foreach ($blog as $data) {
            $sitemap->add(Url::create('/readblog' . '/' . $data->slugs)
                ->setLastModificationDate(Carbon::now())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                ->setPriority(0.1));
        }
        foreach ($news as $data) {
            $sitemap->add(Url::create('/news/readnews' . '/' . $data->slugs)
                ->setLastModificationDate(Carbon::now())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                ->setPriority(0.1));
        }


        $sitemap->writeToFile(public_path('sitemap.xml'));

        File::copy(public_path('sitemap.xml'), base_path('sitemap.xml'));

        return response()->download(public_path('sitemap.xml'), 'sitemap.xml');
    }
}
