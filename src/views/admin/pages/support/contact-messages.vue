<template>
  <admin-header></admin-header>
  <admin-sidebar></admin-sidebar>
  <div class="page-wrapper">
    <div class="content me-4">
      <!-- Breadcrumb -->
      <div
        class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3"
      >
        <div class="my-auto mb-2">
          <h4 class="mb-1">Contact Messages</h4>
          <nav>
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item">
                <router-link to="/admin-template/index">Home</router-link>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Contact Messages
              </li>
            </ol>
          </nav>
        </div>
      </div>
      <!-- /Breadcrumb -->

      <!-- Table Header -->
      <div
        class="d-flex align-items-center justify-content-between flex-wrap row-gap-3 mb-3"
      >
        <div class="d-flex align-items-center flex-wrap row-gap-3">
          <div class="dropdown me-2">
            <a
              href="javascript:void(0);"
              class="dropdown-toggle btn btn-white d-inline-flex align-items-center"
              data-bs-toggle="dropdown"
            >
              <i class="ti ti-filter me-1"></i> Sort By : Latest
            </a>
            <ul class="dropdown-menu dropdown-menu-end p-2">
              <li>
                <a href="javascript:void(0);" class="dropdown-item rounded-1"
                  >Latest</a
                >
              </li>
              <li>
                <a href="javascript:void(0);" class="dropdown-item rounded-1"
                  >Ascending</a
                >
              </li>
              <li>
                <a href="javascript:void(0);" class="dropdown-item rounded-1"
                  >Desending</a
                >
              </li>
              <li>
                <a href="javascript:void(0);" class="dropdown-item rounded-1"
                  >Last Month</a
                >
              </li>
              <li>
                <a href="javascript:void(0);" class="dropdown-item rounded-1"
                  >Last 7 Days</a
                >
              </li>
            </ul>
          </div>
        </div>
        <div
          class="d-flex my-xl-auto right-content align-items-center flex-wrap row-gap-3"
        >
          <div class="top-search me-2">
            <div class="top-search-group">
              <span class="input-icon">
                <i class="ti ti-search"></i>
              </span>
              <input
                type="text"
                class="form-control"
                placeholder="Search"
                v-model="searchQuery"
                @input="searchMessages"
              />
            </div>
          </div>
          <div class="dropdown">
            <a
              href="javascript:void(0);"
              class="dropdown-toggle coloumn btn btn-white d-inline-flex align-items-center"
              data-bs-toggle="dropdown"
            >
              <i class="ti ti-layout-board me-1"></i> Columns
            </a>
            <div class="dropdown-menu dropdown-menu-lg p-2">
              <ul>
                <li>
                  <div
                    class="dropdown-item d-flex align-items-center justify-content-between rounded-1"
                  >
                    <span class="d-inline-flex align-items-center"
                      ><i class="ti ti-grip-vertical me-1"></i>FROM</span
                    >
                    <div class="form-check form-check-sm form-switch mb-0">
                      <input
                        class="form-check-input form-label"
                        type="checkbox"
                        role="switch"
                        checked=""
                      />
                    </div>
                  </div>
                </li>
                <li>
                  <div
                    class="dropdown-item d-flex align-items-center justify-content-between rounded-1"
                  >
                    <span><i class="ti ti-grip-vertical me-1"></i>PHONE</span>
                    <div class="form-check form-check-sm form-switch mb-0">
                      <input
                        class="form-check-input form-label"
                        type="checkbox"
                        role="switch"
                        checked=""
                      />
                    </div>
                  </div>
                </li>
                <li>
                  <div
                    class="dropdown-item d-flex align-items-center justify-content-between rounded-1"
                  >
                    <span><i class="ti ti-grip-vertical me-1"></i>EMAIL</span>
                    <div class="form-check form-check-sm form-switch mb-0">
                      <input
                        class="form-check-input form-label"
                        type="checkbox"
                        role="switch"
                        checked=""
                      />
                    </div>
                  </div>
                </li>
                <li>
                  <div
                    class="dropdown-item d-flex align-items-center justify-content-between rounded-1"
                  >
                    <span
                      ><i class="ti ti-grip-vertical me-1"></i>CREATED
                      DATE</span
                    >
                    <div class="form-check form-check-sm form-switch mb-0">
                      <input
                        class="form-check-input form-label"
                        type="checkbox"
                        role="switch"
                        checked=""
                      />
                    </div>
                  </div>
                </li>
                <li>
                  <div
                    class="dropdown-item d-flex align-items-center justify-content-between rounded-1"
                  >
                    <span><i class="ti ti-grip-vertical me-1"></i>MESSAGE</span>
                    <div class="form-check form-check-sm form-switch mb-0">
                      <input
                        class="form-check-input form-label"
                        type="checkbox"
                        role="switch"
                        checked=""
                      />
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- /Table Header -->

      <!-- Contact Messages Table -->
      <div class="card">
        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table table-center table-hover mb-0">
              <thead class="thead-light">
                <tr>
                  <th>FROM</th>
                  <th>PHONE</th>
                  <th>EMAIL</th>
                  <th>CREATED DATE</th>
                  <th>MESSAGE</th>
                  <th>ACTION</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="message in messages" :key="message.id">
                  <td>
                    <div class="d-flex align-items-center">
                      <router-link
                        to="/admin-template/support/contact-messages"
                        class="avatar me-2 flex-shrink-0"
                      >
                        <img
                          :src="getImageURL(message.image)"
                          class="rounded-circle"
                          alt=""
                        />
                      </router-link>
                      <h6>
                        <a
                          href="javascript:void(0);"
                          class="fs-14 fw-semibold"
                          >{{ message.from }}</a
                        >
                      </h6>
                    </div>
                  </td>
                  <td>
                    <p class="text-gray-9">{{ message.phone }}</p>
                  </td>
                  <td>
                    <p class="text-gray-9">{{ message.email }}</p>
                  </td>
                  <td>
                    <p class="text-gray-9">{{ message.createdDate }}</p>
                  </td>
                  <td>
                    <span
                      class="avatar avatar-md bg-light rounded-circle"
                      data-bs-toggle="tooltip"
                      data-bs-placement="top"
                      data-bs-custom-class="custom-tooltip"
                      :data-bs-title="message.message"
                    >
                      <i class="ti ti-file-invoice text-gray-9"></i>
                    </span>
                  </td>
                  <td>
                    <div class="dropdown">
                      <button
                        class="btn btn-icon btn-sm"
                        type="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                      >
                        <i class="ti ti-dots-vertical"></i>
                      </button>
                      <ul class="dropdown-menu dropdown-menu-end p-2">
                        <li>
                          <a
                            class="dropdown-item rounded-1"
                            href="javascript:void(0);"
                            @click="deleteMessage(message.id)"
                            ><i class="ti ti-trash me-1"></i>Delete</a
                          >
                        </li>
                      </ul>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- /Contact Messages Table -->

      <!-- Info Message -->
      <div class="alert alert-info mt-3">
        <p class="mb-0">
          <i class="ti ti-info-circle me-2"></i>
          This page would connect to a contact messages API endpoint in a real
          implementation. Currently showing sample data for demonstration
          purposes.
        </p>
      </div>
      <!-- /Info Message -->

      <!-- Pagination -->
      <div class="d-sm-flex align-items-center justify-content-between p-3">
        <div class="mb-2 mb-sm-0">
          <p class="mb-0">Showing {{ messages.length }} entries</p>
        </div>
        <div>
          <ul class="pagination mb-0">
            <li class="page-item disabled">
              <a class="page-link" href="javascript:void(0);">Previous</a>
            </li>
            <li class="page-item">
              <a class="page-link active" href="javascript:void(0);">1</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="javascript:void(0);">Next</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- /Pagination -->
    </div>
    <!-- Footer-->
    <div
      class="footer d-sm-flex align-items-center justify-content-between bg-white p-3"
    >
      <p class="mb-0">
        <a href="javascript:void(0);">Privacy Policy</a>
        <a href="javascript:void(0);" class="ms-4">Terms of Use</a>
      </p>
      <p>
        &copy; 2025 Dreamsrent, Made with <span class="text-danger">❤</span> by
        <a href="javascript:void(0);" class="text-secondary">Dreams</a>
      </p>
    </div>
    <!-- /Footer-->
  </div>
  <div class="modal fade" id="delete_contact">
    <div class="modal-dialog modal-dialog-centered modal-sm">
      <div class="modal-content">
        <div class="modal-body text-center">
          <span
            class="avatar avatar-lg bg-transparent-danger rounded-circle text-danger mb-3"
          >
            <i class="ti ti-trash-x fs-26"></i>
          </span>
          <h4 class="mb-1">Delete Message</h4>
          <p class="mb-3">Are you sure you want to delete message?</p>
          <div class="d-flex justify-content-center">
            <a
              href="javascript:void(0);"
              class="btn btn-light me-3"
              data-bs-dismiss="modal"
              >Cancel</a
            >
            <a
              href="javascript:void(0);"
              class="btn btn-primary"
              data-bs-dismiss="modal"
              @click="confirmDelete"
              >Yes, Delete</a
            >
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      messages: [
        {
          id: 1,
          from: "Andrew Simons",
          image: "avatar-20.jpg",
          phone: "+1 555 123 4567",
          email: "andrew@example.com",
          createdDate: "24 Jan 2025",
          message:
            "Hi, I booked a car but haven't received a confirmation email. Can you check?",
        },
        {
          id: 2,
          from: "David Steiger",
          image: "avatar-21.jpg",
          phone: "+44 7911 123456",
          email: "david@example.com",
          createdDate: "19 Dec 2024",
          message: "I need to change my pickup location. Is that possible?",
        },
        {
          id: 3,
          from: "Virginia Phu",
          image: "avatar-12.jpg",
          phone: "+33 612 345678",
          email: "phu@example.com",
          createdDate: "11 Dec 2024",
          message: "What is your cancellation policy?",
        },
        {
          id: 4,
          from: "Walter Hartmann",
          image: "avatar-22.jpg",
          phone: "+61 412 345 678",
          email: "walter@example.com",
          createdDate: "29 Nov 2024",
          message: "Do you offer child seats for rental cars?",
        },
        {
          id: 5,
          from: "Andrea Jermaine",
          image: "avatar-27.jpg",
          phone: "+91 98765 43210",
          email: "jermaine@example.com",
          createdDate: "03 Nov 2024",
          message: "Can I extend my rental period?",
        },
      ],
      searchQuery: "",
      messageToDelete: null,
    };
  },
  methods: {
    getImageURL(imageName) {
      return new URL(
        `/src/assets/admin/img/profiles/${imageName}`,
        import.meta.url
      ).href;
    },
    deleteMessage(messageId) {
      this.messageToDelete = messageId;
      // Show the modal
      const modal = new bootstrap.Modal(
        document.getElementById("delete_contact")
      );
      modal.show();
    },
    confirmDelete() {
      if (this.messageToDelete) {
        this.messages = this.messages.filter(
          (message) => message.id !== this.messageToDelete
        );
        this.messageToDelete = null;
      }
    },
    searchMessages() {
      // In a real implementation, this would filter the messages based on the search query
      // For now, we'll just keep the static data
    },
  },
  mounted() {
    // Initialize tooltips
    const tooltipTriggerList = [].slice.call(
      document.querySelectorAll('[data-bs-toggle="tooltip"]')
    );
    tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl);
    });
  },
};
</script>
