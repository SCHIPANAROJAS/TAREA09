// Función para desplazar la vista hasta el formulario
function scrollToForm() {
  const formSection = document.getElementById('contact-form-section');
  if (formSection) {
      formSection.scrollIntoView({ behavior: 'smooth' });
  }
}
  
  
  document.addEventListener("DOMContentLoaded", function() {
    // Evitar que el modal se muestre antes de que se haya enviado el formulario
    const modal = document.getElementById('successModal');
    modal.style.display = 'none'; // Asegurarse de que esté oculto al cargar la página
  
    // Función para el cuadro de datos registrados
    document.getElementById('contact-form').addEventListener('submit', function(event) {
      event.preventDefault(); // Evita el envío normal del formulario
  
      const formData = new FormData(this);
  
      fetch('guardar.php', {
          method: 'POST',
          body: formData
      })
      .then(response => response.text())
      .then(data => {
          // Mostrar el modal de éxito
          modal.style.display = 'block';
      })
      .catch(error => {
          console.error('Error:', error);
      });
    });
  
    // Cerrar el modal cuando se haga clic en el botón "Aceptar"
    document.querySelector('.close').onclick = function() {
      modal.style.display = 'none';
    }
  
    document.getElementById('modalButton').onclick = function() {
      modal.style.display = 'none';
      window.location.href = '#formulario'; // Navegar a la parte superior de la página
      window.location.reload(); // Recargar la página
    }
  
    // Cerrar el modal si se hace clic fuera del contenido del modal
    window.onclick = function(event) {
      if (event.target == modal) {
          modal.style.display = 'none';
      }
    }
  });