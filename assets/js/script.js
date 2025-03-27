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