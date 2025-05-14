<footer class="bg-dark text-white mt-5 pt-4 pb-2">
    <div class="container text-center">
        <p class="mb-1">&copy; <span id="year"></span> Axel Ronquillo. Todos los derechos reservados 😎</p>
        <div class="d-flex justify-content-center gap-3 mt-2">
            <a href="#" class="text-white text-decoration-none">Inicio</a>
            <a href="#" class="text-white text-decoration-none">Películas</a>
            <a href="#" class="text-white text-decoration-none">Contacto</a>
        </div>
    </div>
</footer>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('year').textContent = new Date().getFullYear();
    });
</script>
