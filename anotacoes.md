# Atividade prática: óculos

O arquivo `cliente.php` segue o exemplo de aula02: classe, atributos `private`,
construtor, getters, setter e testes. A classe `Oculos` representa um par de
óculos com marca, grau e estado de uso. O setter valida se o grau está entre
-20 e 20. Os métodos `colocar` e `retirar` verificam se os óculos já estão em uso
antes de alterar seu estado.

Execute com:

```text
php atividades/atividade02/cliente.php
```

## Exercícios

- **`public` e `private`:** `public` pode ser acessado de fora da classe;
  `private` só pode ser acessado dentro dela.
- **Acesso externo a `private`:** o PHP gera um erro de visibilidade.
- **Construtor:** inicializa os atributos quando o objeto é criado.
- **Produto:** a classe tem atributos privados, construtor e getters. O teste
  cria dois objetos.
- **Validação de CPF:** deve acontecer no backend antes de salvar. Pode ficar no
  setter para proteger o objeto. A validação no formulário ajuda, mas sozinha
  pode ser contornada; o atributo não valida automaticamente.
