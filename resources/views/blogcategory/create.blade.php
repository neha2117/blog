@extends('category.create')

@section('content2')
<!--------------for Blogs------------>
        <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="w3-theme panel-heading">Add Category</div>

                <div class="w3-theme-l4 panel-body">
                
                    {!!Form::open(array('route'=>'blogcategory.store','class'=>'form-horizontal'))!!}
                         
                        <div class="form-group">
                        {!!Form::label('category','Category',['class'=>'col-md-4 control-label'])!!}    

                            <div class="col-md-6">
                                {!!Form::text('category',null,['class'=>'form-control','required'])!!}
                            </div>

                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                {!!Form::submit('Add Category',['class'=>'btn btn-primary'])!!}
                                <a class="btn btn-primary" href="/blogcategory" >Show Category</a>
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