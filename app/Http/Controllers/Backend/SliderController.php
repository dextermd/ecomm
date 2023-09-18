<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\SliderDataTable;
use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    use ImageUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index(SliderDataTable $dataTable)
    {
        return $dataTable->render('admin.slider.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'banner' => ['required', 'image', 'max:2000'],
            'text_top' => ['string', 'max:200'],
            'text_center' => ['string', 'max:200'],
            'text_bottom' => ['string', 'max:200'],
            'url' => ['url'],
            'serial' => ['required'],
            'status' => ['required'],
        ]);

        $slider = new Slider();

        /* Handle file upload */
        $imagePath = $this->uploadImage($request, 'banner', 'uploads/sliders');

        $slider->banner = $imagePath;
        $slider->text_top = $request->text_top;
        $slider->text_center = $request->text_center;
        $slider->text_bottom = $request->text_bottom;
        $slider->text_top = $request->text_top;
        $slider->url = $request->url;
        $slider->serial = $request->serial;
        $slider->status = $request->status;

        $slider->save();

        toastr('Created Successfully!', 'success');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
