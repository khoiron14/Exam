@extends('layouts.app')
 
 @section('content')
 <div class="container">
     <div class="row">
         <div class="col-md-8 col-md-offset-2">
             <div class="panel panel-default">
                 <div class="panel-heading">Dashboard</div>
 
                 <div class="panel-body">
                     <div class="alert alert-success">
                         <p>
                            Selamat Datang 

                            <a href="{{ route('quest.show') }}" class="btn btn-primary">Mulai Ujian</a>

                         </p>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 @endsection