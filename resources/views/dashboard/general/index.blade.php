@extends('layouts.dash')

@section('content')
      <!-- Hero -->
      <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                    Update General Info
                </h1>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">

        @include('dashboard.partials.success-error')

        <form action="{{ route("general.update", $general->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf

            <div class="row items-push">

                <div class="col-12">
                    <div class="form-group">
                        <label for="website_title">Website Title <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" rows="3" id="website_title" name="website_title" placeholder="Website Title" value="{{ $general->website_title }}" required>
                    </div>
                </div>

                <div class="col-lg-8 col-xl-5">
                    <div class="current-image mb-3">
                        <img src="{{ asset('storage/' . $general->logo_image) }}" alt="Logo Image" width="100" height="100">
                    </div>

                    <div class="form-group">
                        <label for="before">Upload Logo <span class="text-danger">*</span></label>
                        <input type="file" name="logo_image" class="form-control">
                    </div>
                </div>

                <div class="col-lg-8 col-xl-5">
                    <div class="current-image mb-3">
                        <img src="{{ asset('storage/' . $general->logo_image) }}" alt="Logo Image" width="100" height="100">
                    </div>

                    <div class="form-group">
                        <label for="before">Upload Favicon <span class="text-danger">*</span></label>
                        <input type="file" name="favicon_image" class="form-control">
                    </div>
                </div>

                <div class="col-3">
                    <div class="form-group">
                        <label for="website_color" class="d-block">Website Color <span class="text-danger">*</span></label>
                        <input type="color" class="" rows="3" id="website_color" name="website_color" placeholder="" value="" required>
                    </div>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>

            </div>

        </form>

    </div>
    <!-- END Page Content -->
@endsection

@section('css')
    <style>
        .nav-main-item.open a.nav-main-link {
            color: #fff !important;
        }
    </style>
@endsection


