document.addEventListener("DOMContentLoaded", function () {
    loadClients();

    let clientDetailsVisible = false;

    const clientsContainer = document.getElementById("clients-container");
    clientsContainer.addEventListener("click", function (event) {
        if (event.target.classList.contains("client-item")) {
            const clientId = event.target.dataset.clientId;
            if (!clientDetailsVisible) {
                loadClientDetails(clientId, event.target);
                clientDetailsVisible = true;
            } else {
                hideClientDetails();
                clientDetailsVisible = false;
            }
        }
    });
});
function loadClients() {
    fetch("getClients.php")
        .then(response => response.json())
        .then(clients => {
            const clientsContainer = document.getElementById("clients-container");
            clientsContainer.innerHTML = "";

            clients.forEach(client => {
                const clientItem = document.createElement("div");
                clientItem.className = "client-item";
                clientItem.textContent = `${client.Prenom} ${client.Nom}`;
                clientItem.setAttribute("data-client-id", client.IdClient);

                clientsContainer.appendChild(clientItem);
            });
        })
        .catch(error => console.error("Erreur Survenue", error));
}
function loadClientDetails(clientId, targetElement) {
    fetch('getClientDetails.php?clientId=' + clientId)
        .then(response => response.json())
        .then(clientDetails => {
            const detailItem = document.createElement("div");
            detailItem.className = "client-details";

            for (const [key, value] of Object.entries(clientDetails)) {
                const detailItemRow = document.createElement("div");
                detailItemRow.textContent = `${key}: ${value}`;
                detailItem.appendChild(detailItemRow);
            }
            targetElement.insertAdjacentElement("afterend", detailItem);
        })
        .catch(error => console.error('Erreur Survenue', error));
}
function hideClientDetails() {
    const clientDetailsContainer = document.querySelector(".client-details");

    if (clientDetailsContainer) {
        clientDetailsContainer.style.display = "none";
        clientDetailsContainer.parentNode.removeChild(clientDetailsContainer);
    }
}
