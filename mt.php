<?php require 'FileBack/head.php';?> 
<link rel="stylesheet" href="/hieuung/lab.css">
    <main class="container">
        <!-- PC Showcase -->
        <section class="cyber-section">
            <div class="pc-header">
                <h1>MÁY TÍNH CÔNG NGHỆ</h1>
            </div>
            
            <div class="pc-grid">
                <!-- MacBook Pro M2 -->
                <div class="pc-card">
                    <div class="pc-badge">MỚI NHẤT</div>
                    <div class="pc-image">
                        <img src="https://images.unsplash.com/photo-1611186871348-b1ce696e52c9?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="MacBook Pro M2">
                    </div>
                    <div class="pc-info">
                        <div class="pc-name">MACBOOK PRO M2 2023</div>
                        <div class="pc-specs">
                            <span>CPU: Apple M2 Pro 10-core</span>
                            <span>RAM: 16GB - SSD: 512GB</span>
                            <span>Màn hình: 14.2" Liquid Retina XDR</span>
                            <span>GPU: 16-core - Pin: 18h</span>
                        </div>
                        <div class="pc-price">42.990.000Đ</div>
                       
                    </div>
                </div>
                
                <!-- ASUS ROG Strix G16 -->
                <div class="pc-card">
                    <div class="pc-badge">GAMING</div>
                    <div class="pc-image">
                        <img src="https://images.unsplash.com/photo-1593642632823-8f785ba67e45?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="ASUS ROG Strix G16">
                    </div>
                    <div class="pc-info">
                        <div class="pc-name">ASUS ROG STRIX G16</div>
                        <div class="pc-specs">
                            <span>CPU: Intel Core i9-13980HX</span>
                            <span>RAM: 32GB - SSD: 1TB</span>
                            <span>Màn hình: 16" QHD 240Hz</span>
                            <span>GPU: RTX 4080 12GB</span>
                        </div>
                        <div class="pc-price">54.990.000Đ</div>
                      
                    </div>
                </div>
                
                <!-- Dell XPS 15 -->
                <div class="pc-card">
                    <div class="pc-badge">ĐỒ HỌA</div>
                    <div class="pc-image">
                        <img src="https://images.unsplash.com/photo-1593642702821-c8da6771f0c6?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Dell XPS 15">
                    </div>
                    <div class="pc-info">
                        <div class="pc-name">DELL XPS 15 9530</div>
                        <div class="pc-specs">
                            <span>CPU: Intel Core i7-13700H</span>
                            <span>RAM: 32GB - SSD: 1TB</span>
                            <span>Màn hình: 15.6" 4K OLED Touch</span>
                            <span>GPU: RTX 4070 8GB</span>
                        </div>
                        <div class="pc-price">49.990.000Đ</div>
                        
                    </div>
                </div>
                
                <!-- Acer Predator Helios 300 -->
                <div class="pc-card">
                    <div class="pc-badge">GIÁ TỐT</div>
                    <div class="pc-image">
                        <img src="https://images.unsplash.com/photo-1593642634524-b40b5baae6bb?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Acer Predator Helios 300">
                    </div>
                    <div class="pc-info">
                        <div class="pc-name">ACER PREDATOR HELIOS 300</div>
                        <div class="pc-specs">
                            <span>CPU: Intel Core i7-12700H</span>
                            <span>RAM: 16GB - SSD: 512GB</span>
                            <span>Màn hình: 15.6" QHD 165Hz</span>
                            <span>GPU: RTX 3070 Ti 8GB</span>
                        </div>
                        <div class="pc-price">
                            <span class="pc-old-price">34.990.000Đ</span>
                            29.990.000Đ
                        </div>
                      
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Brands Section -->
        <section class="cyber-section brands-section">
            <h2>THƯƠNG HIỆU NỔI BẬT</h2>
            <div class="brands-grid">
                <div class="brand-card">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg" alt="Apple">
                </div>
                <div class="brand-card">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/2/24/Samsung_Logo.svg" alt="Samsung">
                </div>
        
                <div class="brand-card">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/1/18/Dell_logo_2016.svg" alt="Dell">
                </div>
                <div class="brand-card">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/a/ad/HP_logo_2012.svg" alt="HP">
                </div>
                
            </div>
        </section>
    </main>
<?php include 'FileBack/footer.php';?> 
    
    <!-- Back to Home Button -->
    <a href="index.php" class="back-to-home" title="Về trang chủ">
        <i class="fas fa-home"></i>
    </a>
    
    <script>
        // Mobile-friendly glitch effect
        setInterval(() => {
            if(Math.random() > 0.97) {
                document.body.style.filter = 'hue-rotate(' + (Math.random() * 30 - 15) + 'deg)';
                setTimeout(() => {
                    document.body.style.filter = 'none';
                }, 200);
            }
        }, 5000);
        
        // Filter buttons functionality
        document.addEventListener('DOMContentLoaded', () => {
            const filterBtns = document.querySelectorAll('.filter-btn');
            filterBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    filterBtns.forEach(b => b.classList.remove('active'));
                    btn.classList.add('active');
                    // Here you would add filtering logic
                });
            });
            
            // Simple touch effect for mobile
            document.querySelectorAll('.pc-card, .brand-card, .social-link').forEach(el => {
                el.addEventListener('touchstart', function() {
                    this.classList.add('hover');
                }, false);
                el.addEventListener('touchend', function() {
                    setTimeout(() => this.classList.remove('hover'), 100);
                }, false);
            });
        });
    </script>
</body>
</html>