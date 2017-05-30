<div class="container">
	<h4>Contact Page {{ $email }}</h4>
	@foreach($contactNumber as $number)
		<ul class="list-group">
			<li class="list-group-item">{{ $number }}</li>
		</ul>
	@endforeach
</div>