<div class="container">
    <div class="row">
        <div class="col-md-6 offset-3 mt-5">
            <div class="card mt-5">
                <div class="card-header text-center bg-primary">
                    <h2 class="text-white"> <strong>Multiple File Upload</strong></h2>
                </div>
                <div class="card-body">
                  @if ($message = Session::get('success'))
		            <div class="alert alert-success alert-block">
		                <button type="button" class="close" data-dismiss="alert">×</button>
		                <strong>{{ $message }}</strong>
		            </div>
		          @endif
		            @if (count($errors) > 0)
		                <ul class="alert alert-danger pl-5">
		                  @foreach($errors->all() as $error)
		                     <li>{{ $error }}</li> 
		                  @endforeach
		                </ul>
		            @endif
		            <form method="post" action="{{ route('multiple.file.upload.store') }}" enctype="multipart/form-data">
		              @csrf
		              <div class="input-group file-div control-group lst increment" >
		                <input type="file" name="files[]" class="myfrm form-control">
		                <div class="input-group-btn"> 
		                  <button class="btn btn-success add-btn" type="button"><i class="fldemo fa fa-plus"></i></button>
		                </div>
		              </div>
		              <div class="clone hide">
		                <div class="file-div control-group lst input-group" style="margin-top:10px">
		                  <input type="file" name="files[]" class="myfrm form-control">
		                  <div class="input-group-btn"> 
		                    <button class="btn btn-danger" type="button"><i class="fldemo fa fa-close"></i></button>
		                  </div>
		                </div>
		              </div>
		              <div class="row">
		                <div class="col-md-12 text-center mt-4">
		                  <button type="submit" class="btn btn-success rounded-0"><i class="fa fa-save"></i> Save</button>
		                </div>
		              </div>
		          </form>
                </div>
            </div>
        </div>
    </div>
</div>