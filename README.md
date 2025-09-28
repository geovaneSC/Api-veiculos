# Api-veiculos
Este projeto foi desenvolvido com o objetivo de construir uma API RESTful utilizando PHP e o Slim Framework, tendo como principal finalidade a autenticação por token e a consulta de veículos.
<h1>📖 Introdução</h1>
    <div>
        <p>Este projeto foi desenvolvido com o objetivo de construir uma API RESTful utilizando PHP e o Slim Framework, tendo como principal finalidade a autenticação por token e a consulta de veículos.</p>
        <p>A API segue os princípios do REST e faz uso de práticas modernas como:</p>
        <ul>
            <li>Injeção de dependências para manter o código modular e escalável;</li>
            <li>Eloquent ORM (via Illuminate) para facilitar a comunicação com o banco de dados de forma orientada a objetos;</li>
            <li>JWT (JSON Web Token) para autenticação e segurança no acesso às rotas protegidas.</li>
        </ul>
        <p>Com isso, o sistema possibilita a implementação de operações como a consulta de carros por ID, Fabricantes, Modelos e Veículos, servindo como uma base sólida para o aprendizado de APIs em PHP e também como ponto de partida para projetos reais que demandem integração backend.</p>
    </div>

<h2>Linguagens de Programação Usadas</h2>
<ul>
  <li>PHP (7.4 ou superior) → linguagem principal usada no Slim Framework.</li>
  <li>SQL (MySQL) → usado para criação e manipulação de tabelas.</li>
  <li>XML → para respostas em formato XML.</li>
  <li>JSON → formato de resposta para APIs RESTful.</li>
</ul>

<h2>Frameworks e Bibliotecas PHP Usadas</h2>
<ul>
  <li>Slim Framework (v3 e v4)</li>
  <li>Illuminate Database (Eloquent ORM)</li>
  <li>PSR-7 (PHP-FIG)</li>
  <li>Monolog → biblioteca para logging.</li>
  <li>Php-View (slim/php-view) → renderização de templates PHP.</li>
  <li>Firebase/php-jwt → manipulação de tokens JWT (JSON Web Tokens).</li>
  <li>Tuupola/slim-jwt-auth → middleware para autenticação via JWT.</li>
</ul>

<h2>Conceitos e Padrões Usados</h2>
<ul>
  <li>REST / RESTful APIs</li>
  <li>Middleware</li>
  <li>Dependency Injection</li>
  <li>Controllers com PSR-4 Autoload (Composer)</li>
  <li>MVC</li>
  <li>CORS</li>
</ul>

<h2>Banco de Dados</h2>
<ul>
  <li>MySQL</li>
  <li>PDO (via Eloquent ORM)</li>
</ul>

<h2>Ferramentas</h2>
<ul>
  <li>Composer</li>
  <li>Postman</li>
  <li>phpMyAdmin</li>
</ul>

<h1>🔑 Autenticação</h1>
    <div>
        <p>A API utiliza JWT (JSON Web Token) para autenticação, onde temos uma senha padrão que é <strong>123456789</strong> para gerar o token do usuário. Logo após a geração desse token, ele é válido por <strong>1 hora</strong>.</p>

  <div>
      <strong>Endpoint de login:</strong> POST /api/token
  </div>
      <p><strong>Parâmetros no corpo da requisição (JSON):</strong></p>
      <pre>
      {
        "senha": "123456789"
      }</pre>

  <p><strong>Resposta de sucesso:</strong></p>
      <pre>
      {
      "chave": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9..."
      }</pre>

  <p><strong>Erro:</strong></p>
    <div>
      <pre>
      {
      "Error": "Token Inválido"
      }</pre>
    </div>

  <p>OBS: O token deve ser enviado no cabeçalho <strong>Authorization</strong>:<br>
        No campo <strong>key</strong>: X-Token e a chave gerada.</p>
    </div>

  <h1>🚗 Veículos (API v1)</h1>
    <div>
        <ul>
            <li>Listar veículos – GET /api/v1/veiculo/lista</li>
            <li>Buscar veículos por ID – GET /api/v1/veiculo/id/{id}</li>
            <li>Buscar veículos por fabricante – GET /api/v1/fabricante/{fabricante}</li>
            <li>Buscar veículos por modelo – GET /api/v1/modelo/{modelo}</li>
            <li>Buscar veículos por carro – GET /api/v1/veiculos/{veiculos}</li>
        </ul>
    </div>

  <h1>⚠️ Códigos de Resposta</h1>
    <div>
        <ul>
            <li>200 OK – Requisição bem-sucedida</li>
            <li>201 Created – Recurso criado com sucesso</li>
            <li>400 Bad Request – Erro de validação nos dados enviados</li>
            <li>401 Unauthorized – Token inválido ou ausente</li>
            <li>404 Not Found – Recurso não encontrado</li>
            <li>500 Internal Server Error – Erro inesperado no servidor</li>
        </ul>
    </div>

  <h1>📌 Observações</h1>
    <div>
        <ul>
            <li>Todas as requisições e respostas usam JSON.</li>
            <li>Necessário autenticação via JWT em rotas protegidas (/api/v1/veiculo/*).</li>
            <li>Utilize ferramentas como Postman ou Insomnia para testes.</li>
        </ul>
    </div>
