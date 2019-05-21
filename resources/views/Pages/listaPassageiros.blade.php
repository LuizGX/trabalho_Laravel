<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap CRUD Data Table for Database with Modal Form</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/lista.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Manage <b>Employees</b></h2>
					</div>
					<div class="col-sm-6">
						<!-- <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Employee</span></a> -->
						<a href="#deleteModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Deletar Selecionados</span></a>						
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
                        <th>Nome</th>
                        <th>E-mail</th>
						<th>RG</th>
                        <th>CPF</th>
                        <th>Actions</th>
                    </tr>
                </thead>
				@if(count($passengers))
                <tbody>
				@foreach($passengers as $passenger)
                    <tr>
						<td>{{ $passenger->id }}</td>
                        <td>{{ $passenger->nome . " " . $passenger->sobrenome }}</td>
                        <td>{{ $passenger->email }}</td>
						<td>{{ $passenger->rg }}</td>
                        <td>{{ $passenger->cpf }}</td>
                        <td>
                            <a href="#editModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <!-- <button class="btn btn-danger" onclick="document.getElementById('deletePassenger-{{$passenger->id}}').submit">Remover</button> -->
							
								<button class="btn btn-danger" data-toggle="modal" data-target="#deletePassengerModal-{{ $passenger->id }}">Remover</button>
							
							<!-- <a href="#deleteModal" id="deleteForm" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a> -->
                        </td>
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

@foreach ($passengers as $passenger)
<!-- Delete Modal -->
<div class="modal " id="deletePassengerModal-{{ $passenger->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Deletar passageiro <b>{{ $passenger->nome . " " . $passenger->sobrenome }}</b></h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="modal-body">
			Tem certeza que deseja excluí-lo?
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
			<form method="POST" id="deletePassenger-{{ $passenger->id }}" action="{{ route('passenger.delete', $passenger->id) }}">
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