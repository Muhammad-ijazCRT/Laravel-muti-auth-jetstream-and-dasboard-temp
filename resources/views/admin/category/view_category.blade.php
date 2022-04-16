<x-app-layout>
</x-app-layout>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- css tags -->
    @include('admin.css')
    <!-- css  tags -->

</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->


        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')
        <!-- partial -->

        {{-- @include('admin.body') --}}
        <div class="main-panel">
            <div class="content-wrapper">

                <h1 class="text-center text-bold" style="font-size: 25px;"> CREATE NEW CATEGORY </h1>



                <form method="POST" action=" {{ url('add_category') }} ">
                    @csrf
                    <div class="">
                        <label for="name" class="form-label">Category Name</label>
                        <input type="text" class="form-control" style="padding: 7px; color:aliceblue;"
                            placeholder="Enter Category Name" name="name">
                    </div>
                    <div class=" text-right">
                        <button type="submit" class="btn mt-3 btn-primary">Submit</button>
                    </div>

                </form>

                <table class="table mt-3" style="background-color:aliceblue;">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Category Name</th>
                            <th></th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($category as $cat)
                            <tr>
                                <th scope="row"> {{ $cat->id }} </th>
                                <td>{{ $cat->name }}</td>
                                <td></td>
                                <td>
                                    <a href="{{ url('edit_category') }}" class="btn btn-primary">Edit</a>
                                    <a href="{{ url('delete_category') }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>




            </div>
        </div>


        <!-- container-scroller -->
        <!-- plugins:js -->
        @include('admin.scripts')
        <!-- End custom js for this page -->
</body>

</html>
