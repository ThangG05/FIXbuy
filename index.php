<?php require 'FileBack/head.php'; ?>
<link rel="stylesheet" href="/hieuung/home.css">

<main class="container">
    <button class="login-btn">Đăng nhập</button>
    <section class="cyber-section">
        <h1>SẢN PHẨM NỔI BẬT</h1>
        <div class="buy-filter">
            <button onclick="moForm()" class="buy-btn">Đặt hàng ngay</button>
        </div>
        <div class="cyber-products">
            <div class="cyber-product">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1603921326210-6edd2d60ca68?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="iPhone 14 Pro Max">
                    <div class="product-badge">NEW</div>
                </div>
                <div class="product-info">
                    <div class="product-name">IPHONE 14 PRO MAX 128GB</div>
                    <div class="cyber-text">Phiên bản giới hạn - Chip A16 Bionic - Màn hình Super Retina XDR</div>
                    <div class="product-price">27.990.000Đ</div>
                </div>
            </div>
            <div class="cyber-product">
                <div class="product-image">
                    <img src="https://down-vn.img.susercontent.com/file/vn-11134201-7qukw-lkgj634pl47w46" alt="Samsung Galaxy S23 Ultra">
                    <div class="product-badge">HOT</div>
                </div>
                <div class="product-info">
                    <div class="product-name">SAMSUNG S23 ULTRA 256GB</div>
                    <div class="cyber-text">Camera 200MP - Bút S-Pen - Pin 5000mAh</div>
                    <div class="product-price">24.990.000Đ</div>
                </div>
            </div>
            <div class="cyber-product">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1593642632823-8f785ba67e45?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="MacBook Pro M2">
                    <div class="product-badge">ĐẶC BIỆT</div>
                </div>
                <div class="product-info">
                    <div class="product-name">MACBOOK PRO M2 2023</div>
                    <div class="cyber-text">Chip Apple M2 Pro - 16GB RAM - SSD 512GB</div>
                    <div class="product-price">42.990.000Đ</div>
                </div>
            </div>
        </div>
    </section>
    <div id="formOverlay" class="form-overlay" onclick="dongForm()"></div>
    <div id="formDatHang" class="order-form-container">
        <div class="order-form-content">
            <div class="form-header">
                <h3>Thông tin đặt hàng</h3>
                <button class="close-btn" onclick="dongForm()">&times;</button>
            </div>
            <form id="formThongTin" onsubmit="guiForm(event)" class="order-form">
                <div class="form-group">
                    <label for="ten">Họ tên:</label>
                    <input type="text" id="ten" name="ten" required placeholder="Nhập họ tên đầy đủ">
                </div>

                <div class="form-group">
                    <label for="sdt">Số điện thoại:</label>
                    <input type="tel" id="sdt" name="sdt" required placeholder="Nhập số điện thoại">
                </div>

                <div class="form-group">
                    <label for="diachi">Địa chỉ:</label>
                    <input type="text" id="diachi" name="diachi" required placeholder="Nhập địa chỉ giao hàng">
                </div>

                <div class="form-group">
                    <label for="sanpham">Tên sản phẩm:</label>
                    <select id="sanpham" name="sanpham" required>
                        <option value="" disabled selected>Chọn sản phẩm</option>
                        <option value="IPHONE 14 PRO MAX 128GB">IPHONE 14 PRO MAX 128GB - 27.990.000Đ</option>
                        <option value="SAMSUNG S23 ULTRA 256GB">SAMSUNG S23 ULTRA 256GB - 24.990.000Đ</option>
                        <option value="MACBOOK PRO M2 2023">MACBOOK PRO M2 2023 - 42.990.000Đ</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="soluong">Số lượng:</label>
                    <input type="number" id="soluong" name="soluong" required min="1" value="1">
                </div>

                <div class="form-group">
                    <label for="ghichu">Ghi chú:</label>
                    <textarea id="ghichu" name="ghichu" placeholder="Ghi chú thêm (nếu có)"></textarea>
                </div>

                <div class="form-actions">
                    <button type="submit" class="submit-btn">Xác nhận đặt hàng</button>
                    <button type="button" onclick="dongForm()" class="cancel-btn">Hủy bỏ</button>
                </div>
            </form>
        </div>
    </div>


    <section class="cyber-section">
        <h2>DANH MỤC SẢN PHẨM</h2>
        <div class="cyber-categories">
            <div class="cyber-category"><a href="dt.php">ĐIỆN THOẠI</a></div>
            <div class="cyber-category"><a href="mt.php">MÁY TÍNH</a></div>
        </div>
    </section>


    <section class="cyber-section">
        <h2>VỀ CHÚNG TÔI</h2>
        <p class="cyber-text">
            CỬA HÀNG ThangG - TIÊN PHONG CÔNG NGHỆ TƯƠNG LAI.
            CHÚNG TÔI MANG ĐẾN NHỮNG SẢN PHẨM CÔNG NGHỆ CAO CẤP NHẤT,
            ĐÁP ỨNG MỌI NHU CẦU CỦA GIỚI TECHER VIỆT NAM.
        </p>
        <p class="cyber-text">
            CAM KẾT HÀNG CHÍNH HÃNG 100% - BẢO HÀNH DÀI HẠN - HỖ TRỢ 24/7
        </p>
    </section>
    <section class="cyber-section">
        <h2>LIÊN HỆ</h2>
        <div class="cyber-contact">
            <div class="contact-item">
                <div class="contact-icon">
                    <i class="fas fa-map-marked-alt"></i>
                </div>
                <h3>ĐỊA CHỈ</h3>
                <p class="cyber-text">Số 12 Chùa Bộc, Quận Đống Đa, TP. Hà Nội</p>
            </div>
            <div class="contact-item">
                <div class="contact-icon">
                    <i class="fas fa-phone-alt"></i>
                </div>
                <h3>ĐIỆN THOẠI</h3>
                <p class="cyber-text">0396193041</p>
            </div>
            <div class="contact-item">
                <div class="contact-icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <h3>EMAIL</h3>
                <p class="cyber-text">26A4041668@hvnh.edu.vn</p>
            </div>
        </div>
    </section>
</main>

<?php include 'FileBack/footer.php'; ?>

<script>
    setInterval(() => {
        if (Math.random() > 0.95) {
            document.body.style.filter = 'hue-rotate(' + (Math.random() * 60 - 30) + 'deg)';
            setTimeout(() => {
                document.body.style.filter = 'none';
            }, 300);
        }
    }, 5000);

    document.addEventListener('DOMContentLoaded', () => {
        const cursorTrail = document.createElement('div');
        cursorTrail.style.position = 'fixed';
        cursorTrail.style.width = '15px';
        cursorTrail.style.height = '15px';
        cursorTrail.style.backgroundColor = 'var(--neon-blue)';
        cursorTrail.style.borderRadius = '50%';
        cursorTrail.style.pointerEvents = 'none';
        cursorTrail.style.mixBlendMode = 'screen';
        cursorTrail.style.transform = 'translate(-50%, -50%)';
        cursorTrail.style.zIndex = '9999';
        cursorTrail.style.opacity = '0';
        cursorTrail.style.filter = 'blur(2px)';
        document.body.appendChild(cursorTrail);

        document.addEventListener('mousemove', (e) => {
            cursorTrail.style.left = e.clientX + 'px';
            cursorTrail.style.top = e.clientY + 'px';
            cursorTrail.style.opacity = '0.7';

            setTimeout(() => {
                cursorTrail.style.opacity = '0';
            }, 100);
        });
    });


    function moForm() {
        document.getElementById('formOverlay').style.display = 'block';
        document.getElementById('formDatHang').style.display = 'block';
        document.body.style.overflow = 'hidden';
    }

    function dongForm() {
        document.getElementById('formOverlay').style.display = 'none';
        document.getElementById('formDatHang').style.display = 'none';
        document.body.style.overflow = '';
    }

    function guiForm(e) {
        e.preventDefault();
        const form = e.target;
        const submitBtn = form.querySelector('.submit-btn');
        const originalText = submitBtn.textContent;

        submitBtn.textContent = 'Đang gửi...';
        submitBtn.disabled = true;


        fetch('https://formspree.io/f/meoaneol', {
                method: 'POST',
                body: new FormData(form),
                headers: {
                    'Accept': 'application/json'
                }
            })
            .then(response => {
                if (response.ok) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Thành công!',
                        text: 'Đơn hàng đã được gửi',
                        confirmButtonColor: '#4CAF50'
                    });
                    form.reset();
                    dongForm();
                } else {
                    throw new Error('Lỗi server');
                }
            })
            .catch(error => {
                Swal.fire({
                    icon: 'error',
                    title: 'Lỗi!',
                    text: 'Vui lòng thử lại hoặc liên hệ SĐT: 0396.193.041',
                    confirmButtonColor: '#4CAF50'
                });
            })
            .finally(() => {
                submitBtn.textContent = originalText;
                submitBtn.disabled = false;
            });
    }

    function animateOnScroll() {
        const elements = document.querySelectorAll('.cyber-product, .contact-item');

        elements.forEach(element => {
            const elementPosition = element.getBoundingClientRect().top;
            const screenPosition = window.innerHeight / 1.2;

            if (elementPosition < screenPosition) {
                element.style.opacity = '1';
                element.style.transform = 'translateY(0)';
            }
        });
    }

    document.addEventListener('DOMContentLoaded', function() {
        const products = document.querySelectorAll('.cyber-product');
        const contactItems = document.querySelectorAll('.contact-item');

        products.forEach((product, index) => {
            product.style.opacity = '0';
            product.style.transform = 'translateY(20px)';
            product.style.transition = `opacity 0.5s ease ${index * 0.1}s, transform 0.5s ease ${index * 0.1}s`;
        });

        contactItems.forEach((item, index) => {
            item.style.opacity = '0';
            item.style.transform = 'translateY(20px)';
            item.style.transition = `opacity 0.5s ease ${index * 0.1 + 0.3}s, transform 0.5s ease ${index * 0.1 + 0.3}s`;
        });

        window.addEventListener('scroll', animateOnScroll);
        animateOnScroll();
    });
    document.getElementById('loginBtn')?.addEventListener('click', function() {
        document.getElementById('loginOverlay').style.display = 'block';
        document.getElementById('loginForm').style.display = 'block';
        document.body.style.overflow = 'hidden';
    });

    function closeLoginForm() {
        document.getElementById('loginOverlay').style.display = 'none';
        document.getElementById('loginForm').style.display = 'none';
        document.body.style.overflow = '';
    }
</script>
<div id="loginOverlay" class="form-overlay" onclick="closeLoginForm()"></div>
<div id="loginForm" class="order-form-container">
    <div class="order-form-content">
        <div class="form-header">
            <h3>Đăng nhập</h3>
            <button class="close-btn" onclick="closeLoginForm()">&times;</button>
        </div>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="order-form">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" required placeholder="Nhập username">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="pass" required placeholder="Nhập mật khẩu">
            </div>
            <div class="form-actions">
                <button type="submit" name="submit" class="submit-btn">Đăng nhập</button>
                <button type="button" onclick="closeLoginForm()" class="cancel-btn">Hủy</button>
            </div>
        </form>
    </div>
</div>
</body>

</html>