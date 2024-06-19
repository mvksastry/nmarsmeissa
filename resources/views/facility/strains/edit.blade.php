@extends('layouts.app')
@section('content')
	
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
	
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h1 class="m-0">Edit Strains</h1>
					</div><!-- /.col -->
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
							<li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
							<li class="breadcrumb-item active">Edit Strains</li>
						</ol>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.container-fluid -->
		</div>
		<!-- /.content-header -->

		<!-- Main content -->
		<section class="content">
			<div class="container-fluid">
				<!-- Main row -->
				<div class="row">
					<!-- Left col -->
					<section class="col-lg-12 connectedSortable">
						<!-- Custom tabs (Charts with tabs)-->
						<div class="card card-primary card-outline">
						
							<div class="card-header">
								<h3 class="card-title">
								  <i class="fas fa-chart-pie mr-1"></i>
								  Edit Strains
								</h3>
								<div class="card-tools">
								  <ul class="nav nav-pills ml-auto">
									<li class="nav-item"></li>
									<li class="nav-item"></li>
								  </ul>
								</div>
							</div><!-- /.card-header -->
						  
							<div class="card-body">
								<div class="tab-content p-0">
									<!-- Morris chart - Sales -->
									<div class="card card-primary">
                    <!--
										<div class="card-header">
											<h3 class="card-title">All Inputs Mandatory</h3>
										</div>
                    -->
										<!-- /.card-header -->

										<div class="card-body">
											<form method="POST" action="{{ route('strains.update', $strain->strain_id) }}">
                        @method('PUT')
												@csrf

                           <div class="col-xs-12 form-group">
                            <label for="exampleInputBorderWidth2">Species Name*</label>
                            <input type="text" class="form-control form-control-border" 
                            name="floor" id="floor" value="{{ $strain->species->species_name }}    " placeholder="Strain Name">
                            @if($errors->has('floor'))
                              <p class="help-block text-danger">
                                {{ $errors->first('floor') }}
                              </p>
                            @endif
                          </div>
                          
                          <div class="col-xs-12 form-group">
                            <label for="exampleInputBorderWidth2">Strain Name*</label>
                            <input type="text" class="form-control form-control-border" 
                            name="floor" id="floor" value="{{ $strain->strain_name }}" placeholder="Strain Name">
                            @if($errors->has('floor'))
                              <p class="help-block text-danger">
                                {{ $errors->first('floor') }}
                              </p>
                            @endif
                          </div>
                          
                          <div class="col-xs-12 form-group">
                            <label for="exampleInputBorderWidth2">Notes*</label>
                            <input type="text" class="form-control form-control-border" 
                            name="notes" id="notes" value="{{ $strain->notes }}" placeholder="Notes">
                            @if($errors->has('notes'))
                              <p class="help-block text-danger">
                                {{ $errors->first('notes') }}
                              </p>
                            @endif
                          </div>
  
                          <div class="form-group col">
                              <label for="exampleInputBorderWidth2">Distributable*</label>
                              <select class="custom-select form-control rounded-1" 
                                name="building" id="building">
                                
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                              </select>
                              @if($errors->has('building'))
                                <p class="help-block text-danger">
                                  {{ $errors->first('building') }}
                                </p>
                              @endif
                          </div>
                          
												<div class="card-footer">
													<button type="submit" class="btn btn-primary">Submit</button>
												</div>

											
										</div>

									  <!-- /.card-body -->
									</div>
								</div>
							</div><!-- /.card-body -->
						</div>
						<!-- /.card -->
						<!-- /.card -->
					</section>
					<!-- /.Left col -->
					<!-- right col -->
				</div><!-- /.row (main row) -->
			</div><!-- /.container-fluid -->
		</section>
	</div>	
@endsection('content')

