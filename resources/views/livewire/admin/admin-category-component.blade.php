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
    					All Category
    				    </div>
    					<div class="col-md-6">
    						<a href="{{route('admin.addcategory')}}" class="btn btn-success pull-right">
    						
                            New Category
                            </a>
    					</div>
                        </div>
    				</div>
    				<div class="panel-body">
					@if(Session::has('message'))
                    <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                    @endif
    					<table class="table table-striped">
    						<thead>
    							<th>Id</th>
    							<th>Category Name</th>
    							<th>Action</th>
    						</thead>
    						<tbody>
    							@foreach($categories as $category)
    							<tr>
    								<td>{{$category->id}}</td>
    								<td>{{$category->name}}</td>
    								<td><a href="{{route('admin.editcategory',['category_id'=>$category->id])}}" class="fa fa-edit fa-2x"></a>
									<a href="#" onclick="confirm('Are you sure, You want to delete this category ?') || event.stopImmediatePropagation()" wire:click.prevent="deleteCategory({{$category->id}})"> <i class="fa fa-times fa-2x text-danger"></a></td>
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

