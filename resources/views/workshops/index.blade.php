@extends('layout.master')
@section('title')
  Workshops
@endsection

@section('content')
  <br />
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th width="15%">Workshop Name</th>
                  <th width="15%">Date</th>
                  <th width="15%">Time</th>
                  <th width>Description</th>
                  <th width="10%">Location</th>

                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Company Name</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Type</th>
                  <th></th>

                </tr>
              </tfoot>
              <tbody>
                  @foreach($workshops as $workshop)
                    <tr>
                      <td>{{ $workshop->name }}</td>
                      <td>{{ $workshop->date }}</td>
                      <td>{{ $workshop->time }}</td>
                      <td>{{ $workshop->description }}</td>
                      <td>{{ $workshop->location }}</td>
                    </tr>
                  @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container-fluid -->
  </div>
@endsection