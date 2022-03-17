<?php
$nerdpress = new \Nerdweb\Nerdpress($database);
$paginaFixa = $nerdpress->getPaginasFixa();
?>
<!-- Sidebar -->
<aside id="main-sidebar" class="opened">

    <!-- Header -->
    <div class="header-part">
        <a href="#">
            <img src="/nerdpress/images/logo_nerdpress_2.png" alt="" class="logo">
            <img src="/nerdpress/images/logo_nerdpress_3.png" alt="" class="logo hide-on-collapse">
        </a>
    </div>

    <!-- Avatar -->
    <div class="avatar">
        <div class="border">
            <a href="#">
                <div class="logo">
                    <img src="<?php if (isset($_SESSION['config']['logo'])) {
                        echo "/app/imagens/logos/" . $_SESSION['config']['logo'];
                    } ?>" alt="">
                </div>
            </a>
        </div>
        <a href="#">
            <h2 class="name hide-on-collapse"><?php if (isset($_SESSION['config']['site_name'])) {
                    echo $_SESSION['config']['site_name'];
                } ?></h2>
        </a>
    </div>

    <!-- Menu -->
    <ul class="menu menu-scroll">
        <li class="d-none">
            <a href="">
                <span class="icon"><i class="fas fa-tachometer-alt"></i></span>
                <span class="hide-on-collapse"> Dashboard</span>
            </a>
        </li>
        <?php if (!empty($paginaFixa["intranet"])) { ?>
            <li>
                <a data-toggle="collapse" href="#collapse-configuracoes" role="button" aria-expanded="false"
                   aria-controls="collapse-configuracoes">
                    <span class="icon"><i class="fas fa-cog"></i></span>
                    <span class="hide-on-collapse"> Configurações</span>
                </a>
                <div class="collapse hide-on-collapse" id="collapse-configuracoes">
                    <ul>
                        <li <?php if (empty($paginaFixa["intra-seguros"])) {
                            echo 'style="display:none"';
                        } ?>><a href="/nerdpress/paginas/intranet/empresa/index.php">Empresa</a></li>
                        <li <?php if (empty($paginaFixa["areas"])) {
                            echo 'style="display:none"';
                        } ?>><a href="/nerdpress/paginas/intranet/areas/index.php">Areas</a></li>
                        <li <?php if (empty($paginaFixa["cargos"])) {
                            echo 'style="display:none"';
                        } ?>><a href="/nerdpress/paginas/intranet/cargos/index.php">Cargos</a></li>
                        <li <?php if (empty($paginaFixa["intra-conf-formularios"])) {
                            echo 'style="display:none"';
                        } ?>><a href="/nerdpress/paginas/intranet/config/site.php">Configuração</a></li>
                        <li <?php if (empty($paginaFixa["intra-conf-usuarios"])) {
                            echo 'style="display:none"';
                        } ?>><a href="/nerdpress/paginas/intranet/usuario/index.php">Usuários - Intranet </a></li>
                        <li <?php if (empty($paginaFixa["intra-conf-usuarios"])) {
                            echo 'style="display:none"';
                        } ?>><a href="/nerdpress/paginas/usuario/index.php">Usuários - Nerdpress </a></li>
                        <li <?php if (empty($paginaFixa["intra-conf-usuarios"])) {
                            echo 'style="display:none"';
                        } ?>><a href="/nerdpress/paginas/intranet/relatorio/comunicados.php">Relatórios Comunicados</a></li>

                        <li <?php if (empty($paginaFixa["intra-conf-usuarios"])) {
                            echo 'style="display:none"';
                        } ?>><a href="/nerdpress/paginas/intranet/relatorio/logins.php">Relatórios Logins</a></li>

                        <li <?php if (empty($paginaFixa["intra-conf-usuarios"])) {
                            echo 'style="display:none"';
                        } ?>><a href="/nerdpress/paginas/intranet/relatorio/acessos.php">Relatórios Últimos acessos</a></li>
                        <li <?php if (empty($paginaFixa["intra-conf-usuarios"])) {
                            echo 'style="display:none"';
                        } ?>><a href="/nerdpress/paginas/intranet/relatorio/downloads.php">Relatórios Downloads</a></li>
                        
                    </ul>
                </div>
            </li>
        <?php } ?>

        <li>
            <a data-toggle="collapse" href="#collapse-giftcorr" role="button" aria-expanded="false"
               aria-controls="collapse-giftcorr">
                <span class="icon"><i class="fas fa-gift"></i></span>
                <span class="hide-on-collapse">Giftcorr</span>
            </a>
            <div class="collapse hide-on-collapse" id="collapse-giftcorr">
                <ul>
                    <li><a href="/nerdpress/paginas/intranet/giftcorr/lista_giftcorr.php">Lista de giftcorr</a></li>
                    <li><a href="/nerdpress/paginas/intranet/giftcorr/lista_categoria.php">Lista de categoria</a></li>
                </ul>
            </div>
        </li>


        <li>
            <a data-toggle="collapse" href="#collapse-ecossistena" role="button" aria-expanded="false"
               aria-controls="collapse-ecossistena">
                <span class="icon"><img class="main-sidebar__news-icon" src="/intranet/template/images/icons/vector/eco.svg" alt="ecossistema"></span>
                <span class="hide-on-collapse">Ecossistema</span>
            </a>
            <div class="collapse hide-on-collapse" id="collapse-ecossistena">
                <ul>
                    <li><a href="/nerdpress/paginas/intranet/ecossistema/lista.php">Lista de Ecossistema</a></li>
                    <li><a href="/nerdpress/paginas/intranet/ecossistema/lista_categoria.php">Lista de categoria</a></li>
                </ul>
            </div>
        </li>

        <li>
            <a data-toggle="collapse" href="#collapse-download" role="button" aria-expanded="false"
               aria-controls="collapse-download">
                <span class="icon"><i class="fas fa-download"></i></span>
                <span class="hide-on-collapse"> Downloads </span>
            </a>
            <div class="collapse hide-on-collapse" id="collapse-download">
                <ul>
                    <li><a href="/nerdpress/paginas/intranet/downloads/lista-arquivos.php">Lista de Arquivos</a></li>
                    <li><a href="/nerdpress/paginas/intranet/downloads/add-arquivo.php">Adicionar Arquivo</a></li>
                    <li><a href="/nerdpress/paginas/intranet/downloads/lista-categoria.php">Categorias</a></li>
                    <li><a href="/nerdpress/paginas/intranet/downloads/lista-campanha.php">Campanhas</a></li>

                </ul>
            </div>
        </li>

        <li>
            <a href="/nerdpress/paginas/intranet/universidades/index.php" role="button">
                <span class="icon"><i class="fas fa-book-reader"></i></span>
                <span class="hide-on-collapse">Universidade</span>
            </a>
        </li>

        <li>
            <a href="/nerdpress/paginas/intranet/calendario/index.php" role="button">
                <span class="icon"><i class="fas fa-calendar-alt"></i></span>
                <span class="hide-on-collapse">Calendário</span>
            </a>
        </li>


        <li>
            <a href="/nerdpress/paginas/intranet/destaque/index.php" role="button">
                <span class="icon"><i class="fas fa-star"></i></span>
                <span class="hide-on-collapse">Destaques</span>
            </a>
        </li>

        <?php if (!empty($paginaFixa["blog"])) { ?>
            <li>
                <a data-toggle="collapse" href="#collapse-blog" role="button" aria-expanded="false"
                   aria-controls="collapse-blog">
                    <span class="icon"><i class="fas fa-align-left"></i></span>
                    <span class="hide-on-collapse"> <?php echo $nerdpress->getNameModuloFixoById(1) ?></span>
                </a>
                <div class="collapse hide-on-collapse" id="collapse-blog">
                    <ul>
                        <li><a href="/nerdpress/paginas/blog/lista-post.php">Lista de Publicações</a></li>
                        <li><a href="/nerdpress/paginas/blog/add-post.php">Criar Publicação</a></li>
                        <?php if (!empty($paginaFixa["blog-categoria"])) { ?>
                            <li><a href="/nerdpress/paginas/blog/lista-categorias.php">Categorias</a></li>
                        <?php } ?>
                        <?php if (!empty($paginaFixa["blog-tag"])) { ?>
                            <li><a href="/nerdpress/paginas/blog/lista-tags.php">Tags</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </li>
        <?php } ?>
        <?php if (!empty($paginaFixa["capa"])) { ?>
            <?php
            $listaCapa = $nerdpress->getCapa();
            if (isset($listaCapa[0])) {
                ?>
                <li>
                    <a data-toggle="collapse" href="#collapse-blog-capa" role="button" aria-expanded="false"
                       aria-controls="collapse-blog">
                        <span class="icon"><i class="fas fa-th-large"></i></span>
                        <span class="hide-on-collapse"> Capa</span>
                    </a>
                    <div class="collapse hide-on-collapse" id="collapse-blog-capa">
                        <ul>
                            <?php foreach ($listaCapa as $cap) { ?>
                                <li>
                                    <a
                                            href="/nerdpress/paginas/blog/lista-capa.php?id=<?php echo $cap["id"] ?>"><?php echo $cap["title"] ?></a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </li>
                <?php
            }
            ?>
        <?php } ?>
        <?php if (!empty($paginaFixa["crm"])) { ?>
            <li>
                <a data-toggle="collapse" href="#collapse-crm" role="button" aria-expanded="false"
                   aria-controls="collapse-crm">
                    <span class="icon"><i class="fas fa-network-wired"></i></span>
                    <span class="hide-on-collapse"> CRM</span>
                </a>
                <div class="collapse hide-on-collapse" id="collapse-crm">
                    <ul>
                        <li <?php if (empty($paginaFixa["crm-newsletter"])) {
                            echo 'style="display:none"';
                        } ?>><a href="/nerdpress/paginas/newsletter/">Newsletter</a></li>
                        <li <?php if (empty($paginaFixa["crm-depoimento"])) {
                            echo 'style="display:none"';
                        } ?>><a href="/nerdpress/paginas/depoimento/">Depoimentos</a></li>
                        <li <?php if (empty($paginaFixa["crm-email-recebido"])) {
                            echo 'style="display:none"';
                        } ?>><a href="/nerdpress/paginas/marketing/email/">E-mails Recebidos</a></li>
                    </ul>
                </div>
            </li>
        <?php } ?>
        <?php if (!empty($paginaFixa["marketing"])) { ?>
            <li>
                <a data-toggle="collapse" href="#collapse-marketing" role="button" aria-expanded="false"
                   aria-controls="collapse-marketing">
                    <span class="icon"><i class="fas fa-bullhorn"></i></span>
                    <span class="hide-on-collapse"> Marketing</span>
                </a>
                <div class="collapse hide-on-collapse" id="collapse-marketing">
                    <ul>
                        <li <?php if (empty($paginaFixa["marketing-banners"])) {
                            echo 'style="display:none"';
                        } ?>><a href="/nerdpress/paginas/marketing/banner/">Banners</a></li>
                    </ul>
                    8
                </div>
            </li>
        <?php } ?>
        <?php
            $paginas = $nerdpress->getPaginas();

            if (isset($paginas[0]["pagina"])) { ?>
                <li>
                    <a data-toggle="collapse" href="#collapse-paginas" role="button" aria-expanded="false"
                       aria-controls="collapse-paginas">
                        <span class="icon"><i class="fas fa-laptop"></i></span>
                        <span class="hide-on-collapse"> Páginas</span>
                    </a>
                    <div class="collapse hide-on-collapse" id="collapse-paginas">
                        <ul>
                            
                            <?php
                                foreach ($paginas as $pag) {
                                    if ($pag["gerador"] == 1) {
                                        $link = "pagina_construtor.php?pagina=" . $pag["pagina"];
                                    } else {
                                        $link = "pagina.php?id=" . $pag["pagina"];
                                    }
                                    echo '<li><a href="/nerdpress/' . $link . '">' . $pag["nome"] . '</a></li>';
                                }

                            ?>
                        </ul>
                    </div>
                </li>
            <?php } ?>
        <?php if (!empty($paginaFixa["conf"])) { ?>
            <li>
                <a data-toggle="collapse" href="#collapse-configuracoes" role="button" aria-expanded="false"
                   aria-controls="collapse-configuracoes">
                    <span class="icon"><i class="fas fa-cog"></i></span>
                    <span class="hide-on-collapse"> Configurações</span>
                </a>
                <div class="collapse hide-on-collapse" id="collapse-configuracoes">
                    <ul>
                        <li <?php if (empty($paginaFixa["marketing-banners"])) {
                            echo 'style="display:none"';
                        } ?>><a href="/nerdpress/paginas/config/banner/">Banners posições</a></li>
                        <li <?php if (empty($paginaFixa["conf-scripts"])) {
                            echo 'style="display:none"';
                        } ?>><a href="/nerdpress/paginas/config/script/">Scripts</a></li>
                        <li <?php if (empty($paginaFixa["conf-localizacao"])) {
                            echo 'style="display:none"';
                        } ?>><a href="/nerdpress/paginas/config/mapa/">Localização</a></li>
                        <li <?php if (empty($paginaFixa["conf-formularios"])) {
                            echo 'style="display:none"';
                        } ?>><a href="/nerdpress/paginas/config/formulario/">Formulários</a></li>
                        <li <?php if (empty($paginaFixa["conf-usuarios"])) {
                            echo 'style="display:none"';
                        } ?>><a href="/nerdpress/paginas/usuario/">Usuários</a></li>
                        <li <?php if (empty($paginaFixa["conf-site"])) {
                            echo 'style="display:none"';
                        } ?>><a href="/nerdpress/paginas/config/site.php">Site</a></li>
                        <li <?php if (empty($paginaFixa["conf-devmod"])) {
                            echo 'style="display:none"';
                        } ?>><a href="/nerdpress/paginas/devmod/">DevMod</a></li>
                    </ul>
                </div>
            </li>
        <?php } ?>
        <li>
            <a href="/nerdpress/login.php?logout=true">
                <span class="icon"><i class="fas fa-sign-out-alt"></i></span>
                <span class="hide-on-collapse"> Sair</span>
            </a>
        </li>
    </ul>
</aside>

<!-- Mobile  -->
<div id="bg-sidebar-toggle" style="display: none;" class="d-md-none"></div>
