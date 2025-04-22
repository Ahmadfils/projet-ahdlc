
document.addEventListener('DOMContentLoaded', () => {
    const faqItems = document.querySelectorAll('.faq-item');
  
    faqItems.forEach(item => {
      const answer = item.querySelector('.faq-answer');
      const icon = item.querySelector('.faq-toggle-icon i');
  
      item.addEventListener('click', () => {
        const isActive = item.classList.contains('active');
  
        // Ferme tous les autres
        faqItems.forEach(otherItem => {
          if (otherItem !== item) {
            otherItem.classList.remove('active');
            otherItem.querySelector('.faq-answer').style.display = 'none';
            const otherIcon = otherItem.querySelector('.faq-toggle-icon i');
            otherIcon.className = 'fa-solid fa-chevron-right';
          }
        });
  
        // Toggle current item
        item.classList.toggle('active');
        answer.style.display = isActive ? 'none' : 'block';
        icon.className = isActive ? 'fa-solid fa-chevron-right' : 'fa-solid fa-chevron-down';
      });
    });
  });
  
  