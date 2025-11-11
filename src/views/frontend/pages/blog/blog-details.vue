<template>
  <layouts-header></layouts-header>
  <!-- Breadscrumb Section -->
  <div class="blogbanner">
    <div class="blogbanner-content">
      <span class="blog-hint">Conseils</span>
      <h1>Découvrir Tanger en voiture : Les meilleurs endroits à visiter</h1>
      <ul class="entry-meta meta-item justify-content-center">
        <li>
          <div class="post-author">
            <div class="post-author-img">
              <img src="@/assets/img/profiles/avatar-01.jpg" alt="author" />
            </div>
            <a href="javascript:void(0)"><span> Sid TribaQ </span></a>
          </div>
        </li>
        <li class="date-icon">
          <i class="fa-solid fa-calendar-days"></i> 6 Octobre 2022
        </li>
      </ul>
    </div>
  </div>
  <!-- /Breadscrumb Section -->

  <!-- Blog Grid-->
  <div class="blog-section">
    <div class="container">
      <div class="blog-description">
        <p>
          Découvrir Tanger en voiture offre une liberté incomparable pour
          explorer cette ville fascinante et ses environs. Avec Omiz Car, vous
          pouvez profiter d'une location de voiture fiable et économique pour
          découvrir les meilleurs endroits de la région.
        </p>
        <p>
          La médina de Tanger est un incontournable, mais elle peut être
          difficile à explorer en voiture. Nous recommandons de vous garer dans
          un parking sécurisé et de terminer votre visite à pied. Le quartier de
          Kasbah, avec sa vue imprenable sur le détroit de Gibraltar, est
          accessible en voiture et vaut vraiment le détour.
        </p>
      </div>
      <blockquote class="blog-quotes">
        <img src="@/assets/img/blogquote.svg" alt="quotes" />
        <p>
          "Avec Omiz Car, votre voyage à Tanger devient une expérience sans
          stress. Nos véhicules économiques et bien entretenus vous permettent
          de profiter pleinement de votre séjour."
        </p>
        <h6>Sid TribaQ</h6>
      </blockquote>
      <div class="blog-description">
        <p>
          Pour les amateurs de plages, Cap Spartel est accessible en voiture et
          offre des paysages spectaculaires. La côte atlantique vous réserve de
          belles surprises, notamment les plages de Corniche et de Sidi Driss.
          N'oubliez pas de visiter les grottes d'Hercule, un site historique
          accessible en voiture depuis le centre-ville.
        </p>
        <p>
          Si vous souhaitez explorer au-delà de Tanger, la ville de Tétouan est
          à seulement 40 minutes en voiture. Cette ville inscrite au patrimoine
          mondial de l'UNESCO offre une médina authentique et des vues
          magnifiques sur la mer Méditerranée.
        </p>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-6">
          <div class="bloginner-img">
            <img
              src="@/assets/img/blog/blog-detail-01.jpg"
              class="img-fluid"
              alt="Blog"
            />
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="bloginner-img">
            <img
              src="@/assets/img/blog/blog-detail-02.jpg"
              class="img-fluid"
              alt="Blog"
            />
          </div>
        </div>
      </div>
      <div class="share-postsection">
        <div class="row">
          <div class="col-lg-4">
            <div class="sharelink d-flex align-items-center">
              <a href="javascript:void(0);" class="share-img"
                ><i class="feather-share-2"></i
              ></a>
              <a href="javascript:void(0);" class="share-text">Partager</a>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="tag-list">
              <ul class="tags">
                <li>Tanger</li>
                <li>Voyage</li>
                <li>Location</li>
                <li>Découverte</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="blogdetails-pagination">
        <ul>
          <li>
            <router-link to="/blog/blog-details" class="prev-link"
              ><i class="fas fa-regular fa-arrow-left"></i> Article
              précédent</router-link
            >
            <router-link to="/blog/blog-details"
              ><h3>Conseils pour préparer votre voyage d'affaires à Tétouan</h3>
            </router-link>
          </li>
          <li>
            <router-link to="/blog/blog-details" class="next-link"
              >Article suivant <i class="fas fa-regular fa-arrow-right"></i>
            </router-link>
            <router-link to="/blog/blog-details"
              ><h3>Comment profiter de l'été marocain en toute sécurité</h3>
            </router-link>
          </li>
        </ul>
      </div>
      <div class="review-sec mb-0">
        <div class="review-header">
          <h4>Avis<span>(2)</span></h4>
          <div class="reviewbox-list-rating">
            <p>
              <i class="fas fa-star filled me-1"></i>
              <i class="fas fa-star filled me-1"></i>
              <i class="fas fa-star filled me-1"></i>
              <i class="fas fa-star filled me-1"></i>
              <i class="fas fa-star filled"></i>
              <span> (5 sur 5)</span>
            </p>
          </div>
        </div>
        <div class="review-card">
          <div class="review-header-group">
            <div class="review-widget-header">
              <span class="review-widget-img">
                <img
                  src="@/assets/img/profiles/avatar-01.jpg"
                  class="img-fluid"
                  alt="Blog"
                />
              </span>
              <div class="review-design">
                <h6>Johnson</h6>
                <p>02 Jan 2023</p>
              </div>
            </div>
            <div class="reviewbox-list-rating">
              <p>
                <i class="fas fa-star filled me-1"></i>
                <i class="fas fa-star filled me-1"></i>
                <i class="fas fa-star filled me-1"></i>
                <i class="fas fa-star filled me-1"></i>
                <i class="fas fa-star filled"></i>
                <span> (5 sur 5)</span>
              </p>
            </div>
          </div>
          <p>
            Article très utile pour découvrir Tanger en voiture. La location
            avec Omiz Car a été parfaite, véhicule propre et bien entretenu. Je
            recommande vivement !
          </p>
        </div>
        <div class="review-card">
          <div class="review-header-group">
            <div class="review-widget-header">
              <span class="review-widget-img">
                <img
                  src="@/assets/img/profiles/avatar-02.jpg"
                  class="img-fluid"
                  alt="Blog"
                />
              </span>
              <div class="review-design">
                <h6>Casandra</h6>
                <p>02 Jan 2023</p>
              </div>
            </div>
            <div class="reviewbox-list-rating">
              <p>
                <i class="fas fa-star filled me-1"></i>
                <i class="fas fa-star filled me-1"></i>
                <i class="fas fa-star filled me-1"></i>
                <i class="fas fa-star filled me-1"></i>
                <i class="fas fa-star filled"></i>
                <span> (5 out of 5)</span>
              </p>
            </div>
          </div>
          <p>
            It was popularised in the 1960s with the release of Letraset sheets
            containing Lorem Ipsum passages, and more recently with desktop
            publishing software like Aldus PageMaker including versions of Lorem
            Ipsum.It was popularised in the 1960s
          </p>
        </div>
      </div>

      <div class="review-sec mb-0">
        <div class="review-header">
          <h4>Leave a Reply</h4>
        </div>
        <div class="card-body">
          <div class="review-list">
            <ul>
              <li class="review-box feedbackbox mb-0">
                <div class="review-details">
                  <form @submit.prevent="submitForm">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="input-block">
                          <label
                            >Full Name <span class="text-danger">*</span></label
                          >
                          <input type="text" class="form-control" />
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="input-block">
                          <label
                            >Email Address
                            <span class="text-danger">*</span></label
                          >
                          <input type="email" class="form-control" />
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="input-block">
                          <label>Comments </label>
                          <textarea rows="4" class="form-control"></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="submit-section">
                      <button
                        class="btn btn-primary submit-review"
                        type="submit"
                      >
                        Submit Review
                      </button>
                    </div>
                  </form>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Blog Grid-->
  <layout-footer></layout-footer>
</template>

<script>
export default {
  data() {
    return {};
  },
  methods: {
    submitForm() {
      this.$router.push("/blog-details");
    },
  },
};
</script>
