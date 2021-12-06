@extends('layouts.dash')

@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                    Navigation List
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
                                <th>Name</th>
                                <th>Link</th>
                                <th class="text-center" style="width: 100px;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($navigations as $navigation)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td class="font-w600 font-size-sm">
                                    <a href="#">{{ $navigation->name }}</a>
                                </td>
                                <td class="font-w600 font-size-sm">
                                    {{ $navigation->link }}
                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a href="{{ route("navigation.edit", $navigation->id) }}" class="btn btn-sm btn-alt-primary js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Edit">
                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                        </a>

                                        <button type="submit" class="btn btn-sm btn-alt-primary js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Delete" onclick="handleDelete({{ $navigation->id }})">
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

                            <form action="" method="POST" id="deleteNavigationForm">
                                @csrf
                                @method('DELETE')
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteModalLabel">Delete Navigation</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to delete this Navigation?
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
       let form = document.getElementById('deleteNavigationForm');
       form.action = '/navigation/' + id;
       $("#deleteModal").modal('show');
   }
</script>
@endsection
