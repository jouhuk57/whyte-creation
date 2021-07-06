<section id="menu">
    <div class="container">
      <div class="menu-area">
        <!-- Navbar -->
        <div class="navbar navbar-default" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>          
          </div>
          <div class="navbar-collapse collapse">
            <!-- Left nav -->
            <ul class="nav navbar-nav">
              <li><a href="index.html">Home</a></li>
              @foreach($categories as $category)
              <li><a href="#">{{$category->name}} <span class="caret"></span></a>
              @php
			  $subcategory=DB::table('categories')->where('parent_id',$category->id)->get();
			  @endphp
                 
                 
                <ul class="dropdown-menu">  
                @foreach($subcategory as $subcategory)              
                  <li><a href="#">{{$subcategory->name}}</a></li>
                @endforeach
                </ul>
              </li>
              @endforeach
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>       
    </div>
  </section>