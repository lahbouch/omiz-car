<template>
  <div class="col-lg-4 theiaStickySidebar">
    <div class="stickysidebar">
      <div class="rightsidebar">
        <div class="card">
          <h4>
            <img src="@/assets/img/icons/details-icon.svg" alt="details-icon" />
            Filtrer
          </h4>
          <div class="filter-content looking-input form-group mb-0">
            <input
              type="text"
              class="form-control"
              placeholder="Rechercher..."
            />
          </div>
        </div>
        <div class="card">
          <h4>
            <img
              src="@/assets/img/icons/category-icon.svg"
              alt="details-icon"
            />
            Catégories
          </h4>
          <ul class="blogcategories-list">
            <li><a href="javascript:void(0)">Conseils de voyage</a></li>
            <li><a href="javascript:void(0)">Découverte de Tanger</a></li>
            <li><a href="javascript:void(0)">Location de voiture</a></li>
            <li><a href="javascript:void(0)">Routes à éviter</a></li>
            <li><a href="javascript:void(0)">Sécurité routière</a></li>
            <li><a href="javascript:void(0)">Meilleures destinations</a></li>
          </ul>
        </div>
        <div class="card tags-widget">
          <h4><i class="feather-tag"></i> Mots-clés</h4>
          <ul class="tags">
            <li>Tanger</li>
            <li>Voyage</li>
            <li>Location</li>
            <li>Routière</li>
            <li>Sécurité</li>
            <li>Découverte</li>
            <li>Conseils</li>
            <li>Maroc</li>
          </ul>
        </div>
        <div class="card">
          <h4><i class="feather-tag"></i>Articles populaires</h4>
          <div class="article">
            <div class="article-blog">
              <router-link to="/blog/blog-details">
                <img
                  class="img-fluid"
                  src="@/assets/img/blog/blog-3.jpg"
                  alt="Blog"
                />
              </router-link>
            </div>
            <div class="article-content">
              <h5>
                <router-link to="/blog/blog-details"
                  >Conseils pour préparer votre voyage d'affaires à
                  Tétouan</router-link
                >
              </h5>
              <div class="article-date">
                <i class="fa-solid fa-calendar-days"></i>
                <span>Jan 6, 2023</span>
              </div>
            </div>
          </div>
          <div class="article">
            <div class="article-blog">
              <router-link to="/blog/blog-details">
                <img
                  class="img-fluid"
                  src="@/assets/img/blog/blog-4.jpg"
                  alt="Blog"
                />
              </router-link>
            </div>
            <div class="article-content">
              <h5>
                <router-link to="/blog/blog-details"
                  >Les routes à éviter dans la région de Tanger</router-link
                >
              </h5>
              <div class="article-date">
                <i class="fa-solid fa-calendar-days"></i>
                <span>Feb 5, 2023</span>
              </div>
            </div>
          </div>
          <div class="article">
            <div class="article-blog">
              <router-link to="/blog/blog-details">
                <img
                  class="img-fluid"
                  src="@/assets/img/blog/blog-5.jpg"
                  alt="Blog"
                />
              </router-link>
            </div>
            <div class="article-content">
              <h5>
                <router-link to="/blog/blog-details"
                  >Comment profiter de l'été marocain en toute
                  sécurité</router-link
                >
              </h5>
              <div class="article-date">
                <i class="fa-solid fa-calendar-days"></i>
                <span>March 10, 2023</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
