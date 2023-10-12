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
            'text_top' => ['nullable', 'string', 'max:200'],
            'text_center' => ['nullable', 'string', 'max:200'],
            'text_bottom' => ['nullable', 'string', 'max:200'],
            'url' => ['nullable', 'url'],
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

        toastr('Создано успешно!', 'success');

        return redirect()->route('admin.slider.index');
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
        $slider = Slider::findOrFail($id);
        return view('admin.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'banner' => ['nullable','image', 'max:2000'],
            'text_top' => ['nullable', 'string', 'max:200'],
            'text_center' => ['nullable', 'string', 'max:200'],
            'text_bottom' => ['nullable', 'string', 'max:200'],
            'url' => ['nullable','url'],
            'serial' => ['required'],
            'status' => ['required'],
        ]);

        $slider = Slider::findOrFail($id);

        /* Handle file update */
        $imagePath = $this->updateImage($request, 'banner', 'uploads/sliders', $slider->banner);

        $slider->banner = empty(!$imagePath) ? $imagePath : $slider->banner;
        $slider->text_top = $request->text_top;
        $slider->text_center = $request->text_center;
        $slider->text_bottom = $request->text_bottom;
        $slider->text_top = $request->text_top;
        $slider->url = $request->url;
        $slider->serial = $request->serial;
        $slider->status = $request->status;

        $slider->save();

        toastr('Обновлено успешно!', 'success');

        return redirect()->route('admin.slider.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $slider = Slider::findOrFail($id);
            $imageName = $slider->banner;

            if ($slider->delete())
                $this->deleteImage($imageName);

            return response(['status' => 'success', 'message' => 'Слайдер успешно удален.']);
        } catch (\Exception $e) {
            return response(['status' => 'error', 'message' => 'Слайдер не найден.']);
        }
    }
}
