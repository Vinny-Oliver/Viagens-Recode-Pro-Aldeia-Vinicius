package br.com.cadastro.service;

import java.util.List;
import java.util.Optional;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import br.com.cadastro.domain.Cliente;
import br.com.cadastro.repositories.ProdutoRepository;
import br.com.cadastro.service.exception.ObjectNotFoundException;

@Service
public class ProdutoService {
	
	@Autowired
	private ProdutoRepository repo;
	
	public Cliente findById(Integer id) {
		Optional<Cliente> cliente = repo.findById(id);
		return cliente.orElseThrow(() -> new ObjectNotFoundException("Objeto não encontrado Id: " + id + "Tipo: " + Cliente.class.getName()));
	}
	
	public List<Cliente> findAll(){
		return repo.findAll();
	}
	
	// Método para salvar
	public Cliente save(Cliente cliente) {
		cliente.setId(null);
		return repo.save(cliente);
		
	}
	
	// Método para atualizar a base de dados
	public Cliente update(Cliente cliente) {
		Cliente newProduto = findById(cliente.getId());
		updateProduto(cliente, newProduto);
		return repo.save(newProduto);
	}
	
	public void delete(Integer id) {
		repo.deleteById(id);
	}
	
	private void updateProduto(Cliente oldProduto, Cliente newProduto) {
		newProduto.setNome(oldProduto.getNome());
		newProduto.setLugar(oldProduto.getLugar());
		newProduto.setPagamento(oldProduto.getPagamento());
		newProduto.setValor(oldProduto.getValor());
	}

}
