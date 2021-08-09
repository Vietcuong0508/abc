@extends('layout.master-layout')
@section('content')
    <div class="data-table-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sparkline13-list">
                        <div class="sparkline13-hd">
                            <div class="main-sparkline13-hd">
                                <h1 class="text-center">Book</h1>
                            </div>
                        </div>
                        <div class="sparkline13-graph">
                            <div class="datatable-dashv1-list custom-datatable-overright">
                                <div class="breadcome-heading">
                                    <form id="form-filter">
                                        <div class="col-md-3 form-group">
                                            <input type="text" name="search" placeholder="Search..." class="search-int form-control" id="search">
                                        </div>
                                    </form>
                                </div>
                                <table id="table" data-toggle="table" data-pagination="true" data-toolbar="#toolbar">
                                    <thead>
                                    <tr>
                                        <th>Book ID</th>
                                        <th>Author ID</th>
                                        <th>Title</th>
                                        <th>ISBN</th>
                                        <th>Pub year</th>
                                        <th>Available</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($list as $event)
                                        <tr>
                                            <td>{{$event->bookid}}</td>
                                            <td>{{$event->authorid}}</td>
                                            <td>{{$event->title}}</td>
                                            <td>{{$event->ISBN}}</td>
                                            <td>{{$event->pub_year}}</td>
                                            <td>{{$event->available}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <div class="row">
                                    @if ($list->lastPage() > 1)
                                        <ul class="pagination">
                                            <li class="{{ ($list->currentPage() == 1) ? ' disabled' : '' }}">
                                                <a href="{{ $list->url(1) }}">Previous</a>
                                            </li>
                                            @for ($i = 1; $i <= $list->lastPage(); $i++)
                                                <li class="{{ ($list->currentPage() == $i) ? ' active' : '' }}">
                                                    <a href="{{ $list->url($i) }}">{{ $i }}</a>
                                                </li>
                                            @endfor
                                            <li class="{{ ($list->currentPage() == $list->lastPage()) ? ' disabled' : '' }}">
                                                <a href="{{ $list->url($list->currentPage()+1) }}">Next</a>
                                            </li>
                                        </ul>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

