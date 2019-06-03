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
                                        <input type="text" class="form-control" id="cep" name="cep" placeholder="01234-567"></textarea>
                                    </div>
                                    <div class="col-md-1" style="margin-top:32px;">
                                        <input type="button" class="btn btn-dark" value="OK" onclick="pesquisacep();">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-3">
                                        <label for="cidade">Cidade</label>
                                        <input type="text" class="form-control" id='cidade' name="cidade" placeholder="Ex: Ribeirão Preto">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="uf">UF</label>
                                        <input type="text" class="form-control" id='uf' name="uf" placeholder="Ex: São Paulo">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="bairro">Bairro</label>
                                        <input type="text" class="form-control" id='bairro' name="bairro" placeholder="Ex. Centro">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="rua">Rua</label>
                                        <input type="text" class="form-control" id='rua' name="rua" placeholder="Ex. Rua Amadeu Amaral"></textarea>
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
                                        <label for="senha">Senha</label>
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
        <script type="text/javascript">
            function limpa_formulário_cep() {
                //Limpa valores do formulário de cep.
                document.getElementById('rua').value=("");
                document.getElementById('bairro').value=("");
                document.getElementById('cidade').value=("");
                document.getElementById('uf').value=("");
            }

            function meu_callback(conteudo) {
                if (!("erro" in conteudo)) {
                    //Atualiza os campos com os valores.
                    document.getElementById('rua').value=(conteudo.logradouro);
                    document.getElementById('bairro').value=(conteudo.bairro);
                    document.getElementById('cidade').value=(conteudo.localidade);
                    document.getElementById('uf').value=(conteudo.uf);
                } //end if.
                else {
                    //CEP não Encontrado.
                    limpa_formulário_cep();
                    alert("CEP não encontrado.");
                }
            }
                
            function pesquisacep() {
                var valor = document.getElementById('cep').value;
                //Nova variável "cep" somente com dígitos.
                var cep = valor.replace(/\D/g, '');
                
                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        document.getElementById('rua').value="...";
                        document.getElementById('bairro').value="...";
                        document.getElementById('cidade').value="...";
                        document.getElementById('uf').value="...";

                        //Cria um elemento javascript.
                        var script = document.createElement('script');

                        //Sincroniza com o callback.
                        script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                        //Insere script no documento e carrega o conteúdo.
                        document.body.appendChild(script);

                    } //end if.
                    else {
                        //cep é inválido.
                        //limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            };
        </script>
    </body>
</html>