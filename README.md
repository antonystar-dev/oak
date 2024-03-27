
# Projeto OAK

Este é um crud com cadastro de produtos

Gerando o banco de dados:
Criar um banco com nome **oak_produtos** e cole o seguinte sql para a geração da tabela:

```
CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `descricao` varchar(800) NOT NULL,
  `valor` varchar(255) NOT NULL,
  `disponibilidade` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;
```
Se preferir, insira o seguinte codigo para ja ter alguns dados na aplicação:

```
INSERT INTO `produto` (`id`, `nome`, `descricao`, `valor`, `disponibilidade`) VALUES
(1, 'bicicleta', 'bicicleta aro 20 caloi', '2500,00', 'sim'),
(2, 'Mesa', 'Mesa 6 cadeiras', '500,00', 'sim'),
(3, 'Copo', 'Copo americano 200 ml', '4,00', 'não'),
(4, 'Camiseta', 'Camiseta de algodão preta', '29,99', 'sim'),
(5, 'Calça Jeans', 'Calça jeans azul masculina', '49,99', 'sim'),
(6, 'Tênis Esportivo', 'Tênis esportivo para corrida', '79,99', 'sim'),
(7, 'Vestido Floral', 'Vestido floral de verão', '39,99', 'não'),
(8, 'Óculos de Sol', 'Óculos de sol estilo aviador', '19,99', 'sim'),
(9, 'Boné', 'Boné com aba reta preto', '14,99', 'sim'),
(10, 'Mochila', 'Mochila escolar resistente', '34,99', 'sim'),
(11, 'Relógio de Pulso', 'Relógio de pulso analógico', '59,99', 'sim'),
(12, 'Cinto de Couro', 'Cinto de couro marrom', '24,99', 'sim'),
(13, 'Carteira', 'Carteira de couro sintético', '9,99', 'sim'),
(14, 'apolo', 'testede select', '810', 'sim');
```

Disponibilidade em:[dev.antonystar.com/oak](http://dev.antonystar.com/oak/)  (Se eu colocar no ambiente de produção irei atualizar o link)
