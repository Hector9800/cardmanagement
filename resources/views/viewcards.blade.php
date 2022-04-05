<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employee Card Manager</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css' />
  <link rel='stylesheet'
    href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css' />
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.css" />

</head>



<body class="bg-light">
  <div class="container">
    <div class="row my-5">
      <div class="col-lg-12">
        <div class="card shadow">
          <div class="card-header bg-danger d-flex justify-content-between align-items-center">
            <h3 class="text-light">Employees Card</h3>
            
              <a href="{{ url('/')}}"><button class="btn btn-light"><i></i>Back</button></a>
          </div><br>
          <div class="grid-container">
                     
           
            @foreach ($collection as $object)
            <div class="grid-item" style="width: 18rem;display: grid;">
  <img class="card-img-top" src="storage/images/{{ $object->avatar }}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><b>Name :- </b>{{ $object->first_name }} {{ $object->last_name }}</h5>
    <p class="card-text"><b>Email :- </b>{{ $object->email }} <br> <b>Contact :- </b>{{ $object->phone }} <br> <b>Address :- </b>{{ $object->address }}<br></p>
    <a href="{{ url('/')}}" class="btn btn-primary">Edit | Delete</a>
  </div>
</div>
@endforeach



<style>

.grid-container {
  display: grid;
  grid-template-columns: auto auto auto;
}

</style>



           
           
           
           
           
           
            

          </div>
        </div>
      </div>
    </div>
  </div>
  
</body>

</html>