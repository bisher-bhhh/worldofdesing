<?php

namespace App\Http\Controllers;

use App\Language;
use App\Works;
use App\WorksCategory;
use App\Images;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class WorksController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $all_works = Works::all()->groupBy('lang');
        $work_category = WorksCategory::where(['status'=> 'publish','lang' => 'en'])->get();
        $all_language = Language::all();
        return view('backend.pages.works.index')->with(['all_works' => $all_works, 'works_category' => $work_category,'all_language' => $all_language]);
    }

    public function store(Request $request)
    {
        // Validate the request
        $this->validate($request, [
            'title' => 'required|string|max:191',
            'start_date' => 'nullable|string|max:191',
            'end_date' => 'nullable|string|max:191',
            'lang' => 'nullable|string|max:191',
            'location' => 'nullable|string',
            'clients' => 'nullable|string',
            'description' => 'required|string',
            'categories_id' => 'required',
            'images.*' => 'mimes:jpg,jpeg,png', // validate multiple images
        ]);

        // Use a transaction to ensure consistency
        DB::beginTransaction();

        try {
            // Create the work entry
            $work = Works::create([
                'title' => $request->title,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'location' => $request->location,
                'lang' => $request->lang,
                'clients' => $request->clients,
                'description' => $request->description,
                'categories_id' => serialize($request->categories_id),
            ]);
            $id= $work->id;
            if ($request->hasFile('image')) {
                $image_extenstion = $request->image->getClientOriginalExtension();
                $image_grid = 'work-grid-' . $id . '.' . $image_extenstion;
                $image_large = 'work-large-' . $id . '.' . $image_extenstion;
                if (check_image_extension($request->image)) {
                    $folder_path = 'assets/uploads/works/';
                    $resize_grid_image = Image::make($request->image)->resize(1170, 1170);
                    $resize_large_image = Image::make($request->image)->resize(1170, 1170);
                    $resize_grid_image->save($folder_path . $image_grid);
                    $resize_large_image->save($folder_path . $image_large);
                    Works::where('id', $id)->update(['image' => $image_extenstion]);
                }
            }
            // Handle image uploads
            if ($request->hasFile('images')) {
                $projectFolder = 'assets/uploads/works/' . $work->id;

                // Create the folder if it doesn't exist
                File::ensureDirectoryExists($projectFolder, 0755, true);

                $imagesData = [];

                foreach ($request->file('images') as $index => $image) {
                    $image_extension = $image->getClientOriginalExtension();
                    $image_name = 'work-' . $work->id . '-' . time() . '-' . $index . '.' . $image_extension;
                    $image_path = $projectFolder . '/' . $image_name;

                    // Resize image
                    $resizedImage = Image::make($image)
                        ->resize(800, 600, function ($constraint) {
                            $constraint->aspectRatio();
                            $constraint->upsize();
                        });

                    // Save the resized image
                    $resizedImage->save($image_path, 80); // Reduce quality to save space and time

                    // Prepare image data for batch insert
                    $imagesData[] = [
                        'project_id' => $work->id,
                        'file_name' => $image_name,
                        'file_path' => $image_path,
                    ];
                }

                // Batch insert images
                Images::insert($imagesData);
            }

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => 'An error occurred while processing the request.'], 500);
        }

        return redirect()->back()->with(['msg' => 'Works Item Created...', 'type' => 'success']);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string|max:191',
            'start_date' => 'nullable|string|max:191',
            'end_date' => 'nullable|string|max:191',
            'lang' => 'nullable|string|max:191',
            'location' => 'nullable|string',
            'clients' => 'nullable|string',
            'description' => 'required|string',
            'categories_id' => 'required',
            'image' => 'mimes:jpg,jpeg,png|max:10000000'
        ]);

        $work = Works::find($request->id);
        $work->update([
            'title' => $request->title,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'lang' => $request->lang,
            'location' => $request->location,
            'clients' => $request->clients,
            'description' => $request->description,
            'categories_id' => serialize($request->categories_id),
        ]);

        if ($request->hasFile('image')) {
            $image = $request->image;
            $image_extenstion = $image->getClientOriginalExtension();
            $image_grid = 'work-grid-' . $request->id . '.' . $image_extenstion;
            $image_large = 'work-large-' . $request->id . '.' . $image_extenstion;
            if (check_image_extension($request->image)) {
                $folder_path = 'assets/uploads/works/';
                $resize_grid_image = Image::make($image)->resize(350, 280);
                $resize_large_image = Image::make($image)->resize(740, 420);
                $resize_grid_image->save($folder_path . $image_grid);
                $resize_large_image->save($folder_path . $image_large);
                $work->update(['image' => $image_extenstion]);
            }
        }
        return redirect()->back()->with(['msg' => 'Works Item Updated...', 'type' => 'success']);
    }

    public function delete($id)
    {
        $works = Works::find($id);

        // Delete associated images
        $images = Images::where('project_id', $id)->get();
        foreach ($images as $image) {
            if (File::exists($image->file_path)) {
                File::delete($image->file_path);
            }
            $image->delete();
        }

        // Delete the work folder
        $workFolder = 'assets/uploads/works/' . $id;
        if (File::exists($workFolder)) {
            File::deleteDirectory($workFolder);
        }

        $works->delete();
        return redirect()->back()->with(['msg' => 'Delete Success...', 'type' => 'danger']);
    }

    public function category_index()
    {
        $all_category = WorksCategory::all()->groupBy('lang');
        return view('backend.pages.works.category')->with(['all_category' => $all_category]);
    }

    public function category_store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:191',
            'lang' => 'required|string|max:191',
            'status' => 'required|string|max:191'
        ]);

        WorksCategory::create($request->all());

        return redirect()->back()->with([
            'msg' => 'New Category Added...',
            'type' => 'success'
        ]);
    }

    public function category_update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:191',
            'lang' => 'required|string|max:191',
            'status' => 'required|string|max:191'
        ]);

        WorksCategory::find($request->id)->update([
            'name' => $request->name,
            'status' => $request->status,
            'lang' => $request->lang,
        ]);

        return redirect()->back()->with([
            'msg' => 'Category Update Success...',
            'type' => 'success'
        ]);
    }

    public function category_delete(Request $request, $id)
    {
        if (Works::where('categories_id', $id)->first()) {
            return redirect()->back()->with([
                'msg' => 'You Can Not Delete This Category, It Already Associated With A Works ...',
                'type' => 'danger'
            ]);
        }
        WorksCategory::find($id)->delete();
        return redirect()->back()->with([
            'msg' => 'Category Delete Success...',
            'type' => 'danger'
        ]);
    }

    public function category_by_slug(Request $request)
    {
        $all_category = WorksCategory::where('lang', $request->lang)->get();
        return response()->json($all_category);
    }

    public function storeImage(Request $request, $work_id)
    {
        $this->validate($request, [
            'image' => 'required|mimes:jpg,jpeg,png|max:10064'
        ]);

        $new_image = $request->file('image');
        $image_extension = $new_image->getClientOriginalExtension();
        $image_name = 'work-' . $work_id . '-' . time() . '.' . $image_extension;
        $projectFolder = 'assets/uploads/works/' . $work_id;
        $new_image->move($projectFolder, $image_name);

        Images::create([
            'project_id' => $work_id,
            'file_name' => $image_name,
            'file_path' => $projectFolder . '/' . $image_name
        ]);

        return redirect()->route('admin.work.show', $work_id)->with(['msg' => 'Image added successfully', 'type' => 'success']);
    }

    public function showimages($id)
    {
        $work = Works::with('images')->findOrFail($id);

        return view('backend.show', compact('work'));
    }

    public function editImage($work_id, $image_id)
    {
        $image = Images::where('project_id', $work_id)->where('id', $image_id)->firstOrFail();
        return view('backend.edit_image', compact('image'));
    }

    public function updateImage(Request $request, $work_id, $image_id)
    {
        $this->validate($request, [
            'image' => 'required|mimes:jpg,jpeg,png|max:10064'
        ]);

        $image = Images::where('project_id', $work_id)->where('id', $image_id)->firstOrFail();

        // Delete the old image
        if (File::exists($image->file_path)) {
            File::delete($image->file_path);
        }

        $new_image = $request->file('image');
        $image_extension = $new_image->getClientOriginalExtension();
        $image_name = 'work-' . $work_id . '-' . time() . '.' . $image_extension;
        $projectFolder = 'assets/uploads/works/' . $work_id;
        $new_image->move($projectFolder, $image_name);

        $image->update([
            'file_name' => $image_name,
            'file_path' => $projectFolder . '/' . $image_name
        ]);

        return redirect()->route('admin.work.show', $work_id)->with(['msg' => 'Image updated successfully', 'type' => 'success']);
    }

    public function deleteImage($work_id, $image_id)
    {
        $image = Images::where('project_id', $work_id)->where('id', $image_id)->firstOrFail();

        // Delete the image file
        if (File::exists($image->file_path)) {
            File::delete($image->file_path);
        }

        $image->delete();

        return redirect()->route('admin.work.show', $work_id)->with(['msg' => 'Image deleted successfully', 'type' => 'success']);
    }
}