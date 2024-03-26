<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $news = News::all(); // Assuming you have a News model
        return view('admin.index', compact('news'));
    }
    public function uploadNewsArticle()
    {
        return view('admin.uploadNewsArticle');
    }
    public function store(Request $request)
{
    try {
        // Validate incoming request data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'date' => 'required|date',
            'required_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:20480', // Assuming max size is 2MB
            'optional_image1' => 'image|mimes:jpeg,png,jpg,gif|max:20480',
            'optional_image2' => 'image|mimes:jpeg,png,jpg,gif|max:20480',
        ]);
        
        // Handle file upload for the required image
        $requiredImageName = time() . '_' . $request->file('required_image')->getClientOriginalName();
        $request->file('required_image')->move(public_path('images'), $requiredImageName);
        
        // Handle file upload for optional image 1
        $optionalImage1Name = null;
        if ($request->hasFile('optional_image1')) {
            $optionalImage1Name = time() . '_' . $request->file('optional_image1')->getClientOriginalName();
            $request->file('optional_image1')->move(public_path('images'), $optionalImage1Name);
        }
        
        // Handle file upload for optional image 2
        $optionalImage2Name = null;
        if ($request->hasFile('optional_image2')) {
            $optionalImage2Name = time() . '_' . $request->file('optional_image2')->getClientOriginalName();
            $request->file('optional_image2')->move(public_path('images'), $optionalImage2Name);
        }
        
        // Create a new news article
        $news = News::create([
            'title' => $validatedData['title'],
            'content' => $validatedData['content'],
            'date' => $validatedData['date'],
            'required_image' => 'images/' . $requiredImageName,
            'optional_image1' => $optionalImage1Name ? 'images/' . $optionalImage1Name : null,
            'optional_image2' => $optionalImage2Name ? 'images/' . $optionalImage2Name : null,
        ]);
        
        // Other actions after creating the news article
        
        return redirect()->route('home')->with('success', 'News article created successfully.');
        
    } catch (\Exception $e) {
        // Log the error
        Log::error('Error occurred while storing news article: ' . $e->getMessage());
        
        // Redirect back with error message
        return back()->withInput()->withErrors(['error' => 'Failed to store news article. Please try again.']);
    }
}
public function edit($id)
{
    try {
        // Find the news article by ID
        $news = News::findOrFail($id);

        return view('admin.edit', compact('news'));
    } catch (\Exception $e) {
        // Log the error
        Log::error('Error occurred while editing news article: ' . $e->getMessage());

        // Redirect back with error message
        return back()->withErrors(['error' => 'Failed to edit news article. Please try again.']);
    }
}

public function update(Request $request, $id)
{
    try {
        // Validate incoming request data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'date' => 'required|date',
            'required_image' => 'image|mimes:jpeg,png,jpg,gif|max:20480', // Assuming max size is 2MB
            'optional_image1' => 'image|mimes:jpeg,png,jpg,gif|max:20480',
            'optional_image2' => 'image|mimes:jpeg,png,jpg,gif|max:20480',
        ]);

        // Handle file upload for the required image
        if ($request->hasFile('required_image')) {
            $requiredImageName = time() . '_' . $request->file('required_image')->getClientOriginalName();
            $request->file('required_image')->move(public_path('images'), $requiredImageName);
        } else {
            $requiredImageName = null;
        }
        
        // Handle file upload for optional image 1
        if ($request->hasFile('optional_image1')) {
            $optionalImage1Name = time() . '_' . $request->file('optional_image1')->getClientOriginalName();
            $request->file('optional_image1')->move(public_path('images'), $optionalImage1Name);
        } else {
            $optionalImage1Name = null;
        }
        
        // Handle file upload for optional image 2
        if ($request->hasFile('optional_image2')) {
            $optionalImage2Name = time() . '_' . $request->file('optional_image2')->getClientOriginalName();
            $request->file('optional_image2')->move(public_path('images'), $optionalImage2Name);
        } else {
            $optionalImage2Name = null;
        }

        // Find the news article by ID
        $news = News::findOrFail($id);

        // Update the news article
        $news->update([
            'title' => $validatedData['title'],
            'content' => $validatedData['content'],
            'date' => $validatedData['date'],
            'required_image' => $requiredImageName ? 'images/' . $requiredImageName : null,
            'optional_image1' => $optionalImage1Name ? 'images/' . $optionalImage1Name : null,
            'optional_image2' => $optionalImage2Name ? 'images/' . $optionalImage2Name : null,
        ]);
        
        // Other actions after updating the news article

        return redirect()->route('home')->with('success', 'News article updated successfully.');
    } catch (\Exception $e) {
        // Log the error
        Log::error('Error occurred while updating news article: ' . $e->getMessage());

        // Redirect back with error message
        return back()->withErrors(['error' => 'Failed to update news article. Please try again.']);
    }
}

public function destroy($id)
{
    try {
        // Find the news article by ID
        $news = News::findOrFail($id);

        // Delete the news article
        $news->delete();

        return redirect()->route('home')->with('success', 'News article deleted successfully.');
    } catch (\Exception $e) {
        // Log the error
        Log::error('Error occurred while deleting news article: ' . $e->getMessage());

        // Redirect back with error message
        return back()->withErrors(['error' => 'Failed to delete news article. Please try again.']);
    }
}


}