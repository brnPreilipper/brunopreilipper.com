<div class="row pt-5">
    <div class="col-sm-12 col-md-4">
        <img src="<?php echo URL_SITE ?>img/facilita.png" class="img-fluid">
    </div>
    <div class="col-sm-12 col-md-8">
        <h2>FacilitaAí</h2>
        <p>O FacilitaAí dá as boas-vindas como sua Plataforma de Conexão Profissional, simplificando a busca por serviços especializados para residentes locais, empreendedores e profissionais liberais. Oferecemos profissionais qualificados, agendamento descomplicado e uma ampla gama de serviços, desde reparos domésticos até consultorias empresariais.</p>
        <p>Conecte-se agora e experimente a diferença! Comprometemo-nos a promover a conveniência, confiança e prosperidade em comunidades locais. Seja parte da nossa comunidade, simplifique sua vida, encontre profissionais confiáveis e alcance seus objetivos, tudo em um único lugar: o FacilitaAí.</p>
    </div>
</div>

<?php
$atuacao = [
    [
        "titulo" => "Assistência Técnica",
        "icon" => "bi-gear",
        "text" => "Assistência técnica especializada oferecendo soluções rápidas e eficientes para a manutenção e reparo."
    ],
    [
        "titulo" => "Aulas",
        "icon" => "bi-book-half",
        "text" => "Aulas personalizadas e envolventes, adaptadas às necessidades individuais dos alunos, visando proporcionar uma experiência de aprendizado estimulante e eficaz."
    ],
    [
        "titulo" => "Autos",
        "icon" => "bi-car-front",
        "text" => "Serviços de manutenção automotiva, dedicados a assegurar a confiabilidade, segurança e desempenho dos veículos, com profissionais qualificados."
    ],
    [
        "titulo" => "Design e Tecnologia",
        "icon" => "bi-laptop",
        "text" => "Solidez em design e tecnologia, integrando criatividade e inovação para proporcionar soluções visualmente impactantes e funcionalmente avançadas."
    ],
    [
        "titulo" => "Saúde",
        "icon" => "bi-bag-heart",
        "text" => "Serviços de saúde comprometidos com o bem-estar integral, oferecendo cuidados personalizados, diagnósticos precisos e tratamentos eficazes para promover uma vida saudável."
    ],
    [
        "titulo" => "Reformas e Reparos",
        "icon" => "bi-hammer",
        "text" => "Reformas e reparos residenciais com excelência, proporcionando transformações significativas e soluções confiáveis para garantir ambientes seguros e revitalizados."
    ],
    [
        "titulo" => "Serviços domésticos",
        "icon" => "bi-house-door",
        "text" => "Serviços domésticos dedicados a facilitar a vida cotidiana, proporcionando eficiência e tranquilidade, com profissionais confiáveis para atender às necessidades específicas do lar."
    ],
    [
        "titulo" => "Eventos",
        "icon" => "bi-cup-straw",
        "text" => "Planejamento e execução de eventos excepcionais, oferecendo soluções personalizadas para criar experiências memoráveis, desde a concepção até a realização."
    ],

];
?>

<div class="row pt-5">
    <?php
    foreach($atuacao as $area){
        echo <<<HTML
        <div class="col-sm-12 col-md-3 pb-4">
            <div class="card h-100">
                <div class="card-body text-center">
                    <i class="bi {$area['icon']} fs-1"></i>
                    <h3>{$area['titulo']}</h3>
                    <p>{$area['text']}</p>
                </div>
            </div>
        </div>
        HTML;
    }
    ?>
    


</div>