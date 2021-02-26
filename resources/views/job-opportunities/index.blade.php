@extends('layout.master')
@section('title')
  Careers and Job Listings
@endsection

@section('content')
  <br />
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th width="15%">Company Name</th>
                  <th width="15%">Title</th>
                  <th width>Description</th>
                  <th width="10%">Salary Grade</th>
                  <th width="10%"></th>

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
                  @foreach($jobs as $job)
                    <tr>
                      <td>{{ $job->company_id }}</td>
                      <td>{{ $job->name }}</td>
                      <td>{{ $job->description }}</td>
                      <td>{{ $job->type }}</td>
                      <td></td>
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