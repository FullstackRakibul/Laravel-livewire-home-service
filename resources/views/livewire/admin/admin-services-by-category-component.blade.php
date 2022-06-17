<div>
    <style>
        nav svg {
            height: 15px;
        }

        nav .hidden {
            display: block !important;
        }
    </style>

    <div class="section-title-01 honmob">
        <div class="bg_parallax image_02_parallax"></div>
        <div class="opacy_bg_02">
            <div class="container">
                <h1>{{$category_name}} Services  </h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>/</li>
                        <li>{{$category_name}} Services </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="content-central">
        <div class="content_info">
            <div class="paddings-mini">
                <div class="container">
                    <div class="row portfolioContainer">
                        <div class="col-md-12 profile1">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-md-6">{{$category_name}} Services</div>
                                        <div class="col-md-6">
                                            <a href="{{route('admin.add_service_categories')}}" class="btn btn-primary pull-right"> Add Service
                                                Category </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    @if(Session::has('message'))
                                        <div class="alert alert-success" role="alert">
                                            {{Session::get('message')}}
                                        </div>
                                    @endif
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Slug</th>
                                            <th>Action</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($services as $service)
                                            <tr>
                                                <td>{{$service->id}}</td>
                                                <td><img src="{{asset('images/services')}}/{{$service->image}}" width="80">
                                                </td>
                                                <td>{{$service->name}}</td>
                                                <td>{{$service->slug}}</td>
                                                <td>
                                                    <a href="#"><i class="fa fa-edit fa-2x text-info p-1"></i></a>
                                                    <a href="#" onclick="confirm('Are you sure ?')|| event.stopImmediatePropagation()" wire:click.prevent="deleteService({{$service->id}})">
                                                        <i class="fa fa-trash fa-2x text-danger p-1" style="margin-left: 10px"></i></a>

                                                </td>
                                            </tr>

                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            {{$services->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
