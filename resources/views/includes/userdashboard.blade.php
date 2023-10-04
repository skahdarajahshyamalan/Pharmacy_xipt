@if(Auth::check())
@if(Auth::check())
<h4><p class="text-center">List of users prescription detail</p></h4>
<?php 
$prescriptions = DB::table('prescriptions')->get();
?>
<table class="table caption-top">
    
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Note</th>
        <th scope="col">delivery address</th>
        <th scope="col">delivery time</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
        @php
            $i=1;
        @endphp
        @foreach ($prescriptions as $item)
            
       
      <tr>
        <th scope="row">{{$i++}}</th>
        <td>{{$item->note}}</td>
        <td>{{$item->deliveryaddress}}</td>
        <td>{{$item->delideliverytime}}</td>
        <td class="mr-auto">
            <div class="dropdown ">
                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">accept</a>
                    <a class="dropdown-item" href="#">reject</a>
                    
                </div>
            </div>
            
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endif
@endif