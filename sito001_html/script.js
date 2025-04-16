document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
    const mobileMenu = document.querySelector('.mobile-menu');
    const overlay = document.querySelector('.overlay');
    const mobileMenuClose = document.querySelector('.mobile-menu-close');
    
    mobileMenuToggle.addEventListener('click', function() {
        mobileMenu.classList.add('active');
        overlay.classList.add('active');
        document.body.style.overflow = 'hidden';
    });
    
    function closeMenu() {
        mobileMenu.classList.remove('active');
        overlay.classList.remove('active');
        document.body.style.overflow = '';
    }
    
    mobileMenuClose.addEventListener('click', closeMenu);
    overlay.addEventListener('click', closeMenu);
    
    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            
            // Close mobile menu if open
            closeMenu();
            
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                window.scrollTo({
                    top: target.offsetTop - 80,
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // Fixed header on scroll
    const header = document.querySelector('.site-header');
    window.addEventListener('scroll', function() {
        if (window.scrollY > 100) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });
    
    // Merchandise Tab Functionality
    const tabButtons = document.querySelectorAll('.tab-button');
    
    tabButtons.forEach(button => {
        button.addEventListener('click', function() {
            tabButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            // In a real implementation, you would show/hide content based on the selected tab
        });
    });
    
    // Animated counters
    const countElements = document.querySelectorAll('.stat-number');
    
    function animateValue(obj, start, end, duration) {
        let startTimestamp = null;
        const step = (timestamp) => {
            if (!startTimestamp) startTimestamp = timestamp;
            const progress = Math.min((timestamp - startTimestamp) / duration, 1);
            const value = Math.floor(progress * (end - start) + start);
            
            // Extract the "+" if it exists
            const hasPlus = obj.innerText.includes('+');
            obj.innerText = value + (hasPlus ? '+' : '');
            
            if (progress < 1) {
                window.requestAnimationFrame(step);
            }
        };
        window.requestAnimationFrame(step);
    }
    
    // Intersection Observer to trigger counter animation when in view
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const element = entry.target;
                const value = element.innerText;
                const hasPlus = value.includes('+');
                const numericValue = parseInt(value);
                
                animateValue(element, 0, numericValue, 1500);
                observer.unobserve(element);
            }
        });
    }, { threshold: 0.5 });
    
    countElements.forEach(countElement => {
        observer.observe(countElement);
    });
    
    // Countdown Timer
    function updateCountdown() {
        // In a real implementation, you would calculate the remaining time to the event
        // For demonstration purposes, we'll just decrement the seconds
        const secondsElement = document.querySelector('.countdown-timer .countdown-item:last-child .countdown-number');
        let seconds = parseInt(secondsElement.innerText);
        
        seconds = seconds > 0 ? seconds - 1 : 59;
        secondsElement.innerText = seconds < 10 ? '0' + seconds : seconds;
        
        // If seconds reach 0, decrement minutes
        if (seconds === 59) {
            const minutesElement = document.querySelector('.countdown-timer .countdown-item:nth-last-child(2) .countdown-number');
            let minutes = parseInt(minutesElement.innerText);
            
            minutes = minutes > 0 ? minutes - 1 : 59;
            minutesElement.innerText = minutes < 10 ? '0' + minutes : minutes;
            
            // If minutes reach 0, decrement hours
            if (minutes === 59) {
                const hoursElement = document.querySelector('.countdown-timer .countdown-item:nth-last-child(3) .countdown-number');
                let hours = parseInt(hoursElement.innerText);
                
                hours = hours > 0 ? hours - 1 : 23;
                hoursElement.innerText = hours < 10 ? '0' + hours : hours;
                
                // If hours reach 0, decrement days
                if (hours === 23) {
                    const daysElement = document.querySelector('.countdown-timer .countdown-item:first-child .countdown-number');
                    let days = parseInt(daysElement.innerText);
                    
                    if (days > 0) {
                        days--;
                        daysElement.innerText = days < 10 ? '0' + days : days;
                    }
                }
            }
        }
    }
    
    // Update countdown every second
    // setInterval(updateCountdown, 1000);
});