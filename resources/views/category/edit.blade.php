@extends('layouts.app')

@section('title')
Blog
@endsection

@section('brandname')
Blog
@endsection

@section('content1')
<!--------------for Blogs------------>
        <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="w3-theme panel-heading">Edit Blog</div>

                <div class="w3-theme-l4 panel-body">
                
                    {!!Form::model($blogid,array('route'=>array('category.update',$blogid->id),'method'=>'put','class'=>'form-horizontal'))!!}
                         
                        <div class="form-group">
                        {!!Form::label('category','Category',['class'=>'col-md-4 control-label'])!!}    

                            <div class="col-md-6">
                                {!!Form::text('category',null,['class'=>'form-control','required'])!!}
                            </div>

                             {!!Form::label('title','Title',['class'=>'col-md-4 control-label'])!!}

                            <div class="col-md-6">
                                {!!Form::textarea('title',null,['class'=>'form-control','style'=>'margin-top:10px','required'])!!}
                            </div>


                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                {!!Form::submit('Save',['class'=>'btn btn-primary'])!!}    
                            </div> 
                        </div>
                    
                    {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
<!--End blog section -->
@endsection