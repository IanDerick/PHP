<?php
    $colecao = [
        [// prateleira 1
            ["titulo" =>  "Dom Casmurro", "autor" => "Machado de Assis", "ano" => 1899], 
            ["titulo" => "O Cortiço", "autor" => "Aluísio Azevedo", "ano" => 1890],
            ["titulo" => "Macunaíma", "autor" => "Mário de Andrade", "ano" => 1928] 
            
        ],
        [// prateleira 2
            ["titulo" => "Memórias Póstumas", "autor" => "Machado de Assis", "ano" => 1881],
            ["titulo" => "O Guarani", "autor" => "José de Alencar", "ano" => 1857],
            ["titulo" => "A Moreninha", "autor" => "Joaquim Manuel de Macedo", "ano" => 1844]
        ],
        [// prateleira 3
            ["titulo" => "Iracema", "autor" => "José de Alencar", "ano" => 1865],
            ["titulo" => "Capitães da Areia", "autor" => "Jorge Amado", "ano" => 1937],
            ["titulo" => "Vidas Secas", "autor" => "Graciliano Ramos", "ano" => 1938]
        ]
    ];

    $totalLivros = 0;


    foreach ( $colecao as $prateleiras) {
        $totalLivros += count($prateleiras);
    }

    echo"Numer total de livros: ". $totalLivros;
