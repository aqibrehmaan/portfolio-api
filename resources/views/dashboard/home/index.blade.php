@extends('layouts.dash')

@section('content')
      <!-- Hero -->
      <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                    Update Home Info
                </h1>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">

        @include('dashboard.partials.success-error')

        <form action="{{ route("home.update", $home->id) }}" method="POST">
            @method('PUT')
            @csrf

            <div class="row items-push">
                <div class="col-lg-8 col-xl-5">
                    <div class="form-group">
                        <label for="before">Before Name Text <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="before" name="before_name" placeholder="Hi, I’m" value="{{ $home->before_name }}" required>
                    </div>
                </div>

                <div class="col-lg-8 col-xl-5">
                    <div class="form-group">
                        <label for="name">Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Home Name" value="{{ $home->name }}" required>
                    </div>
                </div>
                <div class="col-lg-8 col-xl-5">
                    <div class="form-group">
                        <label for="after">After Name Text <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="after" name="after_name" placeholder="Photographer" value="{{ $home->after_name }}" required>
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-group">
                        <label for="after">Description <span class="text-danger">*</span></label>
                        <textarea type="text" class="form-control" rows="3" id="after" name="description" placeholder="Photographer" required>{{ $home->description }}</textarea>
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-group">
                        <label for="fb">Facebook Link <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" rows="3" id="fb" name="fb_link" placeholder="Facebook Link" value="{{ $home->fb_link }}" required>
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-group">
                        <label for="fb">Instagram Link <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" rows="3" id="fb" name="insta_link" placeholder="Instagram Link" value="{{ $home->insta_link }}" required>
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-group">
                        <label for="linkedin">Linkedin Link <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" rows="3" id="linkedin" name="linkedin_link" placeholder="Linkedin Link" value="{{ $home->linkedin_link }}" required>
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-group">
                        <label for="twitter">Twitter Link <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" rows="3" id="twitter" name="twitter_link" placeholder="Twitter Link" value="{{ $home->twitter_link }}" required>
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


