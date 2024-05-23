<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Service;
use App\Models\Counter;
use App\Models\Testimonials;
use App\Models\Portfolio;
use App\Models\HeroItem;

class PortfolioController extends Controller
{
    public function index()
    {
        $services = Service::orderBy('created_at', 'ASC')->get();
        $counters = Counter::all();
        $heroItems = HeroItem::all();

        return view('portfolio.index', compact('services', 'counters', 'heroItems'));
    }
    

    public function about()
    {
        $services = Service::orderBy('created_at', 'ASC')->get();
        $testimonials = Testimonials::orderBy('created_at', 'ASC')->get();
        $counters = Counter::all();

        return view('portfolio.about', compact('services', 'testimonials', 'counters'));
    }

    public function portfolio()
    {
        $portfolios = Portfolio::orderBy('created_at', 'ASC')->get();
    
        return view('portfolio.portfolio', compact( 'portfolios'));
    }

    public function filter(Request $request)
    {
        $type = $request->input('type');
        $portfolios = Portfolio::orderBy('created_at', 'DESC');
    
        if (!empty($type)) {
            $portfolios = $this->applyTypeFilter($portfolios, $type);
        }
    
        $portfolios = $portfolios->latest()->paginate(10);
        return $this->renderPortfolioView($portfolios);
    }
    
    private function applyTypeFilter($portfolios, $type)
    {
        $query = $portfolios->where(function($query) use ($type) {
            if (!empty($type)) {
                $query->whereHas('types', function($query) use ($type) {
                    $query->whereIn('name', explode(',', $type));
                });
            }
        });
    
        return $query->paginate(10);
    }
    
    private function renderPortfolioView($portfolios)
    {
        return view('portfolio.portfolio', [
            'portfolios' => $portfolios
        ]);
    }

    public function services()
    {
        $services = Service::orderBy('created_at', 'ASC')->get();
    
        return view('portfolio.services', compact( 'services'));
    }

    public function contact()
    {
    
        return view('portfolio.contact');
    }
    
}