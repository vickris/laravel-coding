<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Services\UploadsManager;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UploadController extends Controller
{
    public function __construct(UploadsManager $manager)
    {
        $this->manager = $manager;
    }

    /**
    * Show page of files / subfolders
    */
    public function index(Request $request)
    {
        $folder = $request->get('folder');
        $data = $this->manager->folderInfo($folder);

        return view('admin.upload.index', $data);
    }
}
