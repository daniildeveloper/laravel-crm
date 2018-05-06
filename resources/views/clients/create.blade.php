@extends('adminlte::page')

@section('title', __('admin.client.new'))

@section('content_header')
    <h1>{{__('admin.client.new')}}</h1>
@endsection

@section('content')
    <section class="content">
      <div class="row">
    <!-- right column -->
        <div class="col-md-6">
          <!-- /.box -->
          <!-- general form elements disabled -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"> {{__('admin.client.new')}} </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" action="{{ route('client.store') }}" method="POST">
                <!-- text input -->
                {{ csrf_field() }}
                <div class="form-group">
                  <label>{{__('data.name')}}</label>
                  <input name="name" type="text" class="form-control" placeholder="{{__('data.name')}}">
                </div>

                <div class="form-group">
                  <label>{{__('data.phone')}}</label>
                  <input name="phone" type="text" class="form-control" placeholder="{{__('data.phone')}}">
                </div>
                <div class="form-group">
                  <label>{{__('data.email')}}</label>
                  <input name="email" type="text" class="form-control" placeholder="{{__('data.email')}}">
                </div>

                <!-- textarea -->
                <div class="form-group">
                  <label> {{ __('data.notes') }} </label> 
                  <textarea name="notes" class="form-control" rows="3" placeholder="{{ __('data.notes') }}"></textarea>
                </div>

                <div class="form-group">
                    <button class="btn btn-success">{{__('data.create') }}</button>
                </div>
              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
</div>
</section>

@endsection