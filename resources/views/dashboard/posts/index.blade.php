@extends('layouts.dash')

@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                    Posts List
                </h1>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">

        @include('dashboard.partials.success-error')

        <div class="block block-rounded">
            <div class="block-content">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-vcenter">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Title</th>
                                <th>Video</th>
                                <th>Category</th>
                                <th class="text-center" style="width: 100px;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($posts as $post)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td class="font-w600 font-size-sm">
                                    <a href="#">{{ $post->title }}</a>
                                </td>
                                <th>{{ $post->video }}</th>
                                <th>{{ $post->category->name }}</th>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a href="{{ route("post.edit", $post->id) }}" class="btn btn-sm btn-alt-primary js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Edit">
                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                        </a>

                                        <button type="submit" class="btn btn-sm btn-alt-primary js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Delete" onclick="handleDelete({{ $post->id }})">
                                            <i class="fa fa-fw fa-times"></i>
                                        </button>

                                    </div>
                                </td>
                            </tr>
                            @endforeach


                        </tbody>
                    </table>

                     <!-- Modal -->
                     <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">

                            <form action="" method="POST" id="deletePostForm">
                                @csrf
                                @method('DELETE')
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteModalLabel">Delete Post</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to delete this Post?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No, Go Back</button>
                                    <button type="submit" class="btn btn-primary">Yes, Delete</button>
                                </div>
                            </div>

                            </form>

                        </div>
                     </div>

                     {{-- Modal End --}}

                </div>
            </div>
        </div>
    </div>
    <!-- END Page Content -->
@endsection

@section('scripts')
<script>
    function handleDelete(id) {
       let form = document.getElementById('deletePostForm');
       form.action = '/post/' + id;
       $("#deleteModal").modal('show');
   }
</script>
@endsection
