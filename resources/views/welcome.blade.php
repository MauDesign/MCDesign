
    <x-guest-layout>
    <header>
    <div class="container-xxl flex-grow-1 container-p-y" style="display:flex; padding-bottom:3rem;">
        <div class="row g-6" >
            <div class="hero-text-box text-center col-md-6" >
                <h1 class="text-primary titulo"><span style="color:white">Hola</span> Soy Mauricio <br> <span style="color:white">UX/UI Designer</span></h1>
                <p class="h6 mb-4 pb-1 lh-lg" style="color:white;">
                Como diseñador apasionado de la tecnología, me enfoco en utilizar las últimas herramientas y tecnologías para crear soluciones a la medida de cada reto. Desde el punto de vista mercadológico, de diseño de experiencias y de desarrollo, ataco tus necesidades para brindarte una propuesta de alto impacto que te ayude a destacar en línea y digitalizar processos.
                </p>
                <a href="#landingPricing" class="btn btn-primary">Conoce más</a>
            </div>
            <div class=" hero-elements-img  col-md-6">
                <a href="#" target="_blank">
                <div class="hero-dashboard-img text-center">
                    <img
                    src="assets/img/profile.jpg"
                    alt="hero dashboard"
                    class="animation-img image-hero"
                    data-speed="2"
                    style="width:450px; margin-left:2rem;" />
                </div>  
                </a>
            </div>
        </div>
    </div>
    </section>
    </div>
</div>
<section class="section-py frase ">
    <div class="container">
        <div class="col s12 m6 l12">
            <h2 class="text-center titulo" style="color:white; ">Grandes cosas se hacen por una serie de pequeñas cosas reunidas.</h2>
            <h4 class="text-center" style="color:#4DD7AF;  font-weight: 400;">Vincent Van Gogh</h4>
        </div>
    </div>
</section>
<section class="section-py servicios " style="background:conic-gradient(from -61deg at 64.09% 50%, #FF945B 42.28158384561539deg, #5894D6 110.08992791175842deg, #4DD7AF 243.98332357406616deg);" id="servicios">
    <div class="container" >
    <h1 class="titulo" style="color:#334b5f">Servicios</h1>
        <div class="row">
            <div class="col-lg" >
                <div class="card " >
                    <img class="card-img-top" src="assets/img/services/UX-UIdesign_MC.png" style="padding:2rem;">
                    <div class="card-body">
                        <h3 class="titulo" >Diseño y desarrollo web</h3> 
                        <p class="card-text">Los servicios de diseño y desarrollo web ofrecen soluciones a medida que fusionan creatividad y tecnología. Nuestro enfoque se centra en el diseño de experiencias de usuario (UX) y la interfaz de usuario (UI) excepcionales para garantizar que cada visitante disfrute de una navegación intuitiva y atractiva. </p>
                        
                    </div>
                    <a href="{{route('Design')}}" class="btn btn-primary">Conoce más</a>
                </div>
            </div>

            <div class="col-lg">
                <div class="card" >
                    <img class="card-img-top" src="assets/img/services/marketing-digital-MC.png" style="padding:2rem;">
                        <div class="card-body">
                        <h3 class="titulo">Marketing digital</h3>
                        <p class="card-text">Los servicios de marketing digital se especializan en maximizar la visibilidad en línea de su negocio. Destacamos a través de la creación de campañas de posicionamiento en motores de búsqueda y redes sociales, asegurando que su marca alcance a su audiencia objetivo en los lugares adecuados. </p>
                    </div>
                    <a href="{{route('Marketing')}}" class="btn btn-primary">Conoce más</a>
                </div>
            </div>

            <div class="col-lg">
                <div class="card " >
                    <img class="card-img-top" src="assets/img/services/Consulting_MC.png" style="padding:2rem;">
                    <div class="card-body">
                        <h3 class="titulo">Consultoria en innovación</h3>
                        <p class="card-text">Los servicios de consultoría en innovacion de negocios se centran en guiar a las empresas en su transformación digital. Nuestra misión es ayudar a las organizaciones a adaptarse y aprovechar al máximo las tecnologías digitales emergentes.</p>
                        
                    </div>
                    <a href="{{route('Consultoria')}}" class="btn btn-primary">Conoce más</a>
                </div>
            </div>
        </div>
    </div>

</section>
<section class="section-py  portfolio container" id="proyectos">
    <div class="container">
    <h1 class="titulo" >Proyectos</h1>
        <div class=" col " style="display:flex;">
            <div class="panel active" style="background-image: url(assets/img/proyect/Aquadrada_MC.jpg);">
                <a href="desarrollo-web.php" class="btn btn-primary">Desarrollo de Software a la medida.</a>
            </div>
            <div class="panel" style="background-image: url(assets/img/proyect/MWU_MC.jpg);">
                <a href="medios-digitales.php" class="btn btn-primary titulo-font">MWU un medio digital único.</a>
            </div>
            <div class="panel" style="background-image: url(assets/img/proyect/NOMEN_MC_UXUI.jpg);">
                <a href="diseno-ux-ui.php" class="btn btn-primary titulo-font">UX/UI de sitema de facturación.</a>
            </div>
            <div class="panel" style="background-image: url(assets/img/proyect/Infografias_MC.jpg);">
                <a href="diseno-info.php" class="btn btn-primary titulo-font">Diseño de innformación.</a>
            </div>
            <div class="panel" style="background-image: url(assets/img/proyect/Markeiting-Digital_MC.png);">
                <a href="marketing-digital.php" class="btn btn-primary titulo-font">Marketing Digital.</a>
            </div>
        </div>
    </div>
</section>

<section class="container">
<div class="section-py  row contacto container-p-y" id="contacto" >
    <div class="col-lg-4"></div>
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <div class="container">
                    <h2 class="titulo">Contacto</h2>
                    
                    <form action="includes/correo_copy.php" method="POST">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Nombre" name="nombre">
                            <label for="nombre">Nombre</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="floatingInput" placeholder="Teléfono" name="telefono">
                            <label for="telefono">Telefono</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Correo" name="correo">
                            <label for="correo">Correo</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="asunto" name="Asunto">
                            <label for="asunto">Asunto</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="textaarea" class="form-control" id="floatingInput"  name="mensaje">
                            <label for="mensaje">Mensaje</label>
                        </div>
                        <div class="g-recaptcha" data-sitekey="6LcWQIopAAAAAEB13RsKG4bWzY_Y8F7gaaWEvk1D" data-action="LOGIN"></div>
                            <input type="submit" class="btn btn-primary" id="floatingInput"  name="submit" value="enviar">
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
</div>

<script type="text/javascript">
    const panels = document.querySelectorAll('.panel')
panels.forEach((panel) => {
    panel.addEventListener('click',() =>{
        removeActiveClasses()
        panel.classList.add('active')
    })
})

function removeActiveClasses(){
    panels.forEach(panel => {
        panel.classList.remove('active')
    })
}
</script>
</x-guest-layout>

                    
                </div>
            </div>
        </div>
    </body>
</html>
