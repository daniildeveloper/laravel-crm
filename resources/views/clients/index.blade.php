@extends('adminlte::page')

@section('title', __('admin.client.all'))

@section('content_header')
    <h1>{{__('admin.client.all')}}</h1>
    <br>
    <a href="{{route('client.create')}}" class="btn btn-success">{{ __('admin.client.new') }}</a>
@endsection

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
            <div class="box-header">
              <h3 class="box-title">{{__('admin.client.all')}}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>{{ __('data.name') }}</th>
                  <th>{{ __('data.phone')}} </th>
                  <th>{{ __('data.email') }}</th>
                  <th>{{ __('data.actions') }} </th>
                </tr>
                </thead>
                <tbody>
                @foreach($clients as $client)
                    <tr>
                      <td>{{ $client->name }}</td>
                      <td>
                        {{ $client->phone }}
                      </td>
                      <td>{{ $client->email }}</td>
                      <td>
                          <a href="{{ route('client.edit', $client->id)}}" class="btn btn-success">
                              <i class="fa fa-edit"></i>
                          </a>
                      </td>
                    </tr>
                @endforeach

                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
    </div>
@endsection