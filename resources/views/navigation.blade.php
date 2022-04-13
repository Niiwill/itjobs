<nav class="navbar navbar-expand-lg navbar-light">
	<div class="container">
		<a class="navbar-logo navbar-logo" href="{{ url('/') }}">
			<img src="{{asset('storage/img/logo.png')}}" alt="logo it poslovi crna gora me" class="w-75">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarColor01">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="{{ route('job.search') }}">Poslovi</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ route('articles.index') }}">IT Priče i Vijesti</a>
				</li>
			</ul>
		</div>  
	</div>
</nav>