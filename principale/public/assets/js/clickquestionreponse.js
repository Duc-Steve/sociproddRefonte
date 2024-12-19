
document.addEventListener('DOMContentLoaded', function () {
    const accordionItems = document.querySelectorAll('.ac-item');
    
    accordionItems.forEach(item => {
        const title = item.querySelector('.ac-title');
        const content = item.querySelector('.ac-content');

        // Hide content if not active
        if (!item.classList.contains('ac-active')) {
            content.style.display = 'none';
        }

        title.addEventListener('click', (e) => {
            e.preventDefault();

            const isActive = item.classList.contains('ac-active');

            // Close all items
            accordionItems.forEach(i => {
                i.classList.remove('ac-active');
                i.querySelector('.ac-content').style.display = 'none';
            });

            // Toggle the clicked item
            if (!isActive) {
                item.classList.add('ac-active');
                content.style.display = 'block';
            }
        });
    });
});

$(".ac-title").on("click", function () {
    var $icon = $(this).find("i");
    $icon.toggleClass("fa-chevron-down fa-chevron-up"); // Change l'icône
});
