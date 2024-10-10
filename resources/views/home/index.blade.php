<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.css')
</head>

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->

    @include('home.header')

    @include('home.body')

    @include('home.footer')

</body>

</html>
