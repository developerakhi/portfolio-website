@extends('layouts.admin_layout')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">List of Portfolios</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">List of Portfolios</li>
            </ol>
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Sub Title</th>
                    <th>Big Image</th>
                    <th>Small Image</th>
                    <th>Description</th>
                    <th>Client</th>
                    <th>Category</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                    @if (count($portfolios) > 0)
                        @foreach ($portfolios as $portfolio)
                            <tr>
                                <td scope="row">{{$portfolio->id}}</td>
                                <td>{{$portfolio->title}}</td>
                                <td>{{$portfolio->sub_title}}</td>
                                <td>
                                    <img style="height: 10vh" src="{{url($portfolio->big_img)}}" alt="big_img">
                                </td>
                                <td>
                                    <img style="height: 10vh" src="{{url($portfolio->small_img)}}" alt="small_img">
                                </td>
                                <td>{{Str::limit(strip_tags($portfolio->description), 40)}}</td>
                                <td>{{$portfolio->client}}</td>
                                <td>{{$portfolio->category}}</td>
                                <td>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <a href="{{route('admin.portfolios.edit', $portfolio->id)}}" class="btn btn-primary btn-sm">Edit</a>
                                        </div>
                                        <div class="col-sm-4">
                                            <form action="{{route('admin.portfolios.destroy', $portfolio->id)}}" method="POST">
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
               
                  