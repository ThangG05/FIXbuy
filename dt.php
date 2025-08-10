<?php
    require 'FileBack/head.php';
?>
<link rel="stylesheet" href="/hieuung/mobile.css">
    <main class="container">
        <!-- Phone Showcase -->
        <section class="cyber-section">
            <div class="phone-header">
                <h1>ĐIỆN THOẠI CÔNG NGHỆ</h1>
              
            </div>
            
            <div class="phone-grid">
                <!-- iPhone 14 Pro Max -->
                <div class="phone-card">
                    <div class="phone-badge">MỚI NHẤT</div>
                    <div class="phone-image">
                        <img src="https://images.unsplash.com/photo-1664478546384-d57ffe74a78c?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="iPhone 14 Pro Max">
                    </div>
                    <div class="phone-info">
                        <div class="phone-name">IPHONE 14 PRO MAX</div>
                        <div class="phone-specs">
                            <span>Màn hình: 6.7" Super Retina XDR</span>
                            <span>Chip: A16 Bionic</span>
                            <span>RAM: 6GB - Bộ nhớ: 128GB</span>
                            <span>Camera: 48MP + 12MP + 12MP</span>
                        </div>
                        <div class="phone-price">27.990.000Đ</div>
                       
                    </div>
                </div>
                
                <!-- Samsung S23 Ultra -->
                <div class="phone-card">
                    <div class="phone-badge">BÁN CHẠY</div>
                    <div class="phone-image">
                        <img src="https://vnanet.vn/Data/Articles/2023/02/14/6583575/vna_potal_dien_thoai_samsung_galaxy_s23_lap_ky_luc_ve_so_don_dat_hang_truoc_tai_han_quoc__stand.jpg" alt="Samsung S23 Ultra">
                    </div>
                    <div class="phone-info">
                        <div class="phone-name">SAMSUNG S23 ULTRA</div>
                        <div class="phone-specs">
                            <span>Màn hình: 6.8" Dynamic AMOLED 2X</span>
                            <span>Chip: Snapdragon 8 Gen 2</span>
                            <span>RAM: 12GB - Bộ nhớ: 256GB</span>
                            <span>Camera: 200MP + 12MP + 10MP + 10MP</span>
                        </div>
                        <div class="phone-price">24.990.000Đ</div>
                      
                    </div>
                </div>
                
                <!-- Xiaomi 13 Pro -->
                <div class="phone-card">
                    <div class="phone-badge">GIÁ TỐT</div>
                    <div class="phone-image">
                        <img src="https://onewaymobile.vn/images/products/2023/03/11/large/xiaomi-13-lite-3_1678469224.webp" alt="Xiaomi 13 Pro">
                    </div>
                    <div class="phone-info">
                        <div class="phone-name">XIAOMI 13 PRO</div>
                        <div class="phone-specs">
                            <span>Màn hình: 6.73" AMOLED 120Hz</span>
                            <span>Chip: Snapdragon 8 Gen 2</span>
                            <span>RAM: 12GB - Bộ nhớ: 256GB</span>
                            <span>Camera: 50.3MP + 50MP + 50MP</span>
                        </div>
                        <div class="phone-price">18.990.000Đ</div>
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
                    <img src="https://upload.wikimedia.org/wikipedia/commons/a/ae/Xiaomi_logo_%282021-%29.svg" alt="Xiaomi">
                </div>
            </div>
        </section>
    </main>
<?php include 'FileBack/footer.php'; ?>
    <script>
        // Simplified effects for mobile performance
        document.addEventListener('DOMContentLoaded', () => {
            // Filter buttons functionality
            const filterBtns = document.querySelectorAll('.filter-btn');
            filterBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    filterBtns.forEach(b => b.classList.remove('active'));
                    btn.classList.add('active');
                    // Here you would add filtering logic
                });
            });
            
            // Disable heavy animations on mobile
            if (window.innerWidth <= 768) {
                document.body.style.animation = 'none';
                document.querySelector('.scanlines').style.display = 'none';
            }
        });
    </script>
    <a href="index.php" class="back-to-home" title="Về trang chủ">
        <i class="fas fa-home"></i>
    </a>
</body>
</html>