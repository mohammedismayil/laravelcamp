{{-- @extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
<!-- home.blade.php --> --}}

{{-- @extends('master') --}}
   <!-- MDBootstrap Datatables  -->
   <link href="css/addons/datatables2.min.css" rel="stylesheet">

   <!-- MDBootstrap Datatables  -->
<script type="text/javascript" src="js/addons/datatables2.min.js"></script>

@extends('adminlte::page')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Dashboard
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <table id="pageTable" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Price</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($articles as $article)
                        <tr>
                            <td>
                                {{ $article->id }}
                            </td>
                            <td>
                                {{ $article->title }}
                            </td>
                            <td>
                                {{ $article->body }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>
    </div>
@endsection
@section('scripts')
    {{-- <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/jquery.dataTables.bootstrap.min.js') }}"></script> --}}
    <script type="text/javascript">
   
$(document).ready(function() {
  
  /* To hide column 2 and 3 */
  $('#tableID').DataTable( {
      "columnDefs": [
          {
              "targets": [ 2 ],
              "visible": false,
              "searchable": false
          },
          {
              "targets": [ 3 ],
              "visible": false
          }
      ]
  } );
} );
      </script>
    {{-- <script>
         jQuery(function($) {
        //initiate dataTables plugin
        var myTable = 
        $('#pageTable')
        //.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
        .DataTable( {
            bAutoWidth: false,
            "aoColumns": [
                null,
                null,
                null
            ],
            "aaSorting": [],
            
            
            //"bProcessing": true,
            //"bServerSide": true,
            //"sAjaxSource": "http://127.0.0.1/table.php"   ,
    
            //,
            //"sScrollY": "200px",
            "bPaginate": true,
    
            //"sScrollX": "100%",
            //"sScrollXInner": "120%",
            //"bScrollCollapse": true,
            //Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
            //you may want to wrap the table inside a "div.dataTables_borderWrap" element
    
            "iDisplayLength": 10
    
    
                select: {
                    style: 'multi'
                }
            });
        });
    </script> --}}
@endsection