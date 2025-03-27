        // Add subtle interactivity
        const container = document.querySelector('.container');
        document.addEventListener('mousemove', (e) => {
            const rect = container.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            
            container.style.transform = `perspective(1000px) rotateY(${(x - rect.width/2) * 0.02}deg) rotateX(${(rect.height/2 - y) * 0.02}deg)`;
        });

        document.addEventListener('mouseleave', () => {
            container.style.transform = 'perspective(1000px) rotateY(0deg) rotateX(0deg)';
        });

        // Form submission handling (demo)
        const form = document.querySelector('form');
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            const btn = form.querySelector('.btn');
            btn.textContent = 'Logging in...';
            btn.style.background = 'linear-gradient(45deg, #45b7d1, #4ecdc4)';
            
            setTimeout(() => {
                btn.textContent = 'Login';
                btn.style.background = 'linear-gradient(45deg, #ff6b6b, #4ecdc4)';
                alert('Welcome! This is a demo login.');
            }, 1500);
        });