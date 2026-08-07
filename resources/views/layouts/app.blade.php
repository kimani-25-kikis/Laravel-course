@extends('layouts.clean')

    
    @section('childContent')
    @include('layouts.partials.header')
    @yield('content')
      <footer>
        @yield('footerLinks')
      </footer>
    @endsection
    

    
