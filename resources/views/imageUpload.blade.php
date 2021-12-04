<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 Multiple File Upload</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha256-NuCn4IvuZXdBaFKJOAcsU2Q3ZpwbdFisd5dux4jkQ5w=" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
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
		            <form method="post" action="/image-upload/store" enctype="multipart/form-data">
		              @csrf
		              <div class="input-group file-div control-group lst increment" >
		                <input type="file" name="image" class="myfrm form-control">
		                <div class="input-group-btn"> 
		                  <button class="btn btn-success add-btn" type="button"><i class="fldemo fa fa-plus"></i></button>
		                </div>
		              </div>
		              <div class="clone hide">
		                <div class="file-div control-group lst input-group" style="margin-top:10px">
		                  <input type="file" name="image" class="myfrm form-control">
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
<script type="text/javascript">
    $(document).ready(function() {
      $(".add-btn").click(function(){
          var lsthmtl = $(".clone").html();
          $(".increment").after(lsthmtl);
      });
      $("body").on("click",".btn-danger",function(){
          $(this).parents(".file-div").remove();
      });
    });
</script>
</body>
</html>