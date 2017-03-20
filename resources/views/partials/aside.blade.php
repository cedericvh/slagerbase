<aside class="col-sm-5 col-lg-3">
    <div class="sidebar-wrap">
        <ul>
            <li><a href="{{ route('client.orders.index') }}">BESTEL HIER ONLINE ></a></li>
        </ul>          
            <div class="promo">
               <h2>
                 &#42;&#42;Promo&#42;&#42;
              </h2>
                <div class="custom">
                    @foreach ($promoties as $promotie)                  
                    <article>
                      <h4>
                        {!!$promotie->titel!!}
                      </h4>
                      <section>
                        {!! $promotie->body !!}
                      </section>
                    </article>
                  
                    @endforeach
                </div>
            </div>
        
    </div> <!-- end sidebar-wrap -->
</aside>
