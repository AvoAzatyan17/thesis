<div class="wrapper">
    @include('admin/head')
    @include('admin/headTop')
    @include('admin/sidebar')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Tours</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Tours</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-tools">
                                <a href="{{ route('tours.create') }}" class="btn btn-primary">Create</a>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Start Place</th>
                                        <th>End Place</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Count</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($tours as $tour)
                                        <tr>
                                            <td>{{$tour->id}}</td>
                                            <td>{{$tour->start_country}}</td>
                                            <td>{{$tour->end_country}}</td>
                                            <td>{{$tour->start_date}}</td>
                                            <td>{{$tour->end_date}}</td>
                                            <td>{{$tour->count}}</td>
                                            <td>
                                                @if($tour->status == 1)
                                                    <span class="right badge badge-success">Active</span>
                                                @else
                                                    <span class="right badge badge-danger">expired</span>
                                                @endif
                                            </td>
                                            <td class="project-actions">
                                                <a class="btn btn-warning btn-sm" href="{{ route("tours.show", $tour->id) }}" title="Show">
                                                    <i class="fas fa-eye">
                                                    </i>
                                                </a>
                                                <a class="btn btn-info btn-sm" href="{{ route("tours.edit", $tour->id) }}" title="Edit">
                                                    <i class="fas fa-pencil-alt">
                                                    </i>
                                                </a>
                                                <a class="btn btn-danger btn-sm"
                                                   href="{{ route('tours.destroy',$tour->id) }}"
                                                   onclick="event.preventDefault();
                                                    document.getElementById('delete-form-{{ $tour->id }}').submit();">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                                <form id="delete-form-{{ $tour->id }}" action="{{ route('tours.destroy',$tour->id) }}"
                                                      method="POST" style="display: none;">
                                                    @csrf
                                                    @method("DELETE")
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
