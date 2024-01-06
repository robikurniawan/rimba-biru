<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\CategoryInfo;
use App\Models\CategoryNews;
use App\Models\Faq;
use App\Models\News;
use App\Models\Service;
use App\Models\Project;
use App\Models\Partnert;
use App\Models\Team;
use App\Models\Info;
use App\Models\Slide;
use Illuminate\Http\Request;



class WebsiteController extends Controller {

    public function index() {

        $about = About::where('id','1')->first();
        $services = Service::all();
        $news = News::join('category_news', 'news.category_news_id', '=', 'category_news.id' )
        ->select('news.*', 'category_news.name')
        ->orderBy('news.id', 'DESC')
        ->limit(10)
        ->get();
        $projects = Project::orderBy('id','desc')->limit('8')->get();
        $category = CategoryInfo::all();
        $partnert = Partnert::all();
        $slides = Slide::orderBy('id','DESC')->get();


        return view('public.home',
            compact('about','services','news','projects', 'category', 'partnert','slides')
        );
    }


    public function whoWeAre()
    {
        $about = About::where('id', '1')->first();
        $teams = Team::all();
        return view(
            'public.about',
             compact('about','teams')
        );
    }


    public function teams()
    {
        $teams = Team::all();
        return view(
            'public.about.teams',
             compact('teams')
        );
    }

    public function teamById($id,$name)
    {
        $team = Team::where('id',dec($id))->first();
        return view(
            'public.about.team_detail',
             compact('team')
        );
    }


    public function whatWeDo()
    {
        $services = Service::all();
        return view(
            'public.services',
             compact('services')
        );
    }

    public function projects()
    {
        $projects = Project::join('partnerts', 'projects.partnert_id', '=', 'partnerts.id')
            ->select('projects.*','partnerts.name', 'partnerts.logo')
            ->orderBy('projects.id', 'DESC')
            ->paginate(8);

        return view(
            'public.projects',
             compact('projects')
        );
    }


    public function projectById($id)
    {
        $project = Project::join('partnerts', 'projects.partnert_id', '=', 'partnerts.id')
            ->select('projects.*','partnerts.name', 'partnerts.logo')
            ->where('projects.id',$id)
            ->first();


        $projects = Project::join('partnerts', 'projects.partnert_id', '=', 'partnerts.id')
            ->select('projects.*','partnerts.name', 'partnerts.logo')
            ->orderBy('projects.id', 'DESC')
            ->where('projects.id','!=',$id)
            ->get();


        return view(
            'public.project_detail',
             compact('project','projects')
        );
    }


    public function news()
    {
        
        $news = News::join('category_news', 'news.category_news_id', '=', 'category_news.id')
        
            ->select('news.*', 'category_news.name')
            ->orderBy('news.id', 'DESC')
            ->paginate(12);

        return view(
            'public.news',
             compact('news')
        );
    }


    public function newsDetail($id,$slug)
    {
        $news = News::join('category_news', 'news.category_news_id', '=', 'category_news.id')
            ->where('news.id', $id)
            ->select('news.*', 'category_news.name')
            ->first();


        $others = News::join('category_news', 'news.category_news_id', '=', 'category_news.id')
        
            ->select('news.*', 'category_news.name')
            ->orderBy('news.id', 'DESC')
            ->where('news.id','!=',$id)
            ->get();

        return view(
            'public.news_detail',
             compact('news','others')
        );
    }


    public function info($categoryId,$slug)
    {
        $category = CategoryInfo::find(dec($categoryId));
        $info = Info::join('category_infos','infos.category_info_id','=','category_infos.id')
            ->where('infos.category_info_id', dec($categoryId))
            ->select('infos.*', 'category_infos.name')
            ->orderBy('infos.id', 'DESC')
            ->get();

        return view(
            'public.knowledge',
             compact('info','category')
        );
    }

    public function contact()
    {
        $about = About::where('id', '1')->first();
        return view(
            'public.contact',
             compact('about')
        );
    }


    public function faq()
    {
        $faq = Faq::all();
        return view(
            'public.faq',
             compact('faq')
        );
    }








}
