@extends('layouts.admin')

@section('style')
    <!--begin::Page Vendors Styles(used by this page)-->
    <link href="{{asset('admin/assets/plugins/custom/datatables/datatables.bundle.css?v=7.0.5')}}" rel="stylesheet"
          type="text/css"/>
    <!--end::Page Vendors Styles-->
@endsection

@section('content')
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <div class="card card-custom">
                @foreach($classPlans as $department => $classes)
                    @if(count($classes) > 0)
                        <div class="card-header">
                            <div class="card-title">
                                <span class="card-icon">
                                    <i class="flaticon2-favourite text-primary"></i>
                                </span>
                                <h3 class="card-label">{{ $classes[0]->department->name }}</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                @foreach($classes as $class)
                                    <div class="col-md-2">
                                        <div class="class-code">
                                            <h3>
                                                <a class="btn font-weight-bold font-size-h6 px-10 py-4 mr-2 square-btn
                                                    {{ $class->status == 0 ? 'btn-info' : 'btn-warning' }}"
                                                   href="{{ route('admin.check-class-plan',['id'=>encrypt($class->id),'class_name'=>$class->name]) }}">
                                                    {{ $class->name }}
                                                </a>
                                            </h3>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

        </div>
    </div>
@endsection

@section('script')
    <!--begin::Page Scripts(used by this page)-->
    <script src="{{asset('admin/assets/js/pages/crud/datatables/data-sources/merchant.js?v=7.0.5')}}"></script>
    <!--end::Page Scripts-->
@endsection