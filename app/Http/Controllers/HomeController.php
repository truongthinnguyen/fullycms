<?php

namespace Fully\Http\Controllers;

use Fully\Repositories\Project\ProjectInterface;
use Fully\Repositories\Slider\SliderInterface;
use Fully\Repositories\Tag\TagInterface;
use Fully\Repositories\News\NewsInterface;
use Fully\Repositories\PhotoGallery\PhotoGalleryInterface;

use LaravelLocalization;

/**
 * Class HomeController.
 *
 * @author Sefa Karagöz <karagozsefa@gmail.com>
 */
class HomeController extends Controller
{
    protected $slider;
    protected $project;
    protected $tag;
    protected $news;
    protected $photos;

    public function __construct(SliderInterface $slider, ProjectInterface $project, TagInterface $tag, NewsInterface $news, PhotoGalleryInterface $photos)
    {
        $this->slider = $slider;
        $this->project = $project;
        $this->tag = $tag;
        $this->news = $news;
        $this->photos = $photos;
    }

    public function index()
    {
        $languages = LaravelLocalization::getSupportedLocales();

        $sliders = $this->slider->all();
        $projects = $this->project->all();
        $tags = $this->tag->all();
        $latestnews = $this->news->getLastNews(5);
        $latestprojects = $this->project->getLastProjects(2);
        $hotnews = $this->news->getHotNews(3);

        $firstHotNews = $hotnews->get(0);
        $secondHotNews = $hotnews->get(1);
        $thirdHotNews = $hotnews->get(2);

        $photoGallery = $this->photos->all()->take(3);

        return view('frontend/layout/dashboard', compact('sliders', 'projects', 'languages', 'tags', 'latestnews', 'latestprojects', 'firstHotNews', 'secondHotNews', 'thirdHotNews', 'photoGallery'));
    }
}
