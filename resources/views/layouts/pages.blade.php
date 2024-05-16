<!DOCTYPE html>
<html lang="en">
@include('includes.head')

<body>
@include('includes.header')

    <div class="container-fluid">
        <main class="tm-main">
            <!-- Search form -->
            @include('includes.screach')

            @yield('content')

   
            @include('includes.footer')

