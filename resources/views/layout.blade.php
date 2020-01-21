<!doctype html>
<html lang=pt-BR>
<head>
    <meta charset="UTF-8">
	<meta property="og:image" content="https://www.logolynx.com/images/logolynx/ee/eed60a107c2f3be95b63b8c77a604090.jpeg">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default navbar-static-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Navegação</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="{{ route('contatos.index') }}">
				Admin 
			</a>
		</div>

		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">				
			<ul class="nav navbar-nav navbar-right">
				<li><a href="{{ route('contatos.create') }}" target="_blank">Cadastrar Contato</a></li>
                <li><a href="{{ route('contatos.index') }}" target="_blank">Listar Contatos</a></li>
			</ul>
			</div>
		</div>
</nav>


<div class="container-fluid main-container">
    
    <div class="col-md-12 content">
      
            
            @yield('conteudo')

       
    </div>
    <footer class="pull-left footer">
        <p class="col-md-12">
            <hr class="divider">
            Copyright &COPY; 2020
        </p>
    </footer>
</div>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</body>
</html>

