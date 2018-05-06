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
              <form role="form">
                <!-- text input -->
                <div class="form-group">
                  <label>{{__('data.name')}}</label>
                  <input name="name" type="text" class="form-control" placeholder="{{__('data.name')}}">
                </div>
                <div class="form-group">
                  <label>Text Disabled</label>
                  <input type="text" class="form-control" placeholder="Enter ..." disabled>
                </div>

                <!-- textarea -->
                <div class="form-group">
                  <label>Textarea</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                </div>
                <div class="form-group">
                  <label>Textarea Disabled</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..." disabled></textarea>
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