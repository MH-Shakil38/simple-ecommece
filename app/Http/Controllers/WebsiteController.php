<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Category;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class WebsiteController extends Controller
{
    public function category_ways_product($id)
    {
        if ($id == 0) {
            $data['products'] = Product::query()->paginate(16);
        } else {
            $data['products'] = Product::query()->where('category_id', $id)->paginate(16);
            $data['category'] = Category::query()->findOrFail($id);
        }

        return view('website.version1.category-product')->with($data);
    }

    public function all_hot_deal()
    {
        $data['products'] = Product::query()->where('status', 1)->where('show_hot_deal', 1)->paginate(35);
        $data['hotDeal'] = 'All Hot Deal';
        return view('website.pages.category')->with($data);
    }

    public function single_product($id)
    {
        $data['product'] = Product::query()->findOrFail($id);
        return view('website.' . session()->get('theme') . '.details')->with($data);
        return view('website.pages.single-product')->with($data);
    }

    public function about()
    {

        return view('website.pages.about-us');
    }
    public function return_policy()
    {
        return view('website.pages.return-policy');
    }
    public function delivery_policy()
    {
        return view('website.pages.delivery-policy');
    }


    public function contact()
    {
        return view('website.version1.contact');
    }

    public function contactStore(Request $request)
    {
        dd($request->all());
    }

    public function aboutUs()
    {
        return view('website.version1.about-us');
    }

    public function policy()
    {
        return view('website.version1.policy');
    }

    public function tearms()
    {
        return view('website.version1.tearms');
    }

    public function review(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'product_id' => 'required|integer|exists:products,id',  // Ensure product exists
            'name' => 'required|string|max:255',
            'details' => 'required|string',
        ]);

        // Create a new review in the database
        Review::query()->create([
            'product_id' => $validatedData['product_id'],
            'name' => $validatedData['name'],
            'details' => $validatedData['details'],
        ]);
        $product_id = $request->product_id;
        $html = view('website.version1.ajax.review',compact('product_id'))->render();

        // Return a JSON response for the Ajax request
        return response()->json([
            'message' => 'Review submitted successfully!',
            'review' =>  $html,
        ], 200);
    }

    public function blog(){
        $data['blogs'] = Blog::query()->latest()->get();
        $data['categories'] = BlogCategory::query()->get();
        $data['products'] = Product::query()->inRandomOrder()->take(5)->get();
        return view('website.version1.blog.all-blog')->with($data);
    }

    public function blogDetails($id){
        $data['blog'] = Blog::query()->findOrFail($id);
        $data['next'] = Blog::where('id', '>', $id)->orderBy('id', 'asc')->first();
        $data['prev'] = Blog::where('id', '<', $id)->orderBy('id', 'asc')->first();
        $data['categories'] = BlogCategory::query()->get();
        $data['products'] = Product::query()->inRandomOrder()->take(5)->get();
        return view('website.version1.blog.details')->with($data);
    }
}
