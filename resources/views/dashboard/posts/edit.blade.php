@extends('layouts.dash')

@section('content')
      <!-- Hero -->
      <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                   Edit Post
                </h1>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">

        @include('dashboard.partials.success-error')

        <form action="{{ route("post.update", $post->id) }}" method="POST">
            @method('PUT')
            @csrf

            <div class="row items-push">
                <div class="col-12">
                    <div class="form-group">
                        <label for="title">Title <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Post Title" value="{{ $post->title }}" required>
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-group">
                        <label for="video">Video <span class="text-danger">*</span></label>
                        <textarea type="text" class="form-control" rows="5" id="video" name="video" placeholder="Post Video" required>{{ $post->video }}</textarea>
                    </div>
                </div>

                <div class="col-lg-8 col-xl-5">
                    <div class="form-group">
                        <label for="category">Choose Category <span class="text-danger">*</span></label>
                        <select type="text" class="form-control" id="category" name="category_id" required>
                            <option disabled>Choose Category</option>

                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ $category->id == $post->category_id ? 'selected' : '' }}
                                    >{{ $category->name }}</option>
                            @endforeach
                        </select>
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
