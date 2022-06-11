<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Service;

class ServiceDetailsComponent extends Component

{
    public $service_slug;

    public function mount($service_slug){
        $this->service_slug= $service_slug;
    }

    public function render()
    {
        $service = Service::where('services.slug', $this->service_slug)
            ->first();

        $context=[
            'service'=>$service,
        ];
        return view('livewire.service-details-component',$context)->layout('layouts.basePage');
    }
}
