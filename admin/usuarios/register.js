document.getElementById("registerForm").addEventListener("submit", (event) => {
    event.preventDefault();
  
    const nombre = document.getElementById("Nombre").value;
    const email = document.getElementById("Email").value;
    const password = document.getElementById("Contraseña").value;
  
    fetch("http://localhost:3000/api/register", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify({
        nombre: nombre,
        email: email,
        password: password,
      }),
    })
      .then((response) => {
        return response.json();
      })
      .then((data) => {
        console.log('Respuesta de la api:', data);
        if (!data.success) {
          console.log("registro fallido");
          alert(data.message);
          return;
        }
  
        window.location.href = "login.php";
      });
  });