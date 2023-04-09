<div class="wrapper">
@include('admin/head')
@include('admin/headTop')
@include('admin/sidebar')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Accounting</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Accounting</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">

                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>{{$user->id}}</th>
                                    </tr>
                                    <tr>
                                        <th>Name</th>
                                        <th>{{$user->name}}</th>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <th>{{$user->email}}</th>
                                    </tr>
                                    <tr>
                                        <th>Date</th>
                                        <th>{{$user->created_at}}</th>
                                    </tr>
                                    <tr>
                                        <th>Phone</th>
                                        <th>{{$user->phone}}</th>
                                    </tr>
                                    <tr>
                                        <th>Language</th>
                                        <th>{{$user->lang}}</th>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <th>
                                            @if($user->status == 1)
                                                <span class="right badge badge-success">Active</span>
                                            @elseif($user->status == 2)
                                                <span class="right badge badge-warning">Waiting</span>
                                            @else
                                                <span class="right badge badge-danger">Blocked</span>
                                            @endif
                                        </th>
                                    </tr>
                                    </thead>
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
