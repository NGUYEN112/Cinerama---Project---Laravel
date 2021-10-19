<?php 

namespace App\Repositories\Eloquents;

use App\Models\Remarkable;
use App\Repositories\Contracts\RemarkablesRepository;

class RemarkablesEloquentRepository implements RemarkablesRepository {
    public function getAll()
    {
        return Remarkable::orderBy('status','desc')->get();
    }

    public function getAvailable()
    {
        return Remarkable::where('status',1)->get();
    }

    public function get($id)
    {
        return Remarkable::findOrFail($id);
    }

    public function create($attributes)
    {
        return Remarkable::create($attributes);
    }

    public function update($id, $attributes)
    {

    }
    public function changeStatus($id,$status)
    {
        if($status == 0) {
            Remarkable::where('id',$id)->update([
                'status'=> $status
            ]);
        } else{
            Remarkable::where('id',$id)->update([
                'status'=> 1
            ]);
        }
    }
    public function delete($id)
    {
        $remarkable = $this->get($id);
        $remarkable->destroy($id);
    }
}