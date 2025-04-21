
document.addEventListener('DOMContentLoaded', function () {
    const faqItems = document.querySelectorAll('.faq-item');

    faqItems.forEach(item => {
        item.addEventListener('click', () => {
            item.classList.toggle('active');

            // Ferme les autres si on veut un comportement accordéon
            faqItems.forEach(otherItem => {
                if (otherItem !== item) {
                    otherItem.classList.remove('active');
                }
            });
        });
    });
});

const faqItems1 = document.querySelectorAll('.faq-item');

faqItems1.forEach(item => {
    item.addEventListener('click', () => {
        item.classList.toggle('active');
        const answer = item.querySelector('.faq-answer');
        const icon = item.querySelector('.faq-toggle-icon i');

        // Toggle the answer display
        answer.style.display = answer.style.display === 'block' ? 'none' : 'block';

        // Change the icon to chevron-down (or caret-up) based on the state
        if (item.classList.contains('active')) {
            icon.classList.remove('fa-caret-right');
            icon.classList.add('fa-chevron-down');
        } else {
            icon.classList.remove('fa-chevron-down');
            icon.classList.add('fa-caret-right');
        }
    });
});



