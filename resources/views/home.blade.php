@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <button type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#exampleModal">
                Add Child
            </button>
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                   <table  class="table table-striped">
                       <tbody>
                           @foreach ($children as $child)
                            <tr>
                                <td>{{ $child->first_name }} {{ $child->last_name }}</td>
                                <td>
                                    <a href="{{ route('children.show', $child->id) }}" class="btn btn-outline-primary btn-sm">View</a>
                                </td>
                                <td>
                                    <form action="{{ route('children.destroy', $child->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-outline-danger btn-sm" type="submit">Delete</button>
                                    </form>
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


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Child</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('children.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input type="text" id="first_name" name="first_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last Name</label>
                        <input type="text" id="last_name" name="last_name" class="form-control">
                    </div>
                    <button class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@include('sweetalert::alert')
@endsection
