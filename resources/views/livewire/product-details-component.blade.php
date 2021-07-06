<section id="aa-product-details">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-product-details-area">
            <div class="aa-product-details-content">
              <div class="row">
                <!-- Modal view slider -->
                <div class="col-md-5 col-sm-5 col-xs-12">                              
                  <div class="aa-product-view-slider">                                
                    <div id="demo-1" class="simpleLens-gallery-container">
                      <div class="simpleLens-container">
                        <div class="simpleLens-big-image-container"><a data-lens-image="{{ asset ('/images/products') }}/{{$product->image}}" class="simpleLens-lens-image"><img src="{{ asset ('/images/products') }}/{{$product->image}}" class="simpleLens-big-image"></a></div>
                      </div>
                      @php
                      $images=explode(",",$product->images);
                      $i=0;
                      @endphp
                      <div class="simpleLens-thumbnails-container">
                          @foreach($images as $image)
                          @if($i>0)
                          <a data-big-image="{{ asset ('/images/products') }}/{{$image}}" data-lens-image="{{ asset ('/images/products') }}/{{$image}}" class="simpleLens-thumbnail-wrapper" href="#">
                            <img src="{{ asset ('/images/products') }}/{{$image}}" width="60">
                          </a> 
                          @endif  
                          @php
                          $i++;
                          @endphp                                 
                           @endforeach
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Modal view content -->
                <div class="col-md-7 col-sm-7 col-xs-12">
                  <div class="aa-product-view-content">
                    <h3>{{$product->name}}</h3>
                    <div class="aa-price-block">
                    </div>
                    <p>{{$product->description}}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div> 
            </div>  
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / product category -->
