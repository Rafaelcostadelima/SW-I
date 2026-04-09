<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="img/elephant.png" type="image/x-icon">
    <style>
        html {
            scroll-behavior: smooth;
        }

        section {
            scroll-margin-top: 70px;
        }

        .btn-primary {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .nav-link.disabled,
        .disabled {
            cursor: not-allowed !important;
            pointer-events: auto !important;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="img/elephant.png" alt="Logo" width="40" class="me-2">
                <span class="fw-bold">PHP</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link disabled" href="#" style="cursor: not-allowed;">Início</a>
                    </li>
                    <li class="nav-item"><a class="nav-link disabled" href="#" style="cursor: not-allowed;">Sobre</a>
                    </li>
                    <li class="nav-item"><a class="btn btn-outline-primary ms-lg-3" href="login.php">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="position-relative d-flex align-items-center justify-content-center"
        style="height: 80vh; overflow: hidden;">
        <img src="img/banner.png" class="position-absolute w-100 h-100"
            style="object-fit: cover; filter: brightness(0.4);" alt="Banner">
        <div class="container position-relative text-center text-white">
            <h1 class="display-1 fw-bold mb-3">
                Faça login para desbloquear o conteúdo do site
            </h1>
            <a href="login.php" class="btn btn-primary btn-lg px-5 py-3 fw-bold rounded-pill">Login</a>
        </div>
    </header>

    <div class="disabled" style="filter: blur(10px);">
        <section id="historia" class="py-5 bg-light">
            <div class="container py-5">
                <div class="text-center mb-5">
                    <h2 class="display-4 fw-bold">O Motor da Web</h2>
                    <p class="text-muted">De scripts pessoais ao domínio global.</p>
                </div>

                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow-sm p-3">
                            <div class="card-body">
                                <div class="text-primary mb-3"><i class="bi bi-code-slash fs-1"></i></div>
                                <h5 class="card-title fw-bold">Origem (1994)</h5>
                                <p class="card-text text-muted">Rasmus Lerdorf criou o PHP para monitorar seu currículo
                                    online, originalmente chamado de <strong>Personal Home Page Tools</strong>.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow-sm p-3">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Evolução (PHP 7/8)</h5>
                                <p class="card-text text-muted">A introdução do motor Zend e do compilador JIT
                                    transformaram
                                    o PHP em uma das linguagens mais rápidas para a web.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow-sm p-3">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Relevância Atual</h5>
                                <p class="card-text text-muted">Hoje, alimenta gigantes como WordPress e Facebook,
                                    estando
                                    presente em quase 80% de todos os sites.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="evolucao" class="py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h2 class="display-5 fw-bold mb-4">A Revolução da Performance</h2>
                        <p class="lead">O PHP não parou no tempo. As versões recentes trouxeram ganhos que o colocam
                            lado a
                            lado com linguagens modernas em termos de velocidade.</p>
                        <ul class="list-unstyled">
                            <li class="mb-2"><strong><i class="bi bi-check2-circle text-primary me-2"></i>PHP
                                    7:</strong>
                                Redução de 50% no consumo de memória.</li>
                            <li class="mb-2"><strong><i class="bi bi-check2-circle text-primary me-2"></i>PHP
                                    8:</strong>
                                Compilação JIT para processamento pesado.</li>
                            <li class="mb-2"><strong><i
                                        class="bi bi-check2-circle text-primary me-2"></i>Tipagem:</strong>
                                Código muito mais seguro e fácil de manter.</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="table-responsive shadow-sm rounded">
                            <table class="table table-hover align-middle mb-0">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col">Versão</th>
                                        <th scope="col">Foco Principal</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>PHP 5.6</td>
                                        <td>Estabilidade Legada</td>
                                        <td><span class="badge bg-danger">Obsoleto</span></td>
                                    </tr>
                                    <tr>
                                        <td>PHP 7.4</td>
                                        <td>Velocidade e Memória</td>
                                        <td><span class="badge bg-warning">Segurança</span></td>
                                    </tr>
                                    <tr>
                                        <td>PHP 8.2+</td>
                                        <td>JIT e Performance</td>
                                        <td><span class="badge bg-success">Recomendado</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="frameworks" class="py-5 bg-dark text-white">
            <div class="container py-4">
                <div class="text-center mb-5">
                    <h2 class="display-5 fw-bold">Ecossistema Poderoso</h2>
                    <p class="text-secondary">O PHP moderno é sustentado por ferramentas que facilitam a criação de
                        aplicações complexas.</p>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-md-5">
                        <div class="d-flex align-items-start p-4 border border-secondary rounded hover-effect">
                            <div class="bg-primary p-3 rounded me-3">
                                <i class="bi bi-lightning-fill fs-3 text-white"></i>
                            </div>
                            <div>
                                <h4 class="fw-bold">Laravel</h4>
                                <p class="text-secondary mb-0">O framework mais popular do mundo, focado na experiência
                                    do
                                    desenvolvedor e elegância do código.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="d-flex align-items-start p-4 border border-secondary rounded hover-effect">
                            <div class="bg-info p-3 rounded me-3">
                                <i class="bi bi-wordpress fs-3 text-white"></i>
                            </div>
                            <div>
                                <h4 class="fw-bold">WordPress</h4>
                                <p class="text-secondary mb-0">O CMS que domina 43% da web, provando a robustez e
                                    escalabilidade do PHP ao longo de décadas.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="bg-dark text-white pt-5 pb-3">
            <div class="container">
                <div class="row border-bottom border-secondary pb-4 mb-4">
                    <div class="col-md-6">
                        <h4 class="fw-bold text-primary">PHP History Project</h4>
                        <p class="text-secondary small">Conteúdo educativo sobre a linguagem Hypertext Preprocessor.</p>
                    </div>
                    <div class="col-md-6 text-md-end">
                        <h5 class="mb-3">Referências Bibliográficas</h5>
                        <ul class="list-unstyled small text-secondary">
                            <li>PHP.NET - <a href="https://php.net" target="_blank"
                                    class="text-decoration-none text-secondary">Manual
                                    Oficial</a></li>
                            <li>Zend - <a href="https://www.zend.com/blog/php-7" target="_blank"
                                    class="text-decoration-none text-secondary">Evolução da Linguagem</a>
                            </li>
                            <li>W3Techs - <a href="https://w3techs.com/technologies/history_details/pl-php"
                                    target="_blank" class="text-decoration-none text-secondary">Estatísticas Web</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="text-center">
                    <p class="small text-secondary mb-0">&copy; 2026 - Criado por Rafael Costa de Lima</p>
                </div>
            </div>
        </footer>
    </div>

</body>

</html>