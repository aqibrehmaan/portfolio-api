@extends('layouts.dash')

@section('content')
      <!-- Hero -->
      <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                   Create Post
                </h1>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">

        @include('dashboard.partials.success-error')

        <form action="{{ route("post.store") }}" method="POST">
            @csrf

            <div class="row items-push">
                <div class="col-12">
                    <div class="form-group">
                        <label for="title">Title <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="“Cult Followers” - Trailer" value="{{ old('title') }}" required>
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-group">
                        <label for="video">Vimeo Video Key<span class="text-danger">*</span></label>
                        {{-- <textarea type="text" class="form-control" rows="5" id="video" name="video" placeholder="<iframe src='https://player.vimeo.com/video/10985679?h=7008dd1c79' width='640' height='480' frameborder='0' allow='autoplay; fullscreen; picture-in-picture' allowfullscreen></iframe>
                            <p><a href='https://vimeo.com/10985679'>Cat</a> from <a href='https://vimeo.com/firebirdflame'>Ian S</a> on <a href='https://vimeo.com'>Vimeo</a>.</p>" value="{{ old('video') }}" required></textarea> --}}

                        <input type="text" name="video" id="video" placeholder="648847915" class="form-control" value="{{ old('video') }}">

                    </div>
                </div>

                <div class="col-12">
                    <div class="form-group">
                        <label for="description">Description<span class="text-danger">*</span></label>
                        <textarea type="text" class="form-control" rows="5" id="description" name="description" placeholder="Post Description" required></textarea>
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-group">
                        <label for="category">Choose Category <span class="text-danger">*</span></label>
                        <select type="text" class="form-control" id="category" name="category_id" required>
                            <option selected disabled>Choose Category</option>

                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    >{{ $category->name }}</option>
                            @endforeach
                        </select>
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
