<div class="wrapper">
    @include('admin/head')
    @include('admin/headTop')
    @include('admin/sidebar')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Manager</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Manager</li>
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
                                        <th>Start Place	</th>
                                        <th>{{$user->start_country}}</th>
                                    </tr>
                                    <tr>
                                        <th>End Place</th>
                                        <th>{{$user->end_country}}</th>
                                    </tr>
                                    <tr>
                                        <th>Start Date</th>
                                        <th>{{$user->start_date}}</th>
                                    </tr>
                                    <tr>
                                        <th>End Date</th>
                                        <th>{{$user->end_date}}</th>
                                    </tr>
                                    <tr>
                                        <th>Count</th>
                                        <th>{{$user->count}}</th>
                                    </tr>
                                    <tr>
                                        <th>Description</th>
                                        <th>{{$user->description}}</th>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <th>
                                            @if($user->status == 1)
                                                <span class="right badge badge-success">Active</span>
                                            @else
                                                <span class="right badge badge-danger">Expired</span>
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
