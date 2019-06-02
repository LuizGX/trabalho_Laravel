<?php
    use Canducci\ZipCode\Facades\ZipCode;
    $zipCodeInfo = ZipCode::find('38066-030');
    $arr = $zipCodeInfo->getArray();
    //var_dump($arr);
    //echo $arr["logradouro"];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastrar</title>
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/cadastrar.css">
        <script src="../js/bootstrap.js"></script>
    </head>
    <body>
        <section class="main">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <form method="POST" action="{{ route('ticket.store') }}">
                        @csrf
                        <fieldset>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="nome">Nome</label>
                                        <input type="text" class="form-control" name="nome" placeholder="Nome">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="sobrenome">Sobrenome</label>
                                        <input type="text" class="form-control" name="sobrenome" placeholder="Sobrenome">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="rg">RG</label>
                                        <input type="text" class="form-control" name="rg" placeholder="UF-12.345.678">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="cpf">CPF</label>
                                        <input type="text" class="form-control" name="cpf" placeholder="123.456.789-00">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-2">
                                        <label for="sexo">Sexo</label><br>
                                        <select name="sexo" class="custom-select">
                                            <option value="masculino">Masculino</option>
                                            <option value="feminino">Feminino</option>
                                            <option value="outro">Outro</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="dt_nasc">Data de Nascimento</label>
                                        <input type="date" class="form-control" name="dt_nasc">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="telefone">Telefone</label>
                                        <input type="text" class="form-control" name="telefone" placeholder="(12)9 3456-7890">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-2">
                                        <label for="cep">CEP</label>
                                        <input type="text" class="form-control" name="cep" placeholder="01234-567"></textarea>
                                    </div>
                                    <div class="col-md-1" style="margin-top:32px;">
                                        <input type="button" class="btn btn-dark" value="OK">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-3">
                                        <label for="cidade">Cidade</label>
                                        <input type="text" class="form-control" name="cidade" placeholder="Ex: Ribeirão Preto">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="uf">UF</label>
                                        <input type="text" class="form-control" name="uf" placeholder="Ex: São Paulo">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="bairro">Bairro</label>
                                        <input type="text" class="form-control" name="bairro" placeholder="Ex. Centro">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="logradouro">Logradouro</label>
                                        <input type="text" class="form-control" name="logradouro" placeholder="Ex. Rua Amadeu Amaral"></textarea>
                                    </div>
                                    <div class="col-md-1">
                                        <label for="numero">Número</label>
                                        <input type="text" class="form-control" name="numero" placeholder="Ex. 343">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="complemento">Complemento</label>
                                        <input type="text" class="form-control" name="complemento" placeholder="Ex. Apartamento 201">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-3">
                                        <label for="pais">País</label>
                                        <input type="text" class="form-control" name="pais" placeholder="Ex. Brasil">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-5">
                                        <label for="email">E-mail</label>
                                        <input type="text" class="form-control" name="email" placeholder="exemplo@dominio.com">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="email">Senha</label>
                                        <input type="text" class="form-control" name="senha" placeholder="************">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-dark btn-block">Submit</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>