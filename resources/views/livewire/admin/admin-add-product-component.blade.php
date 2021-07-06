<div class="container" style="padding:30px 0;">
    	<div class="row">
    		<div class="col-md-12">
    			<div class="panel panel-default">
    				<div class="panel-heading">
                     <div class="row">
    					<div class="col-md-6">
    					Add New Product
    				    </div>
    					<div class="col-md-6">
    						<a href="{{route('admin.products')}}" class="btn btn-success pull-right">
    						All Product
                            </a>
    					</div>
                        </div>
    				</div>
    				<div class="panel-body">
                    @if(Session::has('message'))
                    <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                    @endif
    					<form class="form-horizontal" wire:submit.prevent="addProduct">



    						<div class="form-group">
    						<label class="col-md-4 control-label">Product Name *</label>
    						<div class="col-md-4">
    							<input type="text" name="" placeholder="Product Name" class="form-control input-md" wire:model="name">
								@error('name') <p class="text-danger">{{$message}}</p> @enderror
							</div>
                            </div>

                            <div class="form-group" wire:ignore>
    						<label class="col-md-4 control-label">Description *</label>
    						<div class="col-md-4">
    							<textarea class="form-control" id="description" placeholder="Description" wire:model="description"></textarea>
								@error('description') <p class="text-danger">{{$message}}</p> @enderror
							</div>
                            </div>

                            <div class="form-group">
    						<label class="col-md-4 control-label" >Product Image *</label>
    						<div class="col-md-4">
    							<input type="file" class="input-file" wire:model="image">
    							@if($image)
    							<img src="{{$image->temporaryUrl()}}" width="120"/>
    							@endif
								@error('image') <p class="text-danger">{{$message}}</p> @enderror
    						</div>
                            </div>


                            <div class="form-group">
    						<label class="col-md-4 control-label" >Product Gallery *</label>
    						<div class="col-md-4">
    							<input type="file" class="input-file" wire:model="images" multiple>
    							@if($images)
                                @foreach($images as $image)
    							<img src="{{$image->temporaryUrl()}}" width="120"/>
                                @endforeach
    							@endif
								@error('images') <p class="text-danger">{{$message}}</p> @enderror
    						</div>
                            </div>


                            <div class="form-group">
    						<label class="col-md-4 control-label">Category *</label>
    						<div class="col-md-4">
    							<select class="form-control" wire:model="category_id" wire:click="getSubcategory()">
    								<option value="">Select Category</option>
    								@foreach($categories as $category)
    								<option value="{{$category->id}}">{{$category->name}}</option>
    								@endforeach
    							</select>
								@error('category_id') <p class="text-danger">{{$message}}</p> @enderror
    						</div>
                            </div>


                            @if (!is_null($category_id))
                            <div class="form-group">
    						<label class="col-md-4 control-label">Sub Category *</label>
    						<div class="col-md-4">
    							<select class="form-control" wire:model="subcategory_id">
    								<option value="">Select Category</option>
    								@foreach($subcategories as $category)
    								<option value="{{$category->id}}">{{$category->name}}</option>
    								@endforeach
    							</select>
    						</div>
                            </div>

                            @endif



    						<div class="form-group">
    						<label class="col-md-4 control-label"></label>
    						<div class="col-md-4">
    							<button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            </div>
    					</form>
	                    

    				</div>
    				

    			</div>
    			
    		</div>



    	  </div>
    
    </div>
