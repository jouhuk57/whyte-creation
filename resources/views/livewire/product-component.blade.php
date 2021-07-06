<div class="aa-product-catg-body">
              <ul class="aa-product-catg">
                <!-- start single product item -->
                @foreach ($products as $product)
                <li>
                  <figure>
                    <a class="aa-product-img" href="{{route('product.details',['product_id'=>$product->id])}}"><img src="{{ asset ('/images/products') }}/{{$product->image}}" alt="{{$product->name}}" width="270"></a>
                    <figcaption>
                      <h4 class="aa-product-title"><a href="{{route('product.details',['product_id'=>$product->id])}}">{{$product->name}}</a></h4>
                    </figcaption>
                  </figure>                         
                  <div class="aa-product-hvr-content">
                   
                  </div>
                  <!-- product badge -->
                </li>  
                @endforeach                                    
              </ul>
              <!-- quick view modal -->                  
             
            </div>
       