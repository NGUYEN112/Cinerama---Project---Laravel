<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Repositories\Contracts\DiscountsRepository;
use Illuminate\Http\Request;

class AdminDiscountController extends Controller
{
    protected $discountRepository;

    public function __construct(
        DiscountsRepository $discountsRepository,

    )
    {
        $this->discountRepository = $discountsRepository;
    }

    public function listDiscountPage() {
        $discounts = $this->discountRepository->getAll();
        return view('admins.discounts.list',compact('discounts'));
    }

    public function getDiscount() {
        $discounts = $this->discountRepository->getAll();
        return json_encode(array('data' => $discounts));
    }

    public function createDiscountPage() {
        return view('admins.discounts.create');
    }

    public function storeDiscount(Request $request) {
        $attributes = [
            'information' => $request->information,
            'start_time'  => $request->start_time,
            'end_time'    => $request->end_time,
            'category_discount' => $request->category_discount,
            'discount_method' => $request->discount_method,
            'discount_value'    => $request->discount_value
        ];

        $this->discountRepository->create($attributes);
        return redirect('/admin/discounts');
    }
    public function editDiscountPage($id) {
        $discount = $this->discountRepository->get($id);
        return view('admins.discounts.edit',compact('discount'));
    }

    public function updateDiscount($id, Request $request) {
        $attributes = [
            'information' => $request->information,
            'start_time'  => $request->start_time,
            'end_time'    => $request->end_time,
            'category_discount' => $request->category_discount,
            'discount_method' => $request->discount_method,
            'discount_value'    => $request->discount_value
        ];

        $this->discountRepository->update($id,$attributes);
        return redirect('/admin/discounts');
    }
}
