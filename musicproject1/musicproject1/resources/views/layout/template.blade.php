<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MusicMe</title>
   <style>
    .logo{
      font-size: 24px;
        color: #ffeb3b;

    }
   </style>


  </head>
  <body>
    
    
     <header>
      <div class="logo">
        MusicMe
        <hr>
        <div style="font-size: 12px; color: #ffff;">
            {{$username}}
        </div>
    </div>
   
     
        <nav>
            <ul>
                <li><a href="{{('home')}}">Homepage</a></li>
                <li><a href="{{route('course')}}">Course</a></li>
                <li><a href="{{route('cord')}}">Chord</a></li>
                <li><a href="{{route('contact')}}">Contact</a></li>
                <li><a href="{{route('profil')}}">Profil</a></li>
                {{-- <li><a href="">{{$username}}</a></li> --}}
              
                <li>
                 
                  
                  <a href="{{route('logout')}}">logout</a>
                  
                </li>
            </ul>
        </nav>
    </header>

   
      <!-- Page content -->
    @yield('content')




  </body>
  </html>