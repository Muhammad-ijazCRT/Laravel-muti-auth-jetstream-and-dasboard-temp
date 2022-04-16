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

        @include('admin.body')

        <!-- container-scroller -->
        <!-- plugins:js -->
        @include('admin.scripts')
        <!-- End custom js for this page -->
</body>

</html>
