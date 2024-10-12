<?php

namespace App\Http\Controllers\Web\Backend\Setting;

use App\Http\Controllers\Controller;
use App\Models\DynamicPage;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;

class DynamicpageController extends Controller
{

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = DynamicPage::latest();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('page_title', function ($data) {
                    $page_title = $data->page_title;
                    $status = '<p>' . $page_title . ' </p>';
                    return $status;
                })
                ->addColumn('page_content', function ($data) {
                    $page_content = $data->page_content;
                    $status = '<p>' . $page_content . ' </p>';
                    return $status;
                })
                ->addColumn('status', function ($data) {
                    $status = ' <div class="form-check form-switch" >';
                    $status .= ' <input onclick="showStatusChangeAlert(' . $data->id . ')" type="checkbox" class="form-check-input" id="customSwitch' . $data->id . '" getAreaid="' . $data->id . '" name="status"';
                    if ($data->status == "active") {
                        $status .= "checked";
                    }
                    $status .= '><label for="customSwitch' . $data->id . '" class="form-check-label" for="customSwitch"></label></div>';

                    return $status;
                })
                ->addColumn('action', function ($data) {

                    return '<div class="btn-group" role="group" aria-label="First group">
                                    <button onclick="editDynamicPage(' . $data->id . ')" type="button" class="btn btn-outline-secondary" tabindex="0" data-toggle="tooltip" data-placement="top" title="Edit Product">
                                        <i class="tf-icons bx bxs-right-top-arrow-circle"></i>
                                    </button>
                                    <button onclick="showDeleteConfirm(' . $data->id . ')" type="button" class="btn btn-outline-secondary" tabindex="0" data-toggle="tooltip" data-placement="top" title="Delete Product">
                                        <i class="tf-icons bx bx-trash"></i>
                                    </button>
                                </div>';
                })
                ->rawColumns(['page_title', 'page_content', 'status', 'action'])
                ->make(true);
        }
        return view('backend.layout.dynamic_page.index');
    }


    public function dynamicPageCreate()
    {
        if (auth()->user()->role == 'admin') {
            return view('backend.layout.dynamic_page.create');
        }
    }


    public function dynamicPageStore(Request $request)
    {
        try {
            if (auth()->user()->role == 'admin') {
                $validator = Validator::make($request->all(), [
                    'page_title' => 'required|string|max:100',
                    'page_content' => 'required|string',
                ]);

                // If validation fails, redirect back with errors and input data

                if ($validator->fails()) {
                    return redirect()->back()->withErrors($validator)->withInput();
                }

                $data = new DynamicPage();
                $data->page_title = $request->page_title;
                $data->page_slug = Str::slug($request->page_title);
                $data->page_content = $request->page_content;
                $data->save();
            }
            return redirect()->route('dynamic_page.index')->with('t-success', 'Dynamic Page created successfully.');
        } catch (Exception $e) {
            return redirect()->back()->with('t-error', 'Something went wrong..!');
        }
    }


    public function dynamicPageEdit($id)
    {
        if (auth()->user()->role == 'admin') {
            $data = DynamicPage::find($id);
            return view('backend.layout.dynamic_page.edit', compact('data'));
        }
    }


    public function dynamicPageUpdate(Request $request, $id)
    {
        try {
            if (auth()->user()->role == 'admin') {
                $validator = Validator::make($request->all(), [
                    'page_title' => 'required|string|max:100',
                    'page_content' => 'required|string',
                ]);

                // If validation fails, redirect back with errors and input data
                if ($validator->fails()) {
                    return redirect()->back()->withErrors($validator)->withInput();
                }

                $data = DynamicPage::findOrFail($id);
                $data->page_title = $request->page_title;
                $data->page_slug = Str::slug($request->page_title);
                $data->page_content = $request->page_content;
                $data->update();

                return redirect()->route('dynamic_page.index')->with('t-success', 'Dynamic Page Updated Successfully.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('t-error', 'Something went wrong..!');
        }
    }

    public function dynamicPageDelete($id)
    {

        try {
            $page = DynamicPage::find($id);
            $page->delete();
            return response()->json([
                'success' => true,
                'message' => 'Deleted Successfully',
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong..!',
            ], 500);
        }

    }


    public function status($id)
    {

        try {
            $data = DynamicPage::where('id', $id)->first();
            if ($data->status == 'active') {
                // If the current status is active, change it to inactive
                $data->status = 'inactive';
                $data->save();

                // Return JSON response indicating success with message and updated data
                return response()->json([
                    'success' => true,
                    'message' => 'Unpublished Successfully.',
                    'data' => $data,
                ], 200);
            } else {
                // If the current status is inactive, change it to active
                $data->status = 'active';
                $data->save();

                // Return JSON response indicating success with a message and updated data.
                return response()->json([
                    'success' => true,
                    'message' => 'Published Successfully.',
                    'data' => $data,
                ], 200);
            }
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong...!',
            ], 500);
        }

    }
}
