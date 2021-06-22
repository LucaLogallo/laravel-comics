<header>
  <div class="box60">
    <div class="row due">
      {{-- box che ha altezza 20px background color : #0282f9 --}}
      <span>DC POWER<span>sm</span>VISA</span>
      <span>ADDITIONAL DC SITES </span>
    </div>
    <div class="row due">
      <div>
        {{-- div che contiene il logo dic --}}
        <img src="" alt="">
      </div>
      <div>
        <ul>
          <li>
            <a class="{{(request()->is('/Characters')) ? 'active' : ''}}" href="{{route('Characters')}}">Characters</a>
          </li>
          <li>
            <a class="{{(request()->is('/Comics')) ? 'active' : ''}}" href="{{route('Comics')}}">Comics</a>
          </li>
          <li>
            <a class="{{(request()->is('/Movies')) ? 'active' : ''}}" href="{{route('Movies')}}">Movies</a>
          </li>
          <li>
            <a class="{{(request()->is('/Tv')) ? 'active' : ''}}" href="{{route('Tv')}}">Tv</a>
          </li>
          <li>  
            <a class="{{(request()->is('/Games')) ? 'active' : ''}}" href="{{route('Games')}}">Games</a>
          </li>
          <li>
            <a class="{{(request()->is('/Collectibles')) ? 'active' : ''}}" href="{{route('Collectibles')}}">Collectibles</a>
          </li>
          <li>
            <a class="{{(request()->is('/Videos')) ? 'active' : ''}}" href="{{route('Videos')}}">Videos</a>
          </li>
          <li>  
            <a class="{{(request()->is('/Fans')) ? 'active' : ''}}" href="{{route('Fans')}}">Fans</a>
          </li>
          <li>
            <a class="{{(request()->is('/News')) ? 'active' : ''}}" href="{{route('News')}}">News</a>
          </li>
          <li>
            <a class="{{(request()->is('/Shop')) ? 'active' : ''}}" href="{{route('Shop')}}">Shop</a>
          </li>
        </ul>
      </div>
      <div>
        <span>ricerca</span>
      </div>
    </div>
  </div>

</header>