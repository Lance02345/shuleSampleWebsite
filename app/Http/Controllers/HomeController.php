<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Teacher;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $news = News::all(); // Assuming you have a News model
        $teachers = Teacher::all();
        return view('admin.index', compact('news', 'teachers'));
    }

    public function uploadNewsArticle()
    {
        return view('admin.uploadNewsArticle');
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'title' => 'required|string|max:255',
                'content' => 'required|string',
                'date' => 'required|date',
                'required_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:20480',
                'optional_image1' => 'image|mimes:jpeg,png,jpg,gif|max:20480',
                'optional_image2' => 'image|mimes:jpeg,png,jpg,gif|max:20480',
            ]);

            $requiredImageName = time() . '_' . $request->file('required_image')->getClientOriginalName();
            $request->file('required_image')->move(public_path('images'), $requiredImageName);

            $optionalImage1Name = null;
            if ($request->hasFile('optional_image1')) {
                $optionalImage1Name = time() . '_' . $request->file('optional_image1')->getClientOriginalName();
                $request->file('optional_image1')->move(public_path('images'), $optionalImage1Name);
            }

            $optionalImage2Name = null;
            if ($request->hasFile('optional_image2')) {
                $optionalImage2Name = time() . '_' . $request->file('optional_image2')->getClientOriginalName();
                $request->file('optional_image2')->move(public_path('images'), $optionalImage2Name);
            }

            $news = News::create([
                'title' => $validatedData['title'],
                'content' => $validatedData['content'],
                'date' => $validatedData['date'],
                'required_image' => 'images/' . $requiredImageName,
                'optional_image1' => $optionalImage1Name ? 'images/' . $optionalImage1Name : null,
                'optional_image2' => $optionalImage2Name ? 'images/' . $optionalImage2Name : null,
            ]);

            return redirect()->route('home')->with('success', 'News article created successfully.');
        } catch (\Exception $e) {
            Log::error('Error occurred while storing news article: ' . $e->getMessage());
            return back()->withInput()->withErrors(['error' => 'Failed to store news article. Please try again.']);
        }
    }

    public function edit($id)
    {
        try {
            $news = News::findOrFail($id);
            return view('admin.edit', compact('news'));
        } catch (\Exception $e) {
            Log::error('Error occurred while editing news article: ' . $e->getMessage());
            return back()->withErrors(['error' => 'Failed to edit news article. Please try again.']);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $validatedData = $request->validate([
                'title' => 'required|string|max:255',
                'content' => 'required|string',
                'date' => 'required|date',
                'required_image' => 'image|mimes:jpeg,png,jpg,gif|max:20480',
                'optional_image1' => 'image|mimes:jpeg,png,jpg,gif|max:20480',
                'optional_image2' => 'image|mimes:jpeg,png,jpg,gif|max:20480',
            ]);

            if ($request->hasFile('required_image')) {
                $requiredImageName = time() . '_' . $request->file('required_image')->getClientOriginalName();
                $request->file('required_image')->move(public_path('images'), $requiredImageName);
            } else {
                $requiredImageName = null;
            }

            if ($request->hasFile('optional_image1')) {
                $optionalImage1Name = time() . '_' . $request->file('optional_image1')->getClientOriginalName();
                $request->file('optional_image1')->move(public_path('images'), $optionalImage1Name);
            } else {
                $optionalImage1Name = null;
            }

            if ($request->hasFile('optional_image2')) {
                $optionalImage2Name = time() . '_' . $request->file('optional_image2')->getClientOriginalName();
                $request->file('optional_image2')->move(public_path('images'), $optionalImage2Name);
            } else {
                $optionalImage2Name = null;
            }

            $news = News::findOrFail($id);
            $news->update([
                'title' => $validatedData['title'],
                'content' => $validatedData['content'],
                'date' => $validatedData['date'],
                'required_image' => $requiredImageName ? 'images/' . $requiredImageName : null,
                'optional_image1' => $optionalImage1Name ? 'images/' . $optionalImage1Name : null,
                'optional_image2' => $optionalImage2Name ? 'images/' . $optionalImage2Name : null,
            ]);

            return redirect()->route('home')->with('success', 'News article updated successfully.');
        } catch (\Exception $e) {
            Log::error('Error occurred while updating news article: ' . $e->getMessage());
            return back()->withErrors(['error' => 'Failed to update news article. Please try again.']);
        }
    }

    public function destroy($id)
    {
        try {
            $news = News::findOrFail($id);
            $news->delete();
            return redirect()->route('home')->with('success', 'News article deleted successfully.');
        } catch (\Exception $e) {
            Log::error('Error occurred while deleting news article: ' . $e->getMessage());
            return back()->withErrors(['error' => 'Failed to delete news article. Please try again.']);
        }
    }

    //teacher section
    public function teacherCreate()
    {
        return view('admin.uploadTeacher');
    }

    public function teacherStore(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'subject' => 'required',
            'avatar' => 'image|mimes:jpeg,png,jpg,gif|max:20480',
        ]);

        $teacher = new Teacher();
        $teacher->name = $request->input('name');
        $teacher->subject = $request->input('subject');

        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $avatarName = time() . '.' . $avatar->getClientOriginalExtension();
            $avatar->move(public_path('avatars'), $avatarName);
            $teacher->avatar = 'avatars/' . $avatarName;
        }

        $teacher->save();

        return redirect()->route('home')->with('success', 'Teacher added successfully!');
    }

    public function editTeacher($id)
    {
        try {
            $teacher = Teacher::findOrFail($id);
            return view('admin.editTeacher', compact('teacher'));
        } catch (\Exception $e) {
            Log::error('Error occurred while editing news article: ' . $e->getMessage());
            return back()->withErrors(['error' => 'Failed to edit news article. Please try again.']);
        }
    }

    public function updateTeacher(Request $request, $id)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'subject' => 'required|string|max:255',
                'avatar' => 'image|mimes:jpeg,png,jpg,gif|max:20480',
            ]);

            $teacher = Teacher::findOrFail($id);

            if ($request->hasFile('avatar')) {
                if ($teacher->avatar) {
                    $oldAvatarPath = public_path($teacher->avatar);
                    if (file_exists($oldAvatarPath)) {
                        unlink($oldAvatarPath);
                    }
                }

                $avatar = $request->file('avatar');
                $avatarName = time() . '.' . $avatar->getClientOriginalExtension();
                $avatar->move(public_path('avatars'), $avatarName);
                $teacher->avatar = 'avatars/' . $avatarName;
            }

            $teacher->name = $validatedData['name'];
            $teacher->subject = $validatedData['subject'];

            $teacher->save();

            return redirect()->route('home')->with('success', 'Teacher updated successfully.');
        } catch (\Exception $e) {
            \Log::error('Error occurred while updating teacher: ' . $e->getMessage());
            return back()->withErrors(['error' => 'Failed to update teacher. Please try again.']);
        }
    }

    public function destroyTeacher($id)
    {
        try {
            $teacher = Teacher::findOrFail($id);
            $teacher->delete();
            return redirect()->route('home')->with('success', 'Teacher deleted successfully.');
        } catch (\Exception $e) {
            Log::error('Error occurred while deleting teacher: ' . $e->getMessage());
            return back()->withErrors(['error' => 'Failed to delete teacher. Please try again.']);
        }
    }
}
