document.addEventListener("DOMContentLoaded", () => {
  document.getElementById("loginForm").addEventListener("submit", (event) => {
      event.preventDefault();
    
      const email = document.getElementById("Email").value;
      const password = document.getElementById("Contraseña").value;
      
    
      fetch("http://localhost:3000/api/login", {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
        },
        body: JSON.stringify({
          email: email,
          password: password,
        }),
      })
        .then((response) => response.json())
        .then((data) => {
          if (!data.success) {
            alert(data.message);
            return;
          }
    
          // Enviar la respuesta al servidor PHP, tratar de hacer esto en login
          fetch("/tics/admin/usuarios/createsession.php", {
            method: "POST",
            headers: {
              "Content-Type": "application/json",
            },
            body: JSON.stringify(data.user),
          })
          .then(response => response.json())
          .then(data => {
            if (!data.success) {
              alert(data.message);
              return;
            }
          window.location.href = "../index.php";
          });
        })
        .catch((error) => {
          console.error("Error en el login:", error);
        });
  });
});
