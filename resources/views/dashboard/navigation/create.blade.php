@extends('layouts.dash')

@section('content')
      <!-- Hero -->
      <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                   Add Category
                </h1>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">

        @include('dashboard.partials.success-error')

        <form action="{{ route("navigation.store") }}" method="POST">
            @csrf
            <div class="row items-push">
                <div class="col-lg-8 col-xl-5">
                    <div class="form-group">
                        <label for="name">Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Work" value="{{ old('name') }}" required>
                    </div>
                </div>

                <div class="col-lg-8 col-xl-5">
                    <div class="form-group">
                        <label for="link">Link <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="link" name="link" placeholder="/work" value="{{ old('link') }}" required>
                    </div>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>

            </div>

        </form>

    </div>
    <!-- END Page Content -->
@endsection
