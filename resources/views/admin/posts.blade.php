  <!-- Datatables CSS CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha256-aAr2Zpq8MZ+YA/D6JtRD3xtrwpEz2IqOS+pWD/7XKIw=" crossorigin="anonymous" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha256-OFRAJNoaD8L3Br5lglV7VyLRf0itmoBzWUoM+Sji4/8=" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">

  <!-- jQuery CDN -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Datatables JS CDN -->
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
   <!-- MDBootstrap Datatables  -->
   <link href="css/addons/datatables2.min.css" rel="stylesheet">
   <script>
    $(document).ready(function() {
      $('#tabledata').DataTable(
{
    "scrollY": "400px",
"scrollCollapse": true,
}

      );
    });
  </script>
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
            <div class="">
                <table id="tabledata"  class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Body</th>
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
