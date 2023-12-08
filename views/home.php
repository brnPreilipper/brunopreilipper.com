<!-- banner da pagina inicial -->
<?php

$dados = [
    [
        "title" => "Curso de Programação PHP",
        "description" => "o melhor curso do Brasil",
        "img" => "banner1.png",
        "mobile" => "m1m.png"
    ],
    [
        "title" => "Curso lógica de programação",
        "description" => "Vamos descobrir os conceitos basicos que norteiam as linguagens",
        "img" => "banner2.png",
        "mobile" => "m2m.png"
    ],
]
?>
<div id="carouselExampleCaptions" class="carousel slide">

    <div class="carousel-inner">
        <?php foreach ($dados as $ch => $b) {
            $active = ($ch == 0) ? 'active' : '';
            $img = ($isMobile) ? $b['mobile'] : $b['img'];
        ?>
            <div class="carousel-item <?php echo $active ?>">
                <img src="<?php echo URL_SITE . "img/" . $img ?>" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <!-- <h5 class="bg-dark"><?php echo $b['title'] ?></h5> -->
                    <!-- <p class="bg-dark"><?php echo $b['description'] ?></p> -->
                    <a href="#" class="btn btn-danger">ASSINE JÁ</a>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
</button>
</div>

<!-- STACKS -->
<?php
$stacks = [
    [
        "title" => "Assistência Técnica",
        "description" => "Manutenção eficaz em assistência técnica",
        "img" => "home1.png",
        "btnAction" => "https://google.com",
        "btnLabel" => "Visitar site"
    ],
    [
        "title" => "Design e Tecnologia",
        "description" => "Inovação sólida em design e tecnologia",
        "img" => "home2.png",
        "btnAction" => "https://google.com",
        "btnLabel" => "Visitar site"
    ],
    [
        "title" => "Reformas e Reparo",
        "description" => "Excelência segura em reformas residenciais",
        "img" => "home3.png",
        "btnAction" => "https://google.com",
        "btnLabel" => "Visitar site"
    ],
    [
        "title" => "Serviços domésticos",
        "description" => "Eficiência confiável em serviços domésticos",
        "img" => "home4.png",
        "btnAction" => "https://google.com",
        "btnLabel" => "Visitar site"
    ]
];
?>
<div class="container p-5">
    <div class="row">
        <?php
        foreach($stacks as $stack){
            $url_site = URL_SITE;
            echo <<<HTML
            <div class="col col-sm-12 col-md-3 text-center">
                <div class="card h-100 ">
                    <img src="{$url_site}img/{$stack['img']}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{$stack['title']}</h5>
                        <p class="card-text">{$stack['description']}</p>
                        <a href="{$stack['btnAction']}" class="btn btn-secondary ">{$stack['btnLabel']}</a>
                    </div>
                </div>
            </div>
            HTML;
        }
        ?>
    </div>
</div>