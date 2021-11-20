
@extends('pages\base')

@section('content')


@if($info = Session::get('info'))  

<div class="card">
  <div class="card-body bg-light text-light">
    {{$info}}
  </div>
</div>
    
@endif
<div class="add">
<div class="float-right">
  <a href="{{url('/review/create')}}"  class = "btn btn-dark">
    Add New Review
  </a>
</div>
</div>
     <h1>Review</h1>       
        <table class="table table-striped" >
            <thead class ="table table-bordered table-striped table-dark">
                <tr class="bg-info" >
                    <th>Review Name</th>
                    <th>Email</th>
                    <th>Message </th>
                    <th>Rating </th>
                </tr>
            </thead>
            <tbody class = "table-striped table-warning">
                    <?php foreach ($review as $r): ?> 
                     <tr>
                         
                
                             <td><?= $r->name ?> </td>
                             <td><?= $r->email ?> </td>
                             <td><?= $r->message ?> </td>
                             <td><?= $r->rating ?> </td>                        
                     </tr>               
                    <?php endforeach; ?>                   
            </tbody>
        </table>

    </div>
</body>
@endsection