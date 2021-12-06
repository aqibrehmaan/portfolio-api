@extends('layouts.dash')

@section('content')
      <!-- Hero -->
      <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                    Update Information
                </h1>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">

        @include('dashboard.partials.success-error')

        <form action="{{ route("information.update", $information->id) }}" method="POST">
            @method('PUT')
            @csrf

            <div class="row items-push">
                <div class="col-12">
                    <div class="form-group">
                        <label for="info">About Us<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="info" name="info_head" placeholder="About Us" value="{{ $information->info_head }}" required>
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-group">
                        <label for="description">Description <span class="text-danger">*</span></label>
                        <textarea type="text" class="form-control" rows="5" id="description" name="info_description" placeholder="Northern California natives Ian Kibbey and Corey Creasey..." required>{{ $information->info_description }}</textarea>
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
