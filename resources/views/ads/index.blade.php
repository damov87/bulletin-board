@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="box">
                <div class="box-body table-responsive">
                    <table id="users" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>@lang('Id')</th>
                            <th>@lang('Author')</th>
                            <th>@lang('Image')</th>
                            <th>@lang('Title')</th>
                            <th>@lang('Description')</th>
                            <th>@lang('Publication Date')</th>
                        </tr>
                        </thead>
                        <tbody id="pannel">
                        @include('ads.table', compact('advertisements'))
                        </tbody>
                    </table>
                </div>
                <div id="pagination" class="box-footer">
                    {{ $advertisements->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection