
<div>
	<style type="text/css">
	nav svg{
		height: 20px;
	}
	nav .hidden{

		display: block !important;
	}	
	</style>
    <div class="container" style="padding:30px 0;">
    	<div class="row">
    		<div class="col-md-12">
    			<div class="panel panel-default">
    				<div class="panel-heading">
                    <div class="row">
                    <div class="col-md-6">
    					All Products
    				    </div>
    					<div class="col-md-6">
    						<a href="{{route('admin.addproduct')}}" class="btn btn-success pull-right">
    						
                            New Product
                            </a>
    					</div>
                        </div>
    				</div>
    				<div class="panel-body">
					@if(Session::has('message'))
                    <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>\
                    @endif
    					<table class="table table-striped">
    						<thead>
    							<th>Id</th>
    							<th>Image</th>
    							<th>Name</th>
								<th>Category</th>
								<th>Date</th>
    							<th>Action</th>
    						</thead>
    						<tbody>
    							@foreach($products as $product)
    							<tr>
    								<td>{{$product->id}}</td>
    								<td><img src="{{ asset ('images/products') }}/{{$product->image}}" width="60"/></td>
    								<td>{{$product->name}}</td>
    								<td>{{$product->category->name}}</td>
    								<td>{{$product->created_at}}</td>
    								<td><a href="{{route('admin.editproduct',['product_id'=>$product->id])}}" class="fa fa-edit fa-2x"></a>
									<a href="#" onclick="confirm('Are you sure, You want to delete this category ? ') || event.stopImmediatePropagation()" wire:click.prevent="deleteProduct({{$product->id}})"> <i class="fa fa-times fa-2x text-danger"></a></td>
    							</tr>
    							@endforeach
    						</tbody>
    					</table>
	

    				</div>
    				

    			</div>
    			
    		</div>



    	  </div>
    
    </div>
</div>


