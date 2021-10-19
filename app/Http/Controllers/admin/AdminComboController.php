<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Repositories\Contracts\CombosRepository;
use Illuminate\Http\Request;

class AdminComboController extends Controller
{
    protected $comboRepository;

    public function __construct(
        CombosRepository $combosRepository
    ) {
        $this->comboRepository = $combosRepository;
    }

    public function listComboPage()
    {
        $combos = $this->comboRepository->getAll();
        return view('admins.combos.list', compact('combos'));
    }

    public function createComboPage()
    {
        return view('admins.combos.create');
    }

    public function storeCombo(Request $request)
    {
        if ($request->hasFile('product_image')) {
            $path_image = base64_encode(file_get_contents($request->file('product_image')));
            $product_image = 'data:image/jpg;base64,' . $path_image;
        }
        $attributes = [
            'product_name' => $request->product_name,
            'product_detail' => $request->product_detail,
            'product_image'  => $product_image,
            'product_value'  => $request->product_value
        ];
        $this->comboRepository->create($attributes);
        return redirect('/admin/combos');
    }

    public function editComboPage($id) {
        $combo = $this->comboRepository->get($id);
        return view('admins.combos.edit',compact('combo'));
    }

    public function updateCombo($id,Request $request)
    {
        if ($request->hasFile('product_image')) {
            $path_image = base64_encode(file_get_contents($request->file('product_image')));
            $product_image = 'data:image/jpg;base64,' . $path_image;
        }
        $attributes = [
            'product_name' => $request->product_name,
            'product_detail' => $request->product_detail,
            'product_image'  => $product_image,
            'product_value'  => $request->product_value
        ];
        $this->comboRepository->update($id,$attributes);
        return redirect('/admin/combos');
    }

    public function delete($id) {
        $this->comboRepository->delete($id);
        return redirect('/admin/combos');
    }
}
