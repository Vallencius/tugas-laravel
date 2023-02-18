@extends('template.app')

@section('custom-css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"/>
<link href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap5.min.css"/>
@endsection

@section('content')
<div class="container pt-4">
  <h1 class="text-center">Booking Lists</h1>
  @if(session('status'))
    <div style="color:green; margin:auto; text-align:center;">
      {{ session('status') }}
    </div>
  @endif
  <a href="{{ route('home') }}" class="btn btn-primary">&laquo; Back</a>
  <table id="example" class="table table-striped" style="width:100%; border: 1px solid #555">
    <thead>
        <tr>
          <th>#</th>
          <th>Room Name</th>
          <th>Check In</th>
          <th>Check Out</th>
          <th>Status</th>
        </tr>
    </thead>
    <tbody>
      <?php $i = 1; ?>
      @foreach($bookings as $booking)
        <tr>
          <td>{{ $i++ }}</td>
          <td>{{ $booking->room['name'] }}</td>
          <td>{{ $booking->check_in }}</td>
          <td>{{ $booking->check_out }}</td>
          <td>{{ $booking->status == 1 ? 'Not Approved' : 'Not Approved' }}</td>
        </tr>
      @endforeach
    </tbody>
    <tfoot>
        <tr>
          <th>#</th>
          <th>Room Name</th>
          <th>Check In</th>
          <th>Check Out</th>
          <th>Status</th>
        </tr>
    </tfoot>
</div>
@endsection

@section('custom-js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script>
<script>
  $(document).ready(function () {
    $('#example').DataTable();
  });
</script>
@endsection