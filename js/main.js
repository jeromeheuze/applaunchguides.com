// Smooth scrolling for navigation links
document.addEventListener('DOMContentLoaded', function() {
    const links = document.querySelectorAll('a[href^="#"]');
    
    links.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            const targetSection = document.querySelector(targetId);
            
            if (targetSection) {
                targetSection.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });

    // Interactive checklist functionality
    const checkboxes = document.querySelectorAll('.checklist-item input[type="checkbox"]');
    
    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            const item = this.closest('.checklist-item');
            if (this.checked) {
                item.style.opacity = '0.7';
                item.style.background = '#f0fff4';
            } else {
                item.style.opacity = '1';
                item.style.background = 'white';
            }
        });
    });

    // Progress tracking
    function updateProgress() {
        const allCheckboxes = document.querySelectorAll('.checklist-item input[type="checkbox"]');
        const checkedBoxes = document.querySelectorAll('.checklist-item input[type="checkbox"]:checked');
        const progressBar = document.querySelector('.progress-bar');
        
        if (progressBar && allCheckboxes.length > 0) {
            const percentage = (checkedBoxes.length / allCheckboxes.length) * 100;
            progressBar.style.width = percentage + '%';
            
            const progressText = document.querySelector('.progress-text');
            if (progressText) {
                progressText.textContent = `${checkedBoxes.length} of ${allCheckboxes.length} items completed (${Math.round(percentage)}%)`;
            }
        }
    }

    // Update progress whenever a checkbox changes
    document.addEventListener('change', function(e) {
        if (e.target.type === 'checkbox' && e.target.closest('.checklist-item')) {
            updateProgress();
        }
    });

    // Initialize progress
    updateProgress();
});