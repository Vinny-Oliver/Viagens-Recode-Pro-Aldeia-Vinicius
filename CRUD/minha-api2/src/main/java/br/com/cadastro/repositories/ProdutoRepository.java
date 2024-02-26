package br.com.cadastro.repositories;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

import br.com.cadastro.domain.Cliente;

// Notação Repository
// "extends" extende de JpaRepository da classe produto para buscar para nós o tipo do Id que será do tipo Integer
@Repository
public interface ProdutoRepository extends JpaRepository<Cliente, Integer> {

}

