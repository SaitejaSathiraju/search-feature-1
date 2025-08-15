<?php include 'header.php'; ?> 
<?php include 'navbar.php'; ?> 

<!-- External Libraries -->
<link rel="stylesheet" href="assets/css/bootstrap4.6.2.min.css">
<link rel="stylesheet" href="assets/vendor/glightbox/css/glightbox.min.css">

<script src="assets/js/jquery.slim.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap4.6.2.bundle.min.js"></script>
<script src="assets/vendor/glightbox/dist/js/glightbox.min.js"></script>

<style>
  :root {
    --thumb-size: 70px;
    --thumb-gap: 12px;
    --primary-color: #3f68b5;
  }

  .gallery-container {
    max-width: 1200px;
    margin: auto;
    padding: 20px;
    background: white;
    border-radius: 10px;
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.05);
  }

  .main-carousel .carousel-inner {
    aspect-ratio: 16/9;
    background-color: #000;
    border-radius: 10px;
    overflow: hidden;
  }

  .carousel-item img {
    width: 100%;
    height: 100%;
    object-fit: contain;
    transition: transform 0.5s ease;
  }

  .carousel-item img:hover {
    transform: scale(1.12);
  }

  .carousel-control-prev-icon,
  .carousel-control-next-icon {
    background-size: 60%;
    background-color: rgba(0, 0, 0, 0.6);
    border-radius: 50%;
  }

  .thumbnail-gallery {
    position: relative;
    margin-top: 25px;
  }

  .thumbnails-container {
    display: flex;
    gap: var(--thumb-gap);
    overflow-x: auto;
    padding: 10px 0;
    scroll-snap-type: x mandatory;
    -ms-overflow-style: none;
    scrollbar-width: none;
  }

  .thumbnails-container::-webkit-scrollbar {
    display: none;
  }

  .thumbnail {
    scroll-snap-align: start;
    width: var(--thumb-size);
    height: var(--thumb-size);
    border-radius: 8px;
    overflow: hidden;
    cursor: pointer;
    flex-shrink: 0;
    border: 2px solid transparent;
    transition: all 0.3s ease;
  }

  .thumbnail img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .thumbnail.active {
    border-color: var(--primary-color);
    box-shadow: 0 4px 10px rgba(63, 104, 181, 0.4);
  }

  .thumb-btn {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    width: 35px;
    height: 35px;
    background: #fff;
    border: none;
    border-radius: 50%;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.15);
    z-index: 10;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
    cursor: pointer;
    transition: transform 0.2s ease;
  }

  .thumb-btn:hover {
    transform: translateY(-50%) scale(1.1);
  }

  .thumb-btn.prev {
    left: -15px;
  }

  .thumb-btn.next {
    right: -15px;
  }

  @media (max-width: 768px) {
    :root {
      --thumb-size: 60px;
      --thumb-gap: 8px;
    }

    .carousel-inner {
      aspect-ratio: 4/3;
    }
  }
</style>

<main class="main">
  <div >
    <div class="container">
      <h3 style="text-align:center"><br/><b>Photo Gallery - 53rd Meeting of International Charter on Space & Major Disasters<br>14 -17 APRIL, 2025</b></h3>
    </div>
  </div>

  <div class="gallery-container">
    <!-- Main Carousel -->
    <div id="mainCarousel" class="carousel slide carousel-fade main-carousel" data-bs-ride="carousel">
      <div class="carousel-inner" id="carousel-inner"></div>

      <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
      </button>
    </div>

    <!-- Thumbnails -->
    <div class="thumbnail-gallery">
      <button class="thumb-btn prev">❮</button>
      <div class="thumbnails-container" id="thumbnails-container"></div>
      <button class="thumb-btn next">❯</button>
    </div>
  </div>
</main>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const totalImages = 15;
  const imagePath = 'assets/img/event-gallery/charter/';
  const carouselInner = document.getElementById('carousel-inner');
  const thumbnailsContainer = document.getElementById('thumbnails-container');
  const thumbnailElements = [];

  // Create carousel and thumbnails
  for (let i = 1; i <= totalImages; i++) {
    // Create carousel item
    const carouselItem = document.createElement('div');
    carouselItem.className = 'carousel-item';
    if (i === 1) carouselItem.classList.add('active');

    const link = document.createElement('a');
    link.href = `${imagePath}${i}.jpg`;
    link.className = 'glightbox';
    link.setAttribute('data-gallery', 'gallery');

    const img = document.createElement('img');
    img.src = `${imagePath}${i}.jpg`;
    img.alt = `Image ${i}`;
    img.loading = 'lazy';

    link.appendChild(img);
    carouselItem.appendChild(link);
    carouselInner.appendChild(carouselItem);

    // Create thumbnail
    const thumb = document.createElement('div');
    thumb.className = 'thumbnail';
    if (i === 1) thumb.classList.add('active');
    thumb.dataset.index = i - 1;

    const thumbImg = document.createElement('img');
    thumbImg.src = `${imagePath}${i}.jpg`;
    thumbImg.alt = `Thumbnail ${i}`;

    thumb.appendChild(thumbImg);
    thumbnailsContainer.appendChild(thumb);
    thumbnailElements.push(thumb);

    // Add click event
    thumb.addEventListener('click', () => {
      carousel.to(parseInt(thumb.dataset.index));
    });
  }

  const carousel = new bootstrap.Carousel(document.getElementById('mainCarousel'), {
    interval: 3000,
    wrap: true,
  });

  // Update active thumbnail when carousel slides
  document.getElementById('mainCarousel').addEventListener('slid.bs.carousel', function (e) {
    updateActiveThumb(e.to);
  });

  function updateActiveThumb(index) {
    thumbnailElements.forEach((el, i) => {
      el.classList.toggle('active', i === index);
    });

    // Optional: Auto-scroll to active thumb
    const activeThumb = thumbnailElements[index];
    if (activeThumb) {
      activeThumb.scrollIntoView({ behavior: 'smooth', inline: 'center', block: 'nearest' });
    }
  }

  // Scroll thumbnail container
  document.querySelector('.thumb-btn.prev').onclick = () => {
    thumbnailsContainer.scrollBy({ left: -100, behavior: 'smooth' });
  };

  document.querySelector('.thumb-btn.next').onclick = () => {
    thumbnailsContainer.scrollBy({ left: 100, behavior: 'smooth' });
  };

  // Initialize GLightbox
  GLightbox({ selector: '.glightbox' });
});
</script>
<?php include 'gallery-template.php'; ?>
<?php include 'footer.php'; ?>