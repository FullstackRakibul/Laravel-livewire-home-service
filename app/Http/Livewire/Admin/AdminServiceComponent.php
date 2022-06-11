<?php

namespace App\Http\Livewire\Admin;

use App\Models\Service;
use Livewire\Component;
use Livewire\WithPagination;


class AdminServiceComponent extends Component
{
    use WithPagination;

    public function deleteService($id){
        $service=Service::find($id);
        if($service->image){
            unlink('images/services'.'/'.$service->image);
        }
        $service->delete();
        session()->flash('message','Service has been deleted successfully !!');

    }


    public function render()
    {
        $sevices=Service::paginate(10);

        $context=[
            'services'=>$sevices,
        ];
        return view('livewire.admin.admin-service-component',$context)->layout('layouts.basePage');
    }
}
