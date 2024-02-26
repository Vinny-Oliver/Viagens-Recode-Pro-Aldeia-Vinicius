package br.com.cadastro.service;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import br.com.cadastro.domain.Cliente;
import br.com.cadastro.repositories.ProdutoRepository;
import jakarta.annotation.PostConstruct;

@Service
public class DBService {
	
	@Autowired
	private ProdutoRepository repo;
	
	@PostConstruct
	public void inicializarBancoDados() {
		Cliente cliente = new Cliente(null, "Marcus", "Dubai", "Cartão de Crédito", 2599.00);
		repo.save(cliente);
	}

}