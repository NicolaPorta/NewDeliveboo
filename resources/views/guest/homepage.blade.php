@extends('guest.layouts.main')

    @section('style & title')
        <link href="{{ asset('css/app2.css') }}" rel="stylesheet">
        <title>Home Page Deliveboo</title>
    @endsection

    @section('main')
        {{-- header --}}
        <header>    
          <div class="nav_bar" id="nav_bar_res">     
            <div class="cont_img" id="cont_img_res">
              <img src="{{ asset('images/logo.png') }}" alt="logo">
              <ul>
                <li>
                  <a href="{{route('homepage')}}">Home</a>
                </li>
                <li>
                  <a class="contacts" v-on:click="scrollContacts()">Contatti</a>
                </li>
              </ul>
            </div>
          
            <div class="cont_list" id="cont_list_res">
              @auth
              <div class="dropdown" id="dropdown_id">
                <button class="btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="user">{{ Auth::user()->name }}</span> 
                  <i id="hamb" class="fas fa-hamburger"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a id="blue-dropdown" class="dropdown-item" href="{{ route('admin.restaurants.index') }}">Dashboard</a>
                </div>
              </div>          
              {{-- </div> --}}
              @else
              <div class="dropdown" id="dropdown_id">
                <button class="btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="user">Lavora con noi</span>
                  <i id="hamb" class="fas fa-hamburger"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="{{ route('admin.restaurants.index') }}">Login</a>
                  <a class="dropdown-item" href="{{ route('register') }}">Registrati</a>
                </div>
              </div>  
              @endauth                        
            </div>
          </div>
          <div class="jumbotron" id="jumbotron_res">
            <div class="layover">
              <h1>Tutto il cibo che vuoi <br> quando vuoi <br> in un click </h1>
            </div>
          </div>
        </header>
        {{-- /header --}}

        {{-- main --}}
        <main>
          <div class="container_main">  
            {{-- Categories --}} 
            <div class="row_categories" id="row_categories_resp">
              <ul class="icons">
                <li id="icon_row" v-for="(category, index in categories" v-on:click="filterCategory(category.name)">
                  <h5 id="categ_name">@{{ category.name }}</h5>
                </li>
              </ul>
            </div>   
            {{-- Categories --}}
            
            {{-- all restaurants --}}   
            {{-- Restaurants --}}
            <div class="container" data-aos="zoom-in-up">
              <div class="row d-flex justify-content-center flex-wrap">
                <div class="card col-lg-3 col-md-5 col-sm-10 col-10 p-0" v-for="restaurant in restaurants">      
                  <img :src="'storage/' + restaurant.img" class="card-img-top" alt="...">
                  <div class="card-body d-flex flex-column justify-content-between">
                    <h2 class="card-title">@{{restaurant.name}}</h2>
                    <a :href="restaurant.slug" class="btn btn_orange">Menu</a>
                  </div>
                </div>
              </div>        
            </div>
            {{-- Restaurants --}}   

            <template v-if="restaurants.lenght >= 1">
              <div class="container d-flex justify-content-center flex-wrap">
                <div class="card col-lg-6" v-for="restaurant in restaurants">      
                  <img :src="'storage/' + restaurant.img" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h2 class="card-title">@{{restaurant.name}}</h2>
                    <a :href="restaurant.slug" class="btn btn_orange">Menu</a>
                  </div>
                </div>
              </div>
            </template>

            {{-- Banner failed searc --}}
            <template  v-else-if="notRestaurant === true">
              <div class="container no_result">
                <h1>Spiacenti <i class="fas fa-sad-tear"></i></h1>
                <h3>Nessun ristorante trovato per la categoria selezionata</h3>
              </div>
            </template>
            {{-- Banner failed searc --}}
          </div>
        </main>
        {{-- /main --}}

        {{--footer --}}
        <footer>
          <a id="contact"></a>
          <a id="register"></a>


          <div class="container_footer" id="cont_footer_resp">
            <div class="footer_left">
              <img src="{{asset('images/del-rider.jpg')}}" alt="">
            </div>

            <div class="footer_center" id="foot_cent_resp">
              <h3>TEAM DI SVILUPPO</h3>
              <ul>
                <li>
                  <a href="https://www.linkedin.com/in/nicola-porta-846ba6207/" class="btn btn-dark"><i class="fas fa-user-tie"></i>Nicola Porta</a>
                </li>
                <li>
                  <a href="https://www.linkedin.com/in/vincenzo-antignani-195710114/" class="btn btn-dark"><i class="fas fa-user-astronaut"></i>Vincenzo Antignani</a>
                </li>
                <li>
                  <a href="https://www.linkedin.com/in/marian-corlade-703958208/" class="btn btn-dark"><i class="fas fa-user-tag"></i>Marian Corlade</a>            
                </li>
                <li>
                  <a href="https://www.linkedin.com/in/cristian-mihai-trusca/" class="btn btn-dark"><i class="fas fa-user-ninja"></i>Cristian Mihai Trusca</a>
                </li>
                <li>
                  <a href="https://www.linkedin.com/in/matteopirovano/" class="btn btn-dark"><i class="fas fa-user-plus"></i>Matteo Pirovano</a>
                </li>
              </ul>
            </div>

            <div class="footer_right">
              <img src="{{ asset('images/del-app.jpg') }}" alt="app-phone">
            </div>

          </div>
        </footer>
        {{-- /footer --}}
    @endsection

    @section('script')
        <script src="{{asset('js/app.js')}}"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
          AOS.init(
            {
              offset: 200, // offset (in px) from the original trigger point
              delay: 0, // values from 0 to 3000, with step 50ms
              duration: 1000, // values from 0 to 3000, with step 50ms
            }
          );
        </script>
    @endsection