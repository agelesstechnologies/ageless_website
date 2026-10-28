<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class AdminProjectController extends Controller
{
    use \App\Http\Controllers\Concerns\HandlesGallery;

    public function index()
    {
        $projects = Project::orderBy('sort_order')->orderByDesc('id')->paginate(10);

        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(Request $request)
    {
        Project::create($this->validatedData($request));

        return redirect()->route('admin.projects.index')->with('success', 'Project added successfully.');
    }

    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $project->update($this->validatedData($request, $project));

        return redirect()->route('admin.projects.index')->with('success', 'Project updated successfully.');
    }

    private function validatedData(Request $request, ?Project $record = null): array
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'category_key' => 'required|in:theme,adventure,cinema,indoor',
            'category' => 'nullable|string|max:255',
            'image' => 'nullable|image|max:4096',
            'short_description' => 'nullable|string',
            'description' => 'nullable|string',
            'sort_order' => 'required|integer|min:0',
            'status' => 'required|boolean',
            'location' => 'nullable|string|max:255',
            'year' => 'nullable|digits:4',
            'capacity' => 'nullable|string|max:255',
            'scope' => 'nullable|string',
            'specifications' => 'nullable|string',
        ] + self::GALLERY_RULES);
        // Keep published URLs stable when the name changes.
        if (! $record) {
            $base = Str::slug($data['title']) ?: 'project';
            $slug = $base;
            for ($suffix = 2; Project::where('slug', $slug)->exists(); $suffix++) {
                $slug = $base.'-'.$suffix;
            }
            $data['slug'] = $slug;
        }
        unset($data['image'], $data['gallery_files'], $data['remove_gallery']);
        $data['gallery'] = $this->galleryFromRequest($request, 'projects', $record?->gallery);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->hashName();
            $path = public_path('storage/projects');
            File::ensureDirectoryExists($path);
            $file->move($path, $filename);
            @chmod($path.DIRECTORY_SEPARATOR.$filename, 0644);
            $data['image'] = 'projects/'.$filename;
        }

        return $data;
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('admin.projects.index')->with('success', 'Project deleted successfully.');
    }
}
