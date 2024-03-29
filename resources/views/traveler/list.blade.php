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
                        <h1>Travelers</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Travelers</li>
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
                                <a href="{{ route('travelers.create') }}" class="btn btn-primary">Create</a>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Passport</th>
                                        <th>Tour</th>
                                        <th>User</th>
                                        <th>Status</th>
                                        <th>Paid</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{$user->id}}</td>
                                            <td>{{$user->name_surname}}</td>
                                            <td>{{$user->passport}}</td>
                                            <td>
                                                @foreach($tours as $tour)
                                                    @if($tour->id == $user->tour_id)
                                                        {{$tour->name}}
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>{{$user->user_id}}</td>
                                            <td>
                                                @if($user->status == 1)
                                                    <span class="right badge badge-success">Active</span>
                                                @else
                                                    <span class="right badge badge-danger">Blocked</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if($user->paid == 1)
                                                    <span class="right badge badge-success">Yes</span>
                                                @else
                                                    <span class="right badge badge-danger">No</span>
                                                @endif
                                            </td>
                                            <td class="project-actions">
                                                <a class="btn btn-warning btn-sm" href="{{ route("travelers.show", $user->id) }}" title="Show">
                                                    <i class="fas fa-eye">
                                                    </i>
                                                </a>
                                                <a class="btn btn-info btn-sm" href="{{ route("travelers.edit", $user->id) }}" title="Edit">
                                                    <i class="fas fa-pencil-alt">
                                                    </i>
                                                </a>
                                                <a class="btn btn-danger btn-sm"
                                                    href="{{ route('travelers.destroy',$user->id) }}"
                                                    onclick="event.preventDefault();
                                                    document.getElementById('delete-form-{{ $user->id }}').submit();">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                                <form id="delete-form-{{ $user->id }}" action="{{ route('travelers.destroy',$user->id) }}"
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
