@extends('layouts.admin_layout')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">List of Abouts</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">List of Abouts</li>
            </ol>
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Title 1</th>
                    <th>Title 2</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                    @if (count($abouts) > 0)
                        @foreach ($abouts as $about)
                            <tr>
                                <td scope="row">{{$about->id}}</td>
                                <td>{{$about->title1}}</td>
                                <td>{{$about->title2}}</td>
                                <td>
                                    <img style="height: 10vh" src="{{url($about->img)}}" alt="img">
                                </td>
                                <td>{{Str::limit(strip_tags($about->description), 40)}}</td>
                                <td>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <a href="{{route('admin.abouts.edit', $about->id)}}" class="btn btn-primary btn-sm">Edit</a>
                                        </div>
                                        <div class="col-sm-4">
                                            <form action="{{route('admin.abouts.destroy', $about->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" name="submit" value="Delete" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
                                            </form>
                                        </div>
                                    </div>     
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
              </table>
        </div>
    </main>            
@endsection
               
                  