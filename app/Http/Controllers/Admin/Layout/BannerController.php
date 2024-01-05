<?php

namespace App\Http\Controllers\Admin\Layout;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Layout\BannerRequest;
use App\Http\Services\File\FileService;
use App\Http\Services\Image\ImageService;
use App\Models\Banner;
use App\Models\Priority;
use Database\Seeders\Banner\PrioritySedder;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        //gnreate priority seeder
        $priority = Priority::first();
        if ($priority === null) {
            $defult = new PrioritySedder;
            $defult->run();
        }




        $banners = Banner::orderBy('created_at', 'desc')->get();
        return view('admin.banner.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $priorities = Priority::all();

        return view('admin.banner.create', compact('priorities'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, ImageService $imageService, FileService $fileService)
    {

        $inputs = $request->all();

        //ready for upload in database date_start
        $realetimestampStart = intval(substr($request->date_start, 0, 10));
        $inputs['date_start'] = date('Y-m-d H:i:s', $realetimestampStart);


        //ready for upload in database date_end
        $realetimestampEnd = intval(substr($request->date_start, 0, 10));
        $inputs['date_end'] = date('Y-m-d H:i:s', $realetimestampEnd);


        if ($request->hasFile('upload_file')) {
            $format = explode('.',  $request->file('upload_file')->getClientOriginalName())[1];


            //fotmant for upload  image
            $formats_image = [
                'jpg',
                'jpeg ',
                'png',
                'gif'
            ];


            //fotmant for upload  video

            $formants_video = [
                'mp4',
                'mov',
                'flv',
            ];


            //if isformat file == image
            foreach ($formats_image as $format_image) {

                if ($format == $format_image) {

                    //width and height image for fit and save
                    $dimension = Priority::where('id', $request->priority_id)->first();

                    $imageService->setExclusiveDirectory('images' . DIRECTORY_SEPARATOR . 'banners');
                    $result_image = $imageService->fitAndSave($request->file('upload_file'), $dimension->width,  $dimension->height);
                    // $result_image  =  $imageService->save($request->file('upload_file'));
                    $inputs['file_show'] = $result_image;
                    $inputs['file_type'] = 'image';
                }
            }

            //if isformat file == video
            foreach ($formants_video as $formants_video) {
                if ($format == $formants_video) {
                    $fileService->setExclusiveDirectory('file' . DIRECTORY_SEPARATOR . 'banners');
                    $fileService->setFileSize($request->file('upload_file'));
                    $resultUploadFile =  $fileService->moveToPublic($request->file('upload_file'));

                    $inputs['file_show'] = $resultUploadFile;
                    $inputs['file_type'] = 'video';
                }
            }
        }


        //check 

        //error file format
        if (!isset($inputs['file_show'])) {
            return redirect()->route('admin.banner.create')->withErrors(['message' => 'این فرمت فایل  برای این بخش مناسب نیست']);
        } else {

            $result = Banner::create($inputs);
            if ($result) {
                //redirect id success
                return redirect()->route('admin.banner.index');
            } else {
                //redirect if error
                return redirect()->route('admin.banner.index');
            }
        }
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
    public function edit(Banner $banner)
    {
        $priorities = Priority::all();

        return view('admin.banner.edit', compact('banner', 'priorities'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BannerRequest $request, Banner $banner, ImageService $imageService, FileService $fileService)
    {
        $inputs = $request->all();

        //ready for upload in database date_start
        $realetimestampStart = intval(substr($request->date_start, 0, 10));
        $inputs['date_start'] = date('Y-m-d H:i:s', $realetimestampStart);


        //ready for upload in database date_end
        $realetimestampEnd = intval(substr($request->date_start, 0, 10));
        $inputs['date_end'] = date('Y-m-d H:i:s', $realetimestampEnd);


        if ($request->hasFile('upload_file')) {
            $format = explode('.',  $request->file('upload_file')->getClientOriginalName())[1];


            //fotmant for upload  image
            $formats_image = [
                'jpg',
                'jpeg ',
                'png',
                'gif'
            ];


            //fotmant for upload  video

            $formants_video = [
                'mp4',
                'mov',
                'flv',
            ];


            //if isformat file == image
            foreach ($formats_image as $format_image) {

                if ($format == $format_image) {

                    //width and height image for fit and save
                    $dimension = Priority::where('id', $request->priority_id)->first();

                    $imageService->setExclusiveDirectory('images' . DIRECTORY_SEPARATOR . 'banners');
                    $result_image = $imageService->fitAndSave($request->file('upload_file'), $dimension->width,  $dimension->height);
                    // $result_image  =  $imageService->save($request->file('upload_file'));
                    $inputs['file_show'] = $result_image;
                    $inputs['file_type'] = 'image';
                }
            }

            //if isformat file == video
            foreach ($formants_video as $formants_video) {
                if ($format == $formants_video) {
                    $fileService->setExclusiveDirectory('file' . DIRECTORY_SEPARATOR . 'banners');
                    $fileService->setFileSize($request->file('upload_file'));
                    $resultUploadFile =  $fileService->moveToPublic($request->file('upload_file'));

                    $inputs['file_show'] = $resultUploadFile;
                    $inputs['file_type'] = 'video';
                }
            }
        }

        if (isset($inputs['status_end_date'])) {
            $inputs['date_end'] = null;
        }


        //error file format
        if (!isset($inputs['file_show']) && $banner->file_show == null) {
            return redirect()->route('admin.banner.edit')->withErrors(['message' => 'این فرمت فایل  برای این بخش مناسب نیست']);
        } else {

            $result = $banner->update($inputs);
            if ($result) {
                //redirect id success
                return redirect()->route('admin.banner.index');
            } else {
                //redirect if error
                return redirect()->route('admin.banner.index');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banner $banner, ImageService $imageService)
    {
        $result = $banner->delete();

        // $imageService->deleteImage($banner->file);
        unlink($banner->file_show);

        if ($result) {
            return redirect()->route('admin.banner.index')->with('success', 'اطلاعات با موفقیت حذف شد');
        } else {
            return redirect()->route('admin.banner.index');
        }
    }
}
