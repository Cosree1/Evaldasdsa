registrar.addEventListener("click", () => {
    fetch("registrar.php", {
        method: "POST",
        body: new FormData(frm)
    })
    .then(response => response.text())
    .then(response => {
        if (response =="ok") {
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "registrar",
                showConfirmButton: false,
                timer: 1500
              });
        }

    })
});