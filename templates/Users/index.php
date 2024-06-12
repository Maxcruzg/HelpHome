<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/img/pintura.jpg" class="d-block w-100 img-fluid" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h1>SERVICIOS CONFIABLES Y PROFESIONALES</h1>
                <p>Nuestros servicios están diseñados para brindarte soluciones confiables y profesionales
                    que se adapten a tus necesidades específicas.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/img/carousel2.jpeg" class="d-block w-100 img-fluid" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h1>AUMENTA TUS POSIBILIDADES</h1>
                <p>AL registrarte como un trabajador dentro de HelpHome tendas la oprtunidad de se visto desde nuestra plataforma
                    aumentado tus posibilidades de ser solicitado.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/img/carousel3.jpeg" class="d-block w-100 img-fluid" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h1>Third slide label</h1>
                <p>Some representative placeholder content for the third slide.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </button>
</div>
<div style="text-align:center; margin-top:30px;" class="services">
    <h1>Nuestros Sevicios</h1>
    <p>Contamos con tres diferentes servicios para ti, en los cuales tenemos a los profesionales mas calificados
        para cada uno de ellos
    </p>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="card" style="width: 18rem;">
            <img src="img/electricista.jpeg" style=" height:50px;" class="card-img-top" alt="...">
            <div style="text-align:center; class=" card-body">
                <br>
                <h2>Electricistas</h2>
                <p class="card-text">electricistas altamente capacitados ofrecen una amplia gama de servicios,
                    desde la instalación y mantenimiento de sistemas eléctricos hastareparaciones. </p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card" style="width: 18rem;">
            <img src="img/cerrajero.jpeg" style=" height:50px;" class="card-img-top" alt="...">
            <div style="text-align:center; class=" card-body">
                <br>
                <h2>Cerrajero</h2>
                <p class="card-text"> cerrajeros está capacitados para manejar una variedad de servicios,
                    desde la instalación de cerraduras o la apertura de puertas bloqueadas. </p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card" style="width: 18rem;">
            <img src="img/gasfiter.jpeg" style=" height:50px;" class="card-img-top" alt="...">
            <div style="text-align:center; class=" card-body">
                <br>
                <h2>Gasfiter</h2>
                <h6 class="card-text">
                    En nuestra empresa, nos enorgullecemos de ofrecer a nuestros
                    clientes acceso a trabajadores profesionales en gasfitería altamente capacitados y experimentados.</h6>
            </div>
        </div>
    </div>
</div>
<div class="color">
    <div class="container">

        <div style="text-align:center; margin-top:30px;" class="services">
            <br><br>
            <h1 class="quien">¿Quienes Somos?</h1>
        </div>
        <div class="row">
            <div class="col-md-6">
                <p class="parrafo">En HelpHome, nos dedicamos a proporcionar una
                    plataforma confiable y fácil de usar donde profesionales calificados
                    puedan conectarse con usuarios que buscan soluciones a sus
                    necesidades. Nuestro equipo está comprometido con la excelencia
                    en el servicio, desde el diseño de la interfaz de usuario
                    hasta el soporte al cliente. Valoramos la transparencia,
                    la integridad y la satisfacción del cliente en todo lo que hacemos,
                    y nos esforzamos por superar las expectativas en cada interacción</p>
            </div>
            <div class="col-md-6">
                <img class="who" src="img/principal.png" alt="...">
                <br>
            </div>
        </div>
    </div>

</div>

<style>
    img {
        height: 450px;
        width: 100px;
        opacity: 0.3;
    }

    img.img-fluid {
        height: 600px;
        /* Anula la altura fija y hace que la imagen sea responsiva */
        max-width: 100%;
        /* Se ajustará al ancho del contenedor padre */
    }

    .carousel-inner {
        background-color: black !important;
    }

    .card-img-top {
        height: 100px !important;
        width: 100px;
        margin-left: auto !important;
        margin-right: auto !important;
    }

    .card {

        border-radius: 10% !important;
        height: auto;

    }

    .color {
        background-color: #D9B441 !important;

    }

    .who {
        height: 490px;
        width: auto;
        opacity: 1;
        float: right !important;

    }

    @media (min-width: 768px) {
        .col-md-6 {
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            flex-grow: 0;
            flex-shrink: 0;
            flex-basis: 50%;
            max-width: 50%;
            text-align: center;
        }

    }

    .parrafo {
        margin-top: 56px;
        float: right !important;
        line-height: 40px;
    }


    .quien {
        font-size: 50px !important;
        font-weight: bold;
        color: white;


    }

    .carousel-item p {
        /* Estilos para el párrafo dentro de carousel-item */
        color: white;
        /* Cambia el color del texto */
        font-size: 12px;
        /* Cambia el tamaño de la fuente */
        line-height: 1.5;
        /* Ajusta el espacio entre líneas */
        /* Otros estilos que desees aplicar */
    }

    .carousel-caption {
        position: absolute;
        right: 15%;
        bottom: 111px !important;
        left: 15%;
        z-index: 10;
        padding-top: 20px;
        padding-bottom: 20px;
        color: #fff;
        text-align: center;
    }
</style>