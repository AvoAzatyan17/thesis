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
                        <h1>Managers</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Managers</li>
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
                                <a href="{{ route('manager.create') }}" class="btn btn-primary">Create</a>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{$user->id}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->created_at}}</td>
                                            <td>
                                                @if($user->status == 1)
                                                    <span class="right badge badge-success">Active</span>
                                                @elseif($user->status == 2)
                                                    <span class="right badge badge-warning">Waiting</span>
                                                @else
                                                    <span class="right badge badge-danger">Blocked</span>
                                                @endif
                                            </td>
                                            <td class="project-actions">
                                                <a class="btn btn-success btn-sm" href="{{route('chat')}}" title="Chat">
                                                    <i class="fas fa-envelope">
                                                    </i>
                                                </a>
                                                <a class="btn btn-warning btn-sm" href="{{ route("manager.show", $user->id) }}" title="Show">
                                                    <i class="fas fa-eye">
                                                    </i>
                                                </a>
                                                <a class="btn btn-info btn-sm" href="{{ route("manager.edit", $user->id) }}" title="Edit">
                                                    <i class="fas fa-pencil-alt">
                                                    </i>
                                                </a>
                                                <a class="btn btn-danger btn-sm"
                                                   href="{{ route('manager.destroy',$user->id) }}"
                                                   onclick="event.preventDefault();
                                                    document.getElementById('delete-form-{{ $user->id }}').submit();">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                                <form id="delete-form-{{ $user->id }}" action="{{ route('manager.destroy',$user->id) }}"
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
