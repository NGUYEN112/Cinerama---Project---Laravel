<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Repositories\Contracts\RemarkablesRepository;
use Illuminate\Http\Request;

class AdminRemarkableController extends Controller
{
    protected $remarkableRepository;

    public function __construct(
        RemarkablesRepository   $remarkablesRepository
    )
    {
        $this->remarkableRepository = $remarkablesRepository;
    }

    public function listRemarkPage() {
        $remarkables = $this->remarkableRepository->getAll();
        return view('admins.remarks.list',compact('remarkables'));
    }

    public function createRemarkPage() {
        return view('admins.remarks.create');
    }

    public function storeRemark(Request $request) {
        if ($request->hasFile('poster')) {
            $path_poster = base64_encode(file_get_contents($request->file('poster')));
            $poster = 'data:image/jpg;base64,' . $path_poster;
        }else {
            $poster = null;
        }

        if ($request->hasFile('banner')) {
            $path_banner = base64_encode(file_get_contents($request->file('banner')));
            $banner = 'data:image/jpg;base64,' . $path_banner;
        }
        $attributes = [
            'categories' => $request->categories,
            'poster'    => $poster,
            'banner'    => $banner,
            'status'    => 1,
            'film_id'   => $request->film_id,
            'combo_id'  => $request->combo_id,
            'discount_id' => $request->discount_id
        ];
        $this->remarkableRepository->create($attributes);
        return redirect('/admin/remarkables');
    }

    public function editRemarkPage($id) {
        $remarkable = $this->remarkableRepository->get($id);
        return view('admins.remarks.edit',compact('remarkable'));
    }

    public function updateRemark($id, Request $request) {
        $attributes = [
            'categories' => $request->categories,
            'poster'    => $request->poster,
            'banner'    => $request->banner,
            'status'    => 1,
            'film_id'   => $request->film_id,
            'combo_id'  => $request->combo_id,
            'discount_id' => $request->discount_id
        ];
        $this->remarkableRepository->update($id,$attributes);
        return redirect('/admin/remarkables');
    }

    public function changeStatus($id,$status) {
        return $this->remarkableRepository->changeStatus($id,$status);
    }
}
