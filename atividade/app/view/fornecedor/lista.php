<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Fornecedor</title>
</head>

<body>
    <h1>Cadastro de Fornecedor</h1>
    <form id="cadastro-fornecedor">

        <input type="text" name="razao_social" id="razao_social" placeholder="Digite a razão social">
        <br><br>

        <input type="text" name="nome_fantasia" id="nome_fantasia" placeholder="Digite o nome fantasia">
        <br><br>

        <input type="text" name="cnpj" id="cnpj" placeholder="Digite o CNPJ">
        <br><br>

        <input type="text" name="inscricao_estadual" id="inscricao_estadual" placeholder="Digite a inscrição estadual">
        <br><br>

        <input type="email" name="email" id="email" placeholder="Digite o e-mail de contato">
        <br><br>

        <input type="text" name="telefone" id="telefone" placeholder="Digite o telefone">
        <br><br>

        <input type="text" name="cep" id="cep" placeholder="Digite o CEP">
        <br><br>

        <input type="text" name="logradouro" id="logradouro" placeholder="Digite o logradouro (rua, avenida, etc.)">
        <br><br>

        <input type="text" name="numero" id="numero" placeholder="Digite o número do imóvel">
        <br><br>

        <input type="text" name="bairro" id="bairro" placeholder="Digite o nome do bairro">
        <br><br>

        <input type="text" name="cidade" id="cidade" placeholder="Digite o nome da cidade">
        <br><br>

        <select id="uf" name="uf">
            <option value="">Selecione o estado</option>
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AP">Amapá</option>
            <option value="AM">Amazonas</option>
            <option value="BA">Bahia</option>
            <option value="CE">Ceará</option>
            <option value="DF">Distrito Federal</option>
            <option value="ES">Espírito Santo</option>
            <option value="GO">Goiás</option>
            <option value="MA">Maranhão</option>
            <option value="MT">Mato Grosso</option>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="MG">Minas Gerais</option>
            <option value="PA">Pará</option>
            <option value="PB">Paraíba</option>
            <option value="PR">Paraná</option>
            <option value="PE">Pernambuco</option>
            <option value="PI">Piauí</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="RN">Rio Grande do Norte</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="RO">Rondônia</option>
            <option value="RR">Roraima</option>
            <option value="SC">Santa Catarina</option>
            <option value="SP">São Paulo</option>
            <option value="SE">Sergipe</option>
            <option value="TO">Tocantins</option>
            <option value="EX">Estrangeiro</option>
        </select>
        <br><br>

        <button type="button" id="salvar">Salvar</button>
    </form>

    <script defer type="module" src="/js/listafornecedor.js"></script>
</body>

</html>


