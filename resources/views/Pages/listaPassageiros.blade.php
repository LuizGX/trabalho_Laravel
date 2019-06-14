<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lista</title>
<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/lista.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
<body>
	<div class="container">
		<div class="table-responsive-lg">
			<h1><b>Passageiros</b></h1>
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nome</th>
					<th>RG</th>
					<th>CPF</th>
					<th></th>
					<th></th>
				</tr>
			</thead>
			@if(count($tickets))
			<tbody>
			@foreach($tickets as $ticket)
				<tr>
					<td>{{ $ticket->id }}</td>
					<td>{{ $ticket->nome . " " . $ticket->sobrenome }}</td>
					<td>{{ $ticket->rg }}</td>
					<td>{{ $ticket->cpf }}</td>
					<form action="{{ route('ticket.edit', $ticket->id) }}">
					<td><button class="btn btn-warning" data-toggle="modal">Editar</button></td>
					</form>
					<td><button class="btn btn-danger" data-toggle="modal" data-target="#deleteTicketModal-{{ $ticket->id }}">Remover</button></td>
				</tr>	
				@endforeach
			</tbody>
			@endif
		</table>
			<div class="clearfix">
				<div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
				<ul class="pagination">
					<li class="page-item disabled"><a href="#">Previous</a></li>
					<li class="page-item"><a href="#" class="page-link">1</a></li>
					<li class="page-item"><a href="#" class="page-link">2</a></li>
					<li class="page-item active"><a href="#" class="page-link">3</a></li>
					<li class="page-item"><a href="#" class="page-link">4</a></li>
					<li class="page-item"><a href="#" class="page-link">5</a></li>
					<li class="page-item"><a href="#" class="page-link">Next</a></li>
				</ul>
			</div>
		</div>
	</div>	

@foreach ($tickets as $ticket)
<!-- Delete Modal -->
<div class="modal " id="deleteTicketModal-{{ $ticket->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Deletar passageiro <b>{{ $ticket->nome . " " . $ticket->sobrenome }}</b></h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="modal-body">
			Tem certeza que deseja excluí-lo?
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
			<form method="POST" id="deleteTicket-{{ $ticket->id }}" action="{{ route('ticket.delete', $ticket->id) }}">
			@csrf
				<button type="submit" class="btn btn-primary">Confirmar</button>
			</form>
		</div>
		</div>
	</div>
</div>
@endforeach
</body>
</html>