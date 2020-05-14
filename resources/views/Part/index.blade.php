@extends('layout')

@section('title', 'ASD')

@section('content')
    <div class="span9">
		<div class="content">
			<div class="module">
				<div class="module-head">
                
                    <div align="right">
                        <!-- <a href="{{action('PartController@create')}}" class="btn btn-primary">Add</a> -->

                        <br />
                        <br />
                    </div>
                    <table class="table table-bordered table-striped">
                        </thead>
                            <tr>
                                <th>Cod</th>
                                <th>Denumire</th>
                                <th>Cantitate</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                         @foreach($parts as $part) 
                            <tr>
                                <td> {{ $part["cod"] }}</td>
                                <td> {{ $part["denumire"] }}</td>
                                <td> {{ $part["cantitate"] }}</td>
                                <td><button class="btn btn-info" data-cod="{{$part->cod}}" data-denumire="{{$part->denumire}}" data-cantitate="{{$part->cantitate}}" data-toggle="modal" data-target="#edit">Editeaza</button></td>
                                <td>{!! Form::open(['method' => 'Delete', 'route' => ['Part.destroy', $part->id ?? '']]) !!}
                                    <button type="submit" class="btn btn-primary">Delete</button>
                                {!! Form::close() !!}</td>

                            </tr>
                        @endforeach
                            <tr id="myDIV">
                                <form action="submitpiese" method="POST">
                                @csrf
                                    <td><input type="text"  class="col-2" size="10"   maxlength="17"  name="cod" /> </td>
                                    <td><input type="text"  class="col-5"  size="10"   maxlength="17" name="denumire" /> </td>
                                    <td><input type="text"  class="col-5" size="10"   maxlength="17"  name="cantitate" /> </td>
                                    <td></td>
                                    <td><button type="submit" class="btn btn-primary">Adauga</button></td>
                                </form>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <table class="table table-striped table-bordered" id="myTable" cellspacing="0" width="100%">
    <thead class="thead-dark">
      <tr>
        <th>#</th>
        <th> Name</th>
        <th> Description</th>
        <th> Action</th>
      </tr>
    </thead>
    <tbody>
      <tr class="data-row">
        <td class="align-middle iteration">1</td>
        <td class="align-middle name">Name 1</td>
        <td class="align-middle word-break description">Description 1</td>
        <td class="align-middle">
          <button type="button" class="btn btn-success" id="edit-item" data-item-id="1">edit</button>
        </td>
      </tr>
    </tbody>
  </table>

  <div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="edit-modal-label" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="edit-modal-label">Edit Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="attachment-body-content">
        <form id="edit-form" class="form-horizontal" method="POST" action="">
          <div class="card text-white bg-dark mb-0">
            <div class="card-header">
              <h2 class="m-0">Edit</h2>
            </div>
            <div class="card-body">
              <!-- id -->
              <div class="form-group">
                <label class="col-form-label" for="modal-input-id">Id (just for reference not meant to be shown to the general public) </label>
                <input type="text" name="modal-input-id" class="form-control" id="modal-input-id" required>
              </div>
              <!-- /id -->
              <!-- name -->
              <div class="form-group">
                <label class="col-form-label" for="modal-input-name">Name</label>
                <input type="text" name="modal-input-name" class="form-control" id="modal-input-name" required autofocus>
              </div>
              <!-- /name -->
              <!-- description -->
              <div class="form-group">
                <label class="col-form-label" for="modal-input-description">Email</label>
                <input type="text" name="modal-input-description" class="form-control" id="modal-input-description" required>
              </div>
              <!-- /description -->
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Done</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<script>
$(document).ready(function() {
  /**
   * for showing edit item popup
   */

  $(document).on('click', "#edit-item", function() {
    $(this).addClass('edit-item-trigger-clicked'); //useful for identifying which trigger was clicked and consequently grab data from the correct row and not the wrong one.

    var options = {
      'backdrop': 'static'
    };
    $('#edit-modal').modal(options)
  })

  // on modal show
  $('#edit-modal').on('show.bs.modal', function() {
    var el = $(".edit-item-trigger-clicked"); // See how its usefull right here? 
    var row = el.closest(".data-row");

    // get the data
    var id = el.data('item-id');
    var name = row.children(".name").text();
    var description = row.children(".description").text();

    // fill the data in the input fields
    $("#modal-input-id").val(id);
    $("#modal-input-name").val(name);
    $("#modal-input-description").val(description);

  })

  // on modal hide
  $('#edit-modal').on('hide.bs.modal', function() {
    $('.edit-item-trigger-clicked').removeClass('edit-item-trigger-clicked')
    $("#edit-form").trigger("reset");
  })
})
</script>

@endsection


