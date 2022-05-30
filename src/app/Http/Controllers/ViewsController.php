<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\News;
use App\Models\Project;
use App\Models\SiteConfig;
use GrahamCampbell\Markdown\Facades\Markdown;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class ViewsController extends Controller
{
    public function index()
    {
        $site_data = SiteConfig::all();

        return view('index', ['site_data' => $site_data[0]]);
    }
    public function about_us()
    {
        $site_data = SiteConfig::all();

        return view('aboutUs', ['site_data' => $site_data[0]]);
    }

    public function posts_view()
    {
        $route_name = Route::currentRouteName();
        $posts = $this->data_models($route_name);
        return view('posts', [
            'route_name' => $route_name,
            'posts' => $posts
        ]);
    }

    public function post_see_view($post_id)
    {
        $route_name = Route::currentRouteName();
        $post = $this->data_models(substr($route_name, 0, -4), $post_id)[0];
        $post->content = Markdown::convertToHtml($post->content);

        return view('post', [
            'data' => $post,
            'base_url' => substr($route_name, 0, -4)
        ]);
    }

    private function data_models($model, $id = null)
    {
        if ($id != null) {
            switch ($model) {
            case 'News':
                return News::where('id', $id)->get();
                break;
            
            case 'Project':
                return Project::where('id', $id)->get();
                break;

            case 'Event':
                return Event::where('id', $id)->get();
                break;
            }

          return 'No se encontro el modelo';
        }

        switch ($model) {
            case 'News':
                return News::where('status', 'published')->orderBy('created_at', 'DESC')->get();
                break;
            
            case 'Project':
                return Project::where('status', 'published')->orderBy('created_at', 'DESC')->get();
                break;

            case 'Event':
                return Event::where('status', 'published')->orderBy('created_at', 'DESC')->get();
                break;
        }
        return 'No se encontro el modelo';
    }
}
