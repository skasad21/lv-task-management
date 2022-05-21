@extends('layout.main')

@section('content')
    <!-- Content -->
    <div class="content">
        <!-- Animated -->
        <div class="animated fadeIn">



            <!-- Widgets  -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-five">
                                <div class="stat-icon dib flat-color-1">
                                    <i class="pe-7s-network"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib">
                                        <div class="stat-text"><span class="count">10</span></div>
                                        <div class="stat-heading">Total</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-five">
                                <div class="stat-icon dib flat-color-2">
                                    <i class="pe-7s-like2"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib">
                                        <div class="stat-text"><span class="count">13</span></div>
                                        <div class="stat-heading">Completed</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-five">
                                <div class="stat-icon dib flat-color-3">
                                    <i class="pe-7s-browser"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib">
                                        <div class="stat-text"><span class="count">8</span></div>
                                        <div class="stat-heading">In progress</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Widgets -->

            <div class="clearfix"></div>
            <!-- Orders -->
            <div class="orders">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">

                                <div>
                                    <div class="float-left">
                                        <h4 class="pb-3">My Tasks</h4>
                                    </div>
                                    {{-- @if ($message = session('message'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            {{ $message }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif --}}
                                    <div class="float-right">
                                        <a href="{{ url('createTaskForm') }}" class="btn btn-info">Create Task</a>
                                    </div>
                                    <div class="clearfix"></div>

                                </div>

                            </div>

                            <div class="card-body--">
                                <div class="table-stats order-table ov-h">
                                    <table class="table ">
                                        <thead>
                                            <tr>
                                                <th class="serial">#</th>

                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>Progress</th>
                                                <th>Status</th>
                                                <th>Edit</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($tasks as $task)
                                                <tr>
                                                    <td class="serial">{{ $task->id }}</td>

                                                    <td> <span class="name">{{ $task->title }}</span> </td>
                                                    <td> <span class="product">{{ $task->description }}</span>
                                                    </td>
                                                    <td><span class="count">{{ $task->progress . '%' }}</span></td>
                                                    <td>
                                                        @if ($task->status == 'complete')
                                                            <span class="badge badge-pending"
                                                                style="background:blue">{{ $task->status}}</span>
                                                        @else
                                                            <span class="badge badge-pending"
                                                                style="background:brown">{{ $task->status }}</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-complete"><a style="color:white"
                                                                href="{{ route('editTaskForm',['id'=>$task->id]) }}"> Edit </a></span>
                                                    </td>


                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div> <!-- /.table-stats -->
                            </div>
                        </div> <!-- /.card -->
                    </div> <!-- /.col-lg-8 -->

                </div>
                <!-- /.orders -->




            </div>
            <!-- .animated -->
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
    @endsection
