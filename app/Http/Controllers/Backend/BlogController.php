<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogCategory; // Assuming you have a BlogCategory model
use App\Models\Blog; // Assuming you have a Blog model
class BlogController extends Controller
{
        public function blogCategory(Request $request, string $id = null)
    {
        $categories = BlogCategory::get()->all();
        if ($id) {
            $category = BlogCategory::findorFail($id);
        }
        else
        {
            $category = '';
        }
        if($request->isMethod('post'))
        {
            // dd($request->all());
            if(empty($category))
            {
                $category = new BlogCategory();
            }
            $category->title = $request->title;
            $category->slug = $request->slug;
            // $category->details = $request->details;
            $category->order = $request->order;
            $category->status = $request->status;
            // dd($attribute);

            if (!empty($id)) {
                $category->updated_by = auth()->user()->id;
                $category -> update();
                return redirect(route('blog-category'))->with('success','Update Success!!');
            } else {
                $category->user_id = auth()->user()->id;
                $category -> save();
                // dd($brand);
                return redirect(route('blog-category'))->with('success','Create Success!!');
            }
        }
        return view('backend.blog.category',compact('categories','category'));

    }

    public function index()
    {
        // Logic to display the list of blog posts
        $posts = Blog::all(); // Fetch all blog posts
        return view('backend.blog.post.index', compact('posts'));
    }
    public function create()
    {
        // Logic to show the form for creating a new blog post
        $categories = BlogCategory::where('status','Active')->get()->all(); // Fetch all blog categories
        return view('backend.blog.post.create')->with('categories', $categories);
    }
    public function store(Request $request)
    {
        // Logic to store a new blog post
        $post = new Blog();
        $post->title = $request->title;
        $post->sub_title = $request->sub_title;
        $post->slug = $request->slug;
        $post->Short_description = $request->Short_description;
        $post->description = $request->description;
        $post->order = $request->order;
        $post->status = $request->status;
        $post->meta_title = $request->meta_title;
        $post->meta_keywords = $request->meta_keywords;
        $post->meta_description = $request->meta_description;
        $post->views = $request->views;
        $post->photo_caption = $request->photo_caption;
        $post->user_id = auth()->user()->id; // Assuming you have user authentication
        $post->category_id = $request->category_id;
        $post->status = 'Active';

        // Handle file upload for the image
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images/blog'), $filename);
            $post->image = $filename; // Save the image path in the database
        }
        // Save other fields as necessary

        if ($post->save()) {
            return redirect()->route('blog.index')->with('success', 'Blog post created successfully.');
        } else {
            return redirect()->back()->with('error', 'Failed to create blog post.');
        }
    }
    public function updateBlogStatus(Request $request){
        if($request->ajax()){
            $data = $request->all();
            // echo "<pre>"; print_r($data);die;
            if ($data['status']== 'Active') {
                $status = 'Inactive';
            }
            else{
                $status = 'Active';
            }
            Blog::where('id',$data['blog_id'])->update(['status'=>$status]);
            return response()->json(['status'=>$status,'blog_id'=> $data['blog_id']]);
        }
    }
}
