        <footer id="footer">
            <div class="container">
                <p>Todos los derechos reservados &copy; 2023</p>
            </div>
        </footer>



        <!-- SCRIPTS -->

        <!-- Archivo JS de jQuery (se debe agregar antes del archivo de JavaScript personalizado) -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

        <!-- Archivo JS de Popper (se debe agregar antes del archivo de JavaScript personalizado) -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

        <!-- Archivo JS de Bootstrap (se debe agregar antes del archivo de JavaScript personalizado) -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <!-- Archivo JS personalizado -->
        <script>
            // Función para cerrar sesión
            function logout() {
                // Código para cerrar sesión aquí
                alert("Has cerrado sesión exitosamente.");
            }


            //   Carrito
            const cartIcon = document.querySelector('.cart-icon');
            const itemCount = cartIcon.querySelector('.item-count');

            // Ejemplo de cómo actualizar el conteo de elementos en el carrito:
            let count = 0;
            itemCount.textContent = count.toString();

            function addToCart() {
                count++;
                itemCount.textContent = count.toString();
            }
        </script>

    </body>
</html>
