const toggler = document.querySelector(".toggler-btn");
toggler.addEventListener("click", function () {
  document.querySelector("#sidebar").classList.toggle("collapsed");
});



    document.addEventListener('DOMContentLoaded', function() {
        const acceptButton = document.querySelector('.btn-accept');
        if (acceptButton) {
            acceptButton.addEventListener('click', function(e) {
                e.preventDefault();
                document.getElementById('cookie-consent').style.display = 'none';
                fetch(acceptButton.href);
            });
        }
    });
