<?php

namespace Fully\Http\Controllers;

use Fully\Repositories\Project\ProjectInterface;
use Fully\Repositories\News\NewsInterface;

/**
 * Class ProjectController.
 *
 * @author Sefa Karagöz <karagozsefa@gmail.com>
 */
class ProjectController extends Controller
{
    protected $project;

    protected $news;

    /**
     * @param ProjectInterface $project
     */
    public function __construct(ProjectInterface $project, NewsInterface $news)
    {
        $this->project = $project;
        $this->news = $news;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = $this->project->all();
        $latestnews = $this->news->getLastNews(5);

        return view('frontend.project.index', compact('projects', 'latestnews'));
    }

    /**
     * Display page.
     *
     * @param $slug
     *
     * @return \Illuminate\View\View
     */
    public function show($slug)
    {
        $project = $this->project->getBySlug($slug);

        if ($project == null) {
            return Response::view('errors.missing', array(), 404);
        }
        $latestnews = $this->news->getLastNews(5);

        return view('frontend.project.show', compact('project', 'latestnews'));
    }
}
