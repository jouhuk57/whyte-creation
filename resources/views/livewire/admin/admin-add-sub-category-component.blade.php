
    <div class="container" style="padding:30px 0;">
    	<div class="row">
    		<div class="col-md-12">
    			<div class="panel panel-default">
    				<div class="panel-heading">
                     <div class="row">
    					<div class="col-md-6">
    					Add New Sub Category
    				    </div>
    					<div class="col-md-6">
    						<a href="{{route('admin.subcategories')}}" class="btn btn-success pull-right">
    						All Sub Categories
                            </a>
    					</div>
                        </div>
    				</div>
    				<div class="panel-body">
                    @if(Session::has('message'))
                    <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                    @endif
    					<form class="form-horizontal" wire:submit.prevent="storeCategory">
    						<div class="form-group">
    						<label class="col-md-4 control-label">Sub Category Name</label>
    						<div class="col-md-4">
    							<input type="text" name="" placeholder="Category Sub Name" class="form-control input-md" wire:model="subcategory" >
								@error('subcategory') <p class="text-danger">{{$message}}</p> @enderror
    						</div>
                            </div>

                            <div class="form-group">
    						<label class="col-md-4 control-label">Category *</label>
    						<div class="col-md-4">
    							<select class="form-control" wire:model="category">
    								<option value="">Select Category</option>
    								@foreach($categories as $category)
    								<option value="{{$category->id}}">{{$category->name}}</option>
    								@endforeach
    							</select>
								@error('category') <p class="text-danger">{{$message}}</p> @enderror
    						</div>
                            </div>

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
