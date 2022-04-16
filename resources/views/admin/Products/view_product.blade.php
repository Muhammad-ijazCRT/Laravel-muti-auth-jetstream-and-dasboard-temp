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

                <h1 class="text-center text-bold" style="font-size: 25px;">ADD PRODUCT </h1>



                <div class="col-md-8" style="color:aliceblue;">

                    <form method="post" action="add_product">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" style="color:#FFF;" id="discription" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Discription</label>
                            <input type="text" name="discription" style="color:#FFF;" id="discription"
                                class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="quantity" class="form-label">Quantity</label>
                            <input type="text" name="quantity" style="color:#FFF;" id="quantity" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">price</label>
                            <input type="text" name="price" style="color:#FFF;" id="price" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="discount_price" class="form-label">Discount_price</label>
                            <input type="text" name="discount_price" style="color:#FFF;" id="discount_price"
                                class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>

                {{-- tabel --}}

                <div class="row mt-5">
                    <table class="table table-dark table-striped">
                        <thead>
                            <tr style="color: #FFF;">
                                <th scope="col" style="color: #FFF;">ID</th>
                                <th scope="col" style="color: #FFF;">TITLE</th>
                                <th scope="col" style="color: #FFF;">DISCRIPTION</th>
                                <th scope="col" style="color: #FFF;">Quantity</th>
                                <th scope="col" style="color: #FFF;">PRICE</th>
                                <th scope="col" style="color: #FFF;">DISCOUNT PRICE</th>
                                <th scope="col" style="color: #FFF;">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $prod)
                                <tr>
                                    <th style="color: #FFF;" scope="row"> {{ $prod->id }} </th>
                                    <td style="color: #FFF;">{{ $prod->title }}</td>
                                    <td style="color: #FFF;">{{ $prod->discription }}</td>
                                    <td style="color: #FFF;">{{ $prod->quantity }}</td>
                                    <td style="color: #FFF;">{{ $prod->price }}</td>
                                    <td style="color: #FFF;">{{ $prod->discount_price }}</td>
                                    <td style="color: #FFF;">
                                        <a href="{{ url('/edit_product/' . $prod->id) }}"
                                            class="btn btn-primary">Edit</a>
                                        <a href="{{ url('/delete_product/' . $prod->id) }}"
                                            class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>



            </div>
        </div>


        <!-- container-scroller -->
        <!-- plugins:js -->
        @include('admin.scripts')
        <!-- End custom js for this page -->
</body>

</html>
