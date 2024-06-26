@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h4 class="header-title">{{ _lang('Update Translations') }}</h4>
			</div>
			<div class="card-body">
				<form method="post" class="validate" autocomplete="off" action="{{ route('languages.update', $id) }}">
					@csrf
					<input name="_method" type="hidden" value="PATCH">
					<div class="row">
						@foreach( $language as $key => $lang )
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">{{ ucwords($key) }}</label>
								<input type="text" class="form-control" name="language[{{ str_replace(' ','_',$key) }}]" value="{{ $lang }}" required>
							</div>
						</div>
						@endforeach

						<div class="col-md-12">
							<div class="form-group">
								<button type="submit" class="btn btn-primary"><i class="ti-check-box"></i>&nbsp;{{ _lang('Save Translation') }}</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection
