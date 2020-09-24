@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-12">
            <div class="card">
               <div class="card-header">{{ __('Users') }}</div>

               <div class="card-body">
                  <div class="row d-flex justify-content-center">
                     <table class="col-md-10 text-center table-bordered table-striped">
                        <thead>
                           <tr>
                              <th>No</th>
                              <th>Nama</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach ($users as $i => $user)
                              <tr>
                                 <td>{{ $i+1 }}</td>
                                 <td>{{ $user->name }}</td>
                                 <td>
                                    <div class="btn btn-group">
                                       <a class="btn btn-sm btn-success" href="{{ route('certificate', $user->id) }}">
                                          Certificate
                                       </a>
                                       <a class="btn btn-sm btn-info" href="{{ route('print.certificate', $user->id) }}">
                                          Print
                                       </a>
                                    </div>
                                 </td>
                              </tr>
                           @endforeach
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
      </div>
   </div>
</div>
@endsection
