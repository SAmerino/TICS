document.addEventListener("DOMContentLoaded", () => {
    document.getElementById("vincularForm").addEventListener("submit", (event) => {
      event.preventDefault();
  
      if (id === null) {
        alert("No se pudo obtener el ID del usuario. Por favor, inicia sesión nuevamente.");
        return;
      } 
      const codigo = document.getElementById("codigo").value;
  
      fetch("http://localhost:3000/api/vincular", {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
        },
        body: JSON.stringify({
          id: id,
          codigo: codigo,
        }),
      })
      .then((response) => response.json())
      .then((data) => {
        if (!data.success) {
          alert(data.message);
          return;
        }
  
        alert("Vinculación exitosa");
      })
      .catch((error) => {
        console.error("Error en la vinculación:", error);
      });
    });
  });
  