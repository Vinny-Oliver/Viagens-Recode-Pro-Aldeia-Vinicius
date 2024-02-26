package br.com.cadastro.config;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.context.annotation.Bean;
import org.springframework.context.annotation.Configuration;
import org.springframework.context.annotation.Profile;

import br.com.cadastro.service.DBService;
import jakarta.annotation.PostConstruct;

@Configuration
@Profile("dev")
public class TestConfig {
    
    @Autowired
    private DBService service;
    
    @PostConstruct
    public void inicializar() {
        service.inicializarBancoDados();
    }
}

