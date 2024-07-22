<x-app-layout title="Conselho de Desenvolvimento Econômico e Sustentável de Frutal">
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
        <div class="container">
            <div class="row gy-2">
                <div class="col-lg-12 text-center" data-aos="zoom-out">
                    <h1>Seja bem-vindo!</h1>
                    <p>
                        Venha fazer parte do futuro de Frutal
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- /Hero Section -->

    <!-- About Section -->
    <section id="sobre" class="section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2 class="col-lg-8 col-md-12 offset-lg-2 offset-md-0">Conselho de Desenvolvimento Econômico e
                Sustentável de Frutal</h2>
        </div><!-- End Section Title -->

        <div class="container">
            <div class="row gy-2">
                <div class="col-lg-12 content" data-aos="fade-up" data-aos-delay="100">
                    <p class="text-center">
                        O Conselho de Desenvolvimento Econômico e Sustentável de Frutal (CODESF) promove o
                        crescimento sustentável e a melhoria da qualidade de vida em Frutal. Cooperamos com
                        empresas, instituições e a comunidade para desenvolver projetos e políticas que impulsionem
                        o desenvolvimento econômico e social da nossa região.
                    </p>
                </div>
            </div>

            <div class="row gy-2 mt-4 text-center">
                <div class="col-lg-4 content" data-aos="fade-up" data-aos-delay="100">
                    <h3>Missão</h3>
                    <p>
                        Promover o desenvolvimento econômico e sustentável de Frutal, por meio de ações que visam a
                        melhoria da qualidade de vida da população.
                    </p>
                </div>

                <div class="col-lg-4 content" data-aos="fade-up" data-aos-delay="100">
                    <h3>Visão</h3>
                    <p>
                        Ser referência no desenvolvimento econômico e sustentável de Frutal, contribuindo para a
                        construção de uma cidade mais justa e próspera.
                    </p>
                </div>

                <div class="col-lg-4 content" data-aos="fade-up" data-aos-delay="100">
                    <h3>Valores</h3>
                    <p>
                        Comprometimento, ética, transparência, inovação, sustentabilidade e responsabilidade social.
                    </p>
                </div>
            </div>
        </div>
    </section><!-- /About Section -->

    <!-- Composition Section -->
    <section id="composicao" class="section light-background">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Composição</h2>
        </div><!-- End Section Title -->

        <div class="container">
            <div class="row gy-2 mt-4 text-center">
                <div class="col-lg-4">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <h5>Presidente</h5>
                        <p>José Maria Perim</p>

                        <h5>Vice Presidente</h5>
                        <p>Rodrigo Fernando de Lima Hazime</p>

                        <h5>1º Secretário</h5>
                        <p>Otávio Queiroz</p>

                        <h5>2º Secretário</h5>
                        <p>João Meire de Queiroz</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <h5>1º Tesoureiro</h5>
                        <p>Uanderson Pereira de Menezes</p>

                        <h5>2º Tesoureiro</h5>
                        <p>Paulo Roberto Coelho</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <h5>Conselho Fiscal</h5>
                        <p>Marlon Reis Gomes, Florêncio Queiroz Neto, Antônio Brito Filho, Adilson Jorge Clemente,
                            Ney Bernardes Nepomuceno, Rodrigo Araújo Gazarra Borges</p>

                        <h5>Secretário Executivo</h5>
                        <p>José Luiz de Paula Neto</p>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Composition Section -->

    <!-- Techinical Chambers Section -->
    <section id="camaras-tecnicas" class="section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Câmaras Técnicas</h2>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up">
            <x-technical-chambers-section />
        </div>
    </section><!-- /Techinical Chambers Section -->

    <!-- Frutal Section -->
    <section id="conheca" class="section light-background">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Conheça Frutal</h2>
        </div><!-- End Section Title -->

        <div class="container">
            <div class="row gy-2 mt-4 text-center" data-aos="fade-up">
                <iframe src="https://www.youtube.com/embed/ZI9pIA1Kyu0?si=zy1b5cG57qKGdTx3" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </section><!-- /Frutal Section -->

    <!-- Projects Section -->
    <section id="projetos" class="section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Projetos</h2>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up">
            <x-projects-section />
            <div class="d-flex justify-content-center">
                <a href="{{ route('projects') }}" class="btn btn-action">Todos Projetos</a>
            </div>
        </div>
    </section><!-- /Projects Section -->

    <!-- News Section -->
    <section id="noticias" class="section light-background">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Notícias</h2>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up">
            <x-posts-section />
        </div>
    </section><!-- /News Section -->

    <!-- Partners Section -->
    <section id="parceiros" class="section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Parceiros</h2>

            <div class="container" data-aos="zoom-in">
                <x-partners-section />
            </div>
        </div><!-- End Section Title -->

        <div class="container">
            <div class="row gy-2 mt-4 text-center">
            </div>
        </div>
    </section><!-- /Partners Section -->

    <!-- Contact Section -->
    <section id="contato" class="section light-background">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Contato</h2>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up">
            <div class="row gy-2 mt-4">
                <div class="col-lg-6">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3748.3009033069025!2d-48.94048692793512!3d-20.037835300489444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94bcb0e67a59482b%3A0x99d1c2f98ecfa460!2sAv.%20Bras%C3%ADlia%2C%2054%20-%20Jardim%20Do%20Bosque%20III%2C%20Frutal%20-%20MG%2C%2038200-000!5e0!3m2!1spt-BR!2sbr!4v1718049526336!5m2!1spt-BR!2sbr"
                        width="500" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="col-lg-6">
                    <form action="{{ route('contact') }}" method="POST">
                        @csrf

                        <h5 class="mb-3">Deseja investir em Frutal? Envie uma mensagem para conhecer as
                            oportunidades!</h5>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="name" placeholder="Digite seu nome"
                                required>
                        </div>
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" name="email" placeholder="Digite seu email"
                                required>
                        </div>
                        <div class="input-group mb-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Digite sua mensagem" required></textarea>
                        </div>

                        <div class="d-grid col-12 mx-auto">
                            <button class="btn btn-block" type="submit"
                                style="color: white; background-color: #011c53;">Enviar Mensagem</button>
                        </div>
                    </form>
                </div>
            </div>
    </section><!-- /Contact Section -->
</x-app-layout>
