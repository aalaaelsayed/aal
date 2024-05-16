<!DOCTYPE html>
<html lang="en">
@include('includes.head')

<body>
@include('includes.header')

    <div class="container-fluid">
        <main class="tm-main">
            <!-- Search form -->
            @include('includes.screach')

            <div class="row tm-row">
            @include('includes.posts')

            </div>
            @include('includes.pages')
   
            @include('includes.footer')

            @section('title')
	
            BLOG    
            @endsection